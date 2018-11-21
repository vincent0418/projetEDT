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
        $sql = "INSERT INTO sch_Lesson (idTeacher, idSubject, idGroup, idRoom, duration) 
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
      
    public static function delete($idLesson) {
        $sql = "DELETE FROM sch_Lesson
                WHERE idLesson = :idLesson";
        // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            'idLesson' => $idLesson,
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);
    }
    
    public static function getLessonByGroup($idGroup) {
        $sql = "SELECT * 
                FROM sch_Teacher t
                JOIN sch_Lesson l on t.idTeacher = l.idTeacher
                JOIN sch_Subject s ON l.idSubject = s.idSubject 
                WHERE idGroup=:group";
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
        // Attention, si il n'y a pas de résultats, on renvoie un message d'erreur
        if (empty($tab_lesson))
            return false;
        return $tab_lesson;
    }
      
    public static function getNewlessonByGroup($idGroup) {
        $sql = "SELECT * 
                FROM sch_Lesson 
                WHERE idGroup=:group
                AND day IS NULL";
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
    }

    public static function getTeacherByLesson($idLesson) {
        $sql = "SELECT DISTINCT nameTeacher, firstNameTeacher 
                FROM sch_Lesson l 
                JOIN sch_Teacher t ON l.idTeacher=t.idTeacher 
                WHERE idSubject=:subject";
        // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            "subject" => $idLesson,
        );
        // On donne les valeurs et on exécute la requête   
        $req_prep->execute($values);

        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelLesson');
        $tab_teacher = $req_prep->fetchAll(PDO::FETCH_ASSOC);
        // Attention, si il n'y a pas de résultats, on renvoie un message d'erreur
        if (empty($tab_teacher))
            return false;
        return $tab_teacher;
    }
    
  }
?>
