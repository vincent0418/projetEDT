<?php
require_once (File::build_path(array("model", "ModelLesson.php"))); // chargement du modèle

class ControllerLesson {
	
	protected static $object = 'lesson';
    
    public static function readAll() {
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
				$l = new ModelLesson(myGet('teacher'), myGet('subject'), $tab_group[0], myGet('room'), myGet('duration'));
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
