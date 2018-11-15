<p>La lesson a bien été modifié !</p>
<?php
$tab_v = ModelLesson::getAlllessons();
require_once (File::build_path(array("view/lesson", "list.php")));
?>