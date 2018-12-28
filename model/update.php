<?php 
require_once("../lib/File.php");
require_once (File::build_path(array("model", "Model.php")));

$sql = "UPDATE sch_Lesson
		SET hourStart = :hour, day = :day
		WHERE idLesson = :id";
// Préparation de la requête
$rep = Model::$pdo->prepare($sql);

$values = array(
 	'id' => $_GET['idLesson'],
 	'hour' => $_GET['hourStart'],
	'day' => $_GET['day'],
);
// On donne les valeurs et on exécute la requête   
$rep->execute($values);
?>
