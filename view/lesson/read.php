<?php
    require_once (File::build_path(array("model", "ModelLesson.php")));
    $tab_lesson = ModelLesson::getLessonByGroup('Q1');
?>

<div id="hour">
    <?php
    $h = 8;
    for($i = 0; $i < 11; $i++) {
        echo "<p>{$h}h00</p>
              <p>{$h}h30</p>";
        $h++;
    }
    echo "<p>19h00</p>";
    ?>
</div>

<div id="Lundi" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p>Lundi</p>
    <?php
        foreach ($tab_lesson as $cle => $valeur){
            if($valeur['day'] == 'Lundi') {
                $duration = $valeur['duration'] * 7.4;
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
                $duration = $valeur['duration'] * 7.4;
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
                $duration = $valeur['duration'] * 7.4;
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
    for($i = 0; $i < 48; $i++)
        echo "<span style=\"height:1.81vh\"></span>";
    foreach ($tab_lesson as $cle => $valeur){
        if($valeur['day'] == 'Jeudi') {
            $duration = $valeur['duration'] * 7.4;
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
    for($i = 0; $i < 48; $i++)
        echo "<span style=\"height:1.81vh\"></span>";
    foreach ($tab_lesson as $cle => $valeur){
        if($valeur['day'] == 'Vendredi') {
            $duration = $valeur['duration'] * 7.4;
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
    for($i = 0; $i < 48; $i++)
        echo "<span style=\"height:1.81vh\"></span>";
    foreach ($tab_lesson as $cle => $valeur){
       if($valeur['day'] == 'Samedi') {
            $duration = $valeur['duration'] * 7.4;
            echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                      <p>{$valeur['idSubject']}</p>
                      <p>{$valeur['idRoom']}</p>
                      <p>{$valeur['idTeacher']}</p>
                  </div>";
        }
    }
    ?>
</div>
