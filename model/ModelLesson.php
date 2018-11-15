<?php

require_once (File::build_path(array("model", "Model.php")));

  class ModelLesson {
     
    private $idLesson;
    private $idTeacher;
    private $idSubject;
    private $idGroup;
    private $idRoom;
    private $hourStart;
    private $duration;
    private $day;
        
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

    public function save() {
        $sql = "INSERT INTO sch_Lesson (idTeacher,  idSubject, idGroup, idRoom, duration) 
                VALUES (:teacher, :subject, :group, :room, :duration)";
        // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            'teacher' => $this->idTeacher,
            'subject' => $this->idSubject,
            'group' => $this->idGroup,
            'room' => $this->idRoom,
            'duration' => $this->duration,
        );
        // On donne les valeurs et on exécute la requête   
        $req_prep->execute($values);
    }
    
    /*
    public static function getlessonByGroup($idGroupe) {
        $sql = "SELECT * from lesson WHERE immatriculation=:nom_tag";
        // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            "nom_tag" => $immat,
        );
        // On donne les valeurs et on exécute la requête   
        $req_prep->execute($values);

        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelLesson');
        $tab_voit = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_voit))
            return false;
        return $tab_voit[0];
    }
      
    public static function deleteByImmat($immat) {
        $sql = "DELETE FROM lesson 
                WHERE immatriculation = :immatriculation";
        // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            'immatriculation' => $immat,
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);
    }
      
    public static function update($data) {
        $sql = "UPDATE lesson
                SET couleur = :couleur, marque = :marque
                WHERE immatriculation = :immatriculation";
        $req_prep = Model::$pdo->prepare($sql);
        
        $req_prep->execute($data);
    }*/
  }
?>
