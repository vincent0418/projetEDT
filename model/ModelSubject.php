<?php
require_once (File::build_path(array("model", "Model.php")));

class ModelSubject extends Model{
    
	protected static $object = "Subject";
	protected static $primary = "idSubject";
    protected $idSubject;
    protected $nameSubject;
    protected $color;
        
    // Constructeur
    public function __construct($n = NULL, $c = "ffe4c4") {
      if (!is_null($n)) {
        $this->nameSubject = $n;
        $this->color = $c;
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
	
	// Retourne une liste des matieres par ordre croissant des noms
	public static function selectByOrder() {
		try{
			$rep = Model::$pdo->query("SELECT * 
									   FROM sch_Subject
									   ORDER BY nameSubject");
			$rep->setFetchMode(PDO::FETCH_CLASS, "ModelSubject");
			$tab = $rep->fetchAll();
		} catch(PDOException $e) {
			if (Conf::getDebug())
				echo $e->getMessage(); // affiche un message d'erreur
			else
				echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
			die();
		}
		return $tab;
    }
    
    // Retourne l'id de la matiere en fonction du nom
    public static function selectIdByName($nameSubject) {  
        try{
            $sql = "SELECT idSubject
                    FROM sch_Subject
                    WHERE nameSubject = :name";
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
              "name" => $nameSubject,
            );
            $req_prep->execute($values);
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelSubject");
            $tab = $req_prep->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            if (Conf::getDebug())
                echo $e->getMessage(); // affiche un message d'erreur
            else
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            die();
		}
        //Si il n'y a pas de résultats, on renvoie false
        if (empty($tab))
            return false;
        return $tab[0];
    }
}
?>
