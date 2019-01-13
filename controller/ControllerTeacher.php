<?php
require_once (File::build_path(array("model", "ModelTeacher.php")));	// chargement du modèle

class ControllerTeacher {
	
	protected static $object = 'teacher';
    
    public static function delete() {
        ModelTeacher::delete(myGet('idTeacher'));
        controllerLesson::readAll();
    }
	
    public static function error() {
        $view='error';
        $pagetitle='Erreur';
        require (File::build_path(array("view", "view.php")));
    }
}
?>
