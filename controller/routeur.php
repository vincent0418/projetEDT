<?php
require_once (File::build_path(array("controller","ControllerLesson.php")));
// On recupère l'action passée dans l'URL
if(isset($_GET['action'])) {
    $action = $_GET['action'];
    if(!in_array($action, get_class_methods('ControllerLesson')))
       $action = 'error';
}
else
    $action = 'create';
// Appel de la méthode statique $action de ControllerLesson
ControllerLesson::$action(); 
?>
