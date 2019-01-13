<?php
require_once (File::build_path(array("model", "ModelRoom.php")));	// chargement du modèle

class ControllerRoom {
	
	protected static $object = 'room';
    
    public static function delete() {
        ModelRoom::delete(myGet('idRoom'));
        controllerLesson::readAll();
    }
	
    public static function error() {
        $view='error';
        $pagetitle='Erreur';
        require (File::build_path(array("view", "view.php")));
    }
}
?>
