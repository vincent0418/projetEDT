<?php
echo '<p>Le skate '. $id_skate .' a bien été supprimé !</p>';
require_once (File::build_path(array("view/skate", "list.php")));
?>