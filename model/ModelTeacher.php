<?php
require_once (File::build_path(array("model", "Model.php")));

class ModelTeacher extends Model{
    
	protected static $object = "Teacher";
	protected static $primary = "idTeacher";
    protected $idTeacher;
    protected $nameTeacher;
    protected $firstNameTeacher;
        
    // Constructeur
    public function __construct($n = NULL, $f = NULL) {
      if (!is_null($n) && !is_null($f)) {
        $this->nameTeacher = $n;
        $this->firstNameTeacher = $f;
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
	
	// Retourne une liste des professeurs par ordre croissant des noms
	public static function selectByOrder() {
		try{
			$rep = Model::$pdo->query("SELECT * 
									   FROM sch_Teacher
									   ORDER BY nameTeacher");
			$rep->setFetchMode(PDO::FETCH_CLASS, "ModelTeacher");
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
    
    // Retourne l'id du professeur en fonction du nom et du prenom
    public static function selectIdByName($nameTeacher, $firstNameTeacher) {
        try{
            $sql = "SELECT idTeacher
                    FROM sch_Teacher
                    WHERE nameTeacher = :name AND firstNameTeacher = :firstName";
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
              "name" => $nameTeacher,
              "firstName" => $firstNameTeacher,
            );
            $req_prep->execute($values);
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelTeacher");
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
