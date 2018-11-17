<?php
    require_once (File::build_path(array("model", "ModelLesson.php")));
    $tab_lesson = ModelLesson::getLessonByGroup('Q1');
?>

<div id="hour">
    <p></p>
    <p>8h</p>
    <p>9h</p>
    <p>10h</p>
    <p>11h</p>
    <p>12h</p>
    <p>13h</p>
    <p>14h</p>
    <p>15h</p>
    <p>16h</p>
    <p>17h</p>
    <p>18h</p>
    <p>19h</p>
</div>

<div id="lundi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Lundi</p>
    <?php
        foreach ($tab_lesson as $cle => $valeur){
            echo "<div>
                      <p>{$valeur['idSubject']}</p>
                      <p>{$valeur['idRoom']}</p>
                      <p>{$valeur['idTeacher']}</p>
                  </div>";
        }
    ?>
</div>

<div id="mardi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Mardi</p>
</div>

<div id="mercredi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Mercredi</p>
</div>

<div id="jeudi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Jeudi</p>
</div>

<div id="vendredi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Vendredi</p>
</div>

<div id="samedi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Samedi</p>
</div>
