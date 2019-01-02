<?php
require_once (File::build_path(array("model", "Model.php")));

class ModelLesson extends Model{
    
	protected static $object = "Lesson";
	protected static $primary = "idLesson";
    protected $idLesson;
    protected $idTeacher;
    protected $idSubject;
    protected $idGroup;
    protected $idRoom;
    protected $hourStart;
    protected $duration;
    protected $day;
        
    // Constructeur
    public function __construct($t = NULL, $s = NULL, $g = NULL, $r = NULL, $d = NULL) {
      if (!is_null($t) && !is_null($s) && !is_null($g) && !is_null($r) && !is_null($d)) {
        $this->idTeacher = $t;
        $this->idSubject = $s;
        $this->idGroup = $g;
        $this->idRoom = $r;
        $this->duration = $d;
      }
    }

    // Getter générique
    public function get($nom_attribut) {
        if (property_exists($this, $nom_attribut))
            return $this->$nom_attribut;
        return false;
    }

    // Setter générique
    public function set($nom_attribut, $valeur) {
        if (property_exists($this, $nom_attribut))
            $this->$nom_attribut = $valeur;
        return false;
    }
    
	// Retourne toutes les lecons du groupe passe en parametre
    public static function getLessonByGroup($idGroup) {
		$champs = "";
        foreach ($idGroup as $cle => $valeur){
            $champs = $champs .'idGroup = :'.$valeur.' OR ';
        }
		try {
			$sql = "SELECT * 
					FROM sch_Teacher t
					JOIN sch_Lesson l on t.idTeacher = l.idTeacher
					JOIN sch_Subject s ON l.idSubject = s.idSubject 
					WHERE ".rtrim($champs, ' OR ');
			// Préparation de la requête
			$req_prep = Model::$pdo->prepare($sql);

			foreach ($idGroup as $cle => $valeur){
					$values[$valeur] = $valeur;
			}
			// On donne les valeurs et on exécute la requête   
			$req_prep->execute($values);

			// On récupère les résultats comme précédemment
			$req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelLesson');
			$tab_lesson = $req_prep->fetchAll(PDO::FETCH_ASSOC);
			return $tab_lesson;
		} catch(PDOException $e) {
            if (Conf::getDebug())
                echo $e->getMessage(); // affiche un message d'erreur
            else
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            die();
		}
    }
     
	// Retourne toutes les lecons du groupe passe en parametre
	// qui ne sont pas attribuées a un jour 
    public static function getNewlessonByGroup($idGroup) {
		try {
			$sql = "SELECT * 
					FROM sch_Teacher t
					JOIN sch_Lesson l on t.idTeacher = l.idTeacher
					JOIN sch_Subject s ON l.idSubject = s.idSubject
					WHERE idGroup=:group
					AND day IS NULL
					ORDER BY idLesson";
			// Préparation de la requête
			$req_prep = Model::$pdo->prepare($sql);

			$values = array(
				"group" => $idGroup,
			);
			// On donne les valeurs et on exécute la requête   
			$req_prep->execute($values);

			// On récupère les résultats comme précédemment
			$req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelLesson');
			$tab_lesson = $req_prep->fetchAll(PDO::FETCH_ASSOC);
			// Attention, si il n'y a pas de résultats, on renvoie false
			if (empty($tab_lesson))
				return false;
			return $tab_lesson;
		} catch(PDOException $e) {
            if (Conf::getDebug())
                echo $e->getMessage(); // affiche un message d'erreur
            else
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            die();
		}
    }
  }
?>
