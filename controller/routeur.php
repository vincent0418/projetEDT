<?php
require_once (File::build_path(array("controller","ControllerLesson.php")));
require_once (File::build_path(array("controller","ControllerSubject.php")));
require_once (File::build_path(array("controller","ControllerRoom.php")));
require_once (File::build_path(array("controller","ControllerTeacher.php")));

function myGet($nomvar) {
    if(isset($_GET[$nomvar]))
        return $_GET[$nomvar];
    else if(isset($_POST[$nomvar]))
        return $_POST[$nomvar];
    else
        return NULL;
}
// On recupère le controlleur passée dans l'URL
if(!is_null(myGet('controller')))
    $controller = myGet('controller');
else
    $controller = 'lesson';
    
$controller_class = "Controller" . ucfirst($controller);
// On recupère l'action passée dans l'URL
if(!is_null(myGet("action"))) {
    $action = myGet("action");
    if(!in_array($action, get_class_methods($controller_class)))
       $action = "error";
}
else
    $action = "readAll";

if(class_exists($controller_class))
    $controller_class::$action();
else
    ControllerLesson::error();
?>
