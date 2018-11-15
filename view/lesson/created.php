<?php
$tab_v = ModelLesson::getAlllessons();
require_once (File::build_path(array("view/lesson", "list.php")));
?>