<?php
require_once (File::build_path(array("model", "ModelLesson.php"))); // chargement du modèle
class ControllerLesson {
	
	protected static $object = 'lesson';
    
    public static function readAll() {
        $tab_subject = ModelSubject::selectByOrder();
        $tab_room = ModelRoom::selectAll();
        $tab_teacher = ModelTeacher::selectByOrder();
		$group = myGet('idGroup');
		if($group != NULL) {
			$tab_group = explode("_", $group);	// transforme la string en array
			$tab_lesson = ModelLesson::getLessonByGroup($tab_group);
			$tab_newLesson = ModelLesson::getNewLessonByGroup($tab_group[0]);
		}
		else {
			$tab_group = [];
			$tab_newLesson = [];
		}
        $view='readAll';
        require (File::build_path(array("view", "view.php")));
    }
    
    public static function created() {
		$group = myGet('idGroup');
		if($group != NULL) {
			$tab_group = explode("_", myGet('idGroup'));
			if(sizeof($tab_group) == 1) {
				// traitement de la matière
                $subject = ModelSubject::selectIdByName(myGet('subject'));    // On récupère l'id de la matiere
                if(!$subject) {     //si la matiere n'existe pas
                    $s = new ModelSubject(myGet('subject'));    //création d'une nouvelle matiere
                    $s->save();     // enregistrement dans la base de données
                    $subject = ModelSubject::selectIdByName($s->get('nameSubject'));    // On récupère l'id de la matiere
                }
				// traitement de la salle
				$room = ModelRoom::select(myGet('room'));    // On récupère la salle
                if(!$room) {     //si la salle n'existe pas
                    $r = new ModelRoom(myGet('room'));    //création d'une nouvelle salle
                    $r->save();     // enregistrement dans la base de données
                }
                // traitement du professeur
                $teacherName = explode(' ', myGet('teacher'));      // transformation d'un string en array pour séparer le nom du prenom
                $teacher = ModelTeacher::selectIdByName($teacherName[1], $teacherName[0]);  // On récupère l'id du professeur
                if(!$teacher) {     //si le professeur n'existe pas
                    $t = new ModelTeacher($teacherName[1], $teacherName[0]);    //création d'un nouveau professeur
                    $t->save();     // enregistrement dans la base de données
                    $teacher = ModelTeacher::selectIdByName($t->get('nameTeacher'), $t->get('firstNameTeacher'));   // On récupère l'id du nouveau professeur
                }
                
				$l = new ModelLesson(intval($teacher['idTeacher']), intval($subject['idSubject']), $tab_group[0], myGet('room'), myGet('duration'));
				$l->save();
			}
		}
        self::readAll();
    }
    
    public static function delete() {
        ModelLesson::delete(myGet('idLesson'));
        self::readAll();
    }
	
    public static function error() {
        $view='error';
        $pagetitle='Erreur';
        require (File::build_path(array("view", "view.php")));
    }
}
?>
