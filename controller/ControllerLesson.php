<?php
require_once (File::build_path(array("model", "ModelLesson.php"))); // chargement du modèle
class ControllerLesson {
    
    public static function readAll() {
        $controller='lesson';
        $view='read';
        $tab_lesson = ModelLesson::getLessonByGroup($_GET['group']);     //appel au modèle pour gerer la BD
        require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }
    
    public static function create() {
        $controller='lesson';
        $view='create';
        require (File::build_path(array("view", "view.php")));
    }
    
    public static function created() {
        $controller='lesson';
        $view='created';
        $v = new ModelLesson($_GET['teacher'], $_GET['subject'], 'Q1', $_GET['room'], $_GET['duration']);
        $v->save();
        require (File::build_path(array("view", "view.php")));
    }
    
    /*
    public static function delete() {
        $immat = $_GET['immat'];
        ModelLesson::deleteByImmat($immat);
        $tab_v = ModelLesson::getAlllessons();
        $controller='lesson';
        $view='delete';
        $pagetitle='Suppression d\'un lessons';
        require (File::build_path(array("view", "view.php")));
    }
    
    public static function update() {
        $v = ModelLesson::getlessonByImmat($_GET['immat']);
        $controller='lesson';
        $view='update';
        $pagetitle='Modification de la lesson';
        require (File::build_path(array("view", "view.php")));
    }
    
    public static function updated() {
        $controller='lesson';
        $view='updated';
        $pagetitle='Modification de la lesson';
        $v = ModelLesson::getlessonByImmat($_GET['immatriculation']);
        $data = array(
            'immatriculation' => $_GET['immatriculation'],
            'marque' => $_GET['marque'],
            'couleur' => $_GET['couleur'],
        );
        $v->update($data);
        require (File::build_path(array("view", "view.php")));
    }
    
    */
    public static function error() {
        $controller='lesson';
        $view='error';
        $pagetitle='Erreur';
        require (File::build_path(array("view", "view.php")));
    }
}
?>
