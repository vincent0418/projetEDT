<?php
require_once (File::build_path(array("model", "ModelLesson.php"))); // chargement du modèle
require_once (File::build_path(array("model", "ModelTeacher.php")));
require_once (File::build_path(array("model", "ModelRoom.php")));

class ControllerLesson {
	
	protected static $object = 'lesson';
    
    public static function readAll() {
        $tab_teacher = ModelTeacher::selectAll();
        $tab_room = ModelRoom::selectAll();
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
                $teacherName = explode(' ', myGet('teacher'));
                $teacher = ModelTeacher::selectByName($teacherName[1], $teacherName[0]);
                if(!$teacher) {
                    $t = new ModelTeacher($teacherName[1], $teacherName[0]);
                    $t->save();
                    $teacher = ModelTeacher::selectByName($t->get('nameTeacher'), $t->get('firstNameTeacher'));
                }
				$l = new ModelLesson(intval($teacher['idTeacher']), myGet('subject'), $tab_group[0], myGet('room'), myGet('duration'));
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
