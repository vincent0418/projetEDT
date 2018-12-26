<?php
require_once (File::build_path(array("model", "ModelLesson.php"))); // chargement du modèle

class ControllerLesson {
	
	protected static $object = 'lesson';
    
    public static function readAll() {
		$tab_lesson = ModelLesson::getLessonByGroup('Q1');
		$tab_newLesson = ModelLesson::getNewLessonByGroup('Q1');
        $view='readAll';
        require (File::build_path(array("view", "view.php")));
    }
    
    public static function created() {
        $l = new ModelLesson(myGet('teacher'), myGet('subject'), 'Q1', myGet('room'), myGet('duration'));
        $l->save();
        self::readAll();
    }
	
    public static function error() {
        $view='error';
        $pagetitle='Erreur';
        require (File::build_path(array("view", "view.php")));
    }
}
?>
