<?php
require_once (File::build_path(array("model", "ModelSubject.php")));	// chargement du modèle

class ControllerSubject {
	
	protected static $object = 'subject';
    
    public static function delete() {
        ModelSubject::delete(myGet('idSubject'));
        controllerLesson::readAll();
    }
	
    public static function error() {
        $view='error';
        $pagetitle='Erreur';
        require (File::build_path(array("view", "view.php")));
    }
}
?>
