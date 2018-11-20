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

<div id="Lundi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Lundi</p>
    <?php
        foreach ($tab_lesson as $cle => $valeur){
            if($valeur['day'] == 'Lundi') {
                $duration = $valeur['duration'] * 7;
                echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                          <p>{$valeur['idSubject']}</p>
                          <p>{$valeur['idRoom']}</p>
                          <p>{$valeur['idTeacher']}</p>
                      </div>";  
            }
        }
    ?>
</div>

<div id="Mardi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Mardi</p>
    <?php
        foreach ($tab_lesson as $cle => $valeur){
            if($valeur['day'] == 'Mardi') {
                $duration = $valeur['duration'] * 7;
                echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                          <p>{$valeur['idSubject']}</p>
                          <p>{$valeur['idRoom']}</p>
                          <p>{$valeur['idTeacher']}</p>
                      </div>";
            }
        }
    ?>
</div>

<div id="Mercredi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Mercredi</p>
    <?php
        foreach ($tab_lesson as $cle => $valeur){
            if($valeur['day'] == 'Mercredi') {
                $duration = $valeur['duration'] * 7;
                echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                          <p>{$valeur['idSubject']}</p>
                          <p>{$valeur['idRoom']}</p>
                          <p>{$valeur['idTeacher']}</p>
                      </div>";
            }
        }
    ?>
</div>

<div id="Jeudi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Jeudi</p>
    <?php
        foreach ($tab_lesson as $cle => $valeur){
            if($valeur['day'] == 'Jeudi') {
                $duration = $valeur['duration'] * 7;
                echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                          <p>{$valeur['idSubject']}</p>
                          <p>{$valeur['idRoom']}</p>
                          <p>{$valeur['idTeacher']}</p>
                      </div>";
            }
        }
    ?>
</div>

<div id="Vendredi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Vendredi</p>
    <?php
        foreach ($tab_lesson as $cle => $valeur){
            if($valeur['day'] == 'Vendredi') {
                $duration = $valeur['duration'] * 7;
                echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                          <p>{$valeur['idSubject']}</p>
                          <p>{$valeur['idRoom']}</p>
                          <p>{$valeur['idTeacher']}</p>
                      </div>";
            }
        }
    ?>
</div>

<div id="Samedi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Samedi</p>
    <?php
        foreach ($tab_lesson as $cle => $valeur){
           if($valeur['day'] == 'Samedi') {
                $duration = $valeur['duration'] * 7;
                echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                          <p>{$valeur['idSubject']}</p>
                          <p>{$valeur['idRoom']}</p>
                          <p>{$valeur['idTeacher']}</p>
                      </div>";
            }
        }
    ?>
</div>
