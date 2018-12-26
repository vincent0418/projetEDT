<?php
require_once (File::build_path(array("controller","ControllerLesson.php")));

function myGet($nomvar) {
    if(isset($_GET[$nomvar]))
        return $_GET[$nomvar];
    else if(isset($_POST[$nomvar]))
        return $_POST[$nomvar];
    else
        return NULL;
}

// On recupère l'action passée dans l'URL
if(!is_null(myGet('action'))) {
    $action = myGet('action');
    if(!in_array($action, get_class_methods('ControllerLesson')))
       $action = 'error';
}
else
    $action = 'readAll';
// Appel de la méthode statique $action de ControllerLesson
ControllerLesson::$action();
?>
