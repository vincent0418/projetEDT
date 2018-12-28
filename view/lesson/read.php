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

<div id="Lundi">
	<p>Lundi</p>
	<?php
    for($i = 0; $i < 48; $i++) {
        echo "<span class=\"dropper\" ondrop=\"drop(event)\" ondragover=\"allowDrop(event)\" style=\"height:1.81vh\">";
        foreach ($tab_lesson as $cle => $valeur){
            if($valeur['day'] == 'Lundi' & $valeur['hourStart']-8 == $i/4) {
                $duration = $valeur['duration'] * 7.5;
                echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                          <p>{$valeur['nameSubject']}</p>
                          <p>{$valeur['idRoom']}</p>
                          <p>{$valeur['nameTeacher']}  {$valeur['firstNameTeacher']}</p>
                      </div>";
            }
        }
        echo "</span>";
    }
    ?>
</div>

<div id="Mardi">
	<p>Mardi</p>
	<?php
    for($i = 0; $i < 48; $i++) {
        echo "<span class=\"dropper\" ondrop=\"drop(event)\" ondragover=\"allowDrop(event)\" style=\"height:1.81vh\">";
        foreach ($tab_lesson as $cle => $valeur){
            if($valeur['day'] == 'Mardi' & $valeur['hourStart']-8 == $i/4) {
                $duration = $valeur['duration'] * 7.5;
                echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                          <p>{$valeur['nameSubject']}</p>
                          <p>{$valeur['idRoom']}</p>
                          <p>{$valeur['nameTeacher']}  {$valeur['firstNameTeacher']}</p>
                      </div>";
            }
        }
        echo "</span>";
    }
    ?>
</div>

<div id="Mercredi">
	<p>Mercredi</p>
	<?php
    for($i = 0; $i < 48; $i++) {
        echo "<span class=\"dropper\" ondrop=\"drop(event)\" ondragover=\"allowDrop(event)\" style=\"height:1.81vh\">";
        foreach ($tab_lesson as $cle => $valeur){
            if($valeur['day'] == 'Mercredi' & $valeur['hourStart']-8 == $i/4) {
                $duration = $valeur['duration'] * 7.5;
                echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                          <p>{$valeur['nameSubject']}</p>
                          <p>{$valeur['idRoom']}</p>
                          <p>{$valeur['nameTeacher']}  {$valeur['firstNameTeacher']}</p>
                      </div>";
            }
        }
        echo "</span>";
    }
    ?>
</div>

<div id="Jeudi">
	<p>Jeudi</p>
	<?php
    for($i = 0; $i < 48; $i++) {
        echo "<span class=\"dropper\" ondrop=\"drop(event)\" ondragover=\"allowDrop(event)\" style=\"height:1.81vh\">";
        foreach ($tab_lesson as $cle => $valeur){
            if($valeur['day'] == 'Jeudi' & $valeur['hourStart']-8 == $i/4) {
                $duration = $valeur['duration'] * 7.5;
                echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                          <p>{$valeur['nameSubject']}</p>
                          <p>{$valeur['idRoom']}</p>
                          <p>{$valeur['nameTeacher']}  {$valeur['firstNameTeacher']}</p>
                      </div>";
            }
        }
        echo "</span>";
    }
    ?>
</div>

<div id="Vendredi">
	<p>Vendredi</p>
	<?php
    for($i = 0; $i < 48; $i++) {
        echo "<span class=\"dropper\" ondrop=\"drop(event)\" ondragover=\"allowDrop(event)\" style=\"height:1.81vh\">";
        foreach ($tab_lesson as $cle => $valeur){
            if($valeur['day'] == 'Vendredi' & $valeur['hourStart']-8 == $i/4) {
                $duration = $valeur['duration'] * 7.5;
                echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                          <p>{$valeur['nameSubject']}</p>
                          <p>{$valeur['idRoom']}</p>
                          <p>{$valeur['nameTeacher']}  {$valeur['firstNameTeacher']}</p>
                      </div>";
            }
        }
        echo "</span>";
    }
    ?>
</div>

<div id="Samedi">
	<p>Samedi</p>
	<?php
    for($i = 0; $i < 48; $i++) {
        echo "<span class=\"dropper\" ondrop=\"drop(event)\" ondragover=\"allowDrop(event)\" style=\"height:1.81vh\">";
        foreach ($tab_lesson as $cle => $valeur){
            if($valeur['day'] == 'Samedi' & $valeur['hourStart']-8 == $i/4) {
                $duration = $valeur['duration'] * 7.5;
                echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                          <p>{$valeur['nameSubject']}</p>
                          <p>{$valeur['idRoom']}</p>
                          <p>{$valeur['nameTeacher']}  {$valeur['firstNameTeacher']}</p>
                      </div>";
            }
        }
        echo "</span>";
    }
    ?>
</div>
