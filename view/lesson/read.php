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

<?php
	// preparation de l'url pour la suppression
	$url = parse_url($_SERVER['REQUEST_URI']);
	if (!isset($url['query']))
		$url['query'] = '';
	else
		$url['query'] = "idGroup=".myGet('idGroup');
	?>

<div id="Lundi">
	<p>Lundi</p>
	<div>
		<?php
		for($j = 0; $j < sizeof($tab_group); $j++) { 	// boucle par rapport au nombre de groupe
			echo "<div>";
			for($i = 0; $i < 45; $i++) {	// boucle pour les crenaux horaires
				echo "<span class=\"dropper\" ondrop=\"drop(event)\" ondragover=\"allowDrop(event)\">";
				foreach ($tab_lesson as $cle => $valeur){
					if($valeur['day'] == 'Lundi' && $valeur['idGroup'] == $tab_group[$j] && $valeur['hourStart']-8 == $i/4) {
						$duration = $valeur['duration'] * 7.5;
						echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh; background-color:#{$valeur['color']}\" draggable=\"true\" ondragstart=\"drag(event)\">
								  <a href=\"{$url['path']}?action=delete&idLesson={$valeur['idLesson']}&{$url['query']}\">X</a>
								  <p>{$valeur['nameSubject']}</p>
								  <p>{$valeur['idRoom']}</p>
								  <p>{$valeur['nameTeacher']}  {$valeur['firstNameTeacher']}</p>
							  </div>";
					}
				}
				echo "</span>";
			}
			echo "</div>";
		}
		?>
	</div>
</div>

<div id="Mardi">
	<p>Mardi</p>
	<div>
		<?php
		for($j = 0; $j < sizeof($tab_group); $j++) {
			echo "<div>";
			for($i = 0; $i < 45; $i++) {
				echo "<span class=\"dropper\" ondrop=\"drop(event)\" ondragover=\"allowDrop(event)\">";
				foreach ($tab_lesson as $cle => $valeur){
					if($valeur['day'] == 'Mardi' && $valeur['idGroup'] == $tab_group[$j] && $valeur['hourStart']-8 == $i/4) {
						$duration = $valeur['duration'] * 7.5;
						echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh; background-color:#{$valeur['color']}\" draggable=\"true\" ondragstart=\"drag(event)\">
                                  <a href=\"{$url['path']}?action=delete&idLesson={$valeur['idLesson']}&{$url['query']}\">X</a>
								  <p>{$valeur['nameSubject']}</p>
								  <p>{$valeur['idRoom']}</p>
								  <p>{$valeur['nameTeacher']}  {$valeur['firstNameTeacher']}</p>
							  </div>";
					}
				}
				echo "</span>";
			}
			echo "</div>";
		}
		?>
	</div>
</div>

<div id="Mercredi">
	<p>Mercredi</p>
	<div>
		<?php
		for($j = 0; $j < sizeof($tab_group); $j++) {
			echo "<div>";
			for($i = 0; $i < 45; $i++) {
				echo "<span class=\"dropper\" ondrop=\"drop(event)\" ondragover=\"allowDrop(event)\">";
				foreach ($tab_lesson as $cle => $valeur){
					if($valeur['day'] == 'Mercredi' && $valeur['idGroup'] == $tab_group[$j] && $valeur['hourStart']-8 == $i/4) {
						$duration = $valeur['duration'] * 7.5;
						echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh; background-color:#{$valeur['color']}\" draggable=\"true\" ondragstart=\"drag(event)\">
                                  <a href=\"{$url['path']}?action=delete&idLesson={$valeur['idLesson']}&{$url['query']}\">X</a>
								  <p>{$valeur['nameSubject']}</p>
								  <p>{$valeur['idRoom']}</p>
								  <p>{$valeur['nameTeacher']}  {$valeur['firstNameTeacher']}</p>
							  </div>";
					}
				}
				echo "</span>";
			}
			echo "</div>";
		}
		?>
	</div>
</div>

<div id="Jeudi">
	<p>Jeudi</p>
	<div>
		<?php
		for($j = 0; $j < sizeof($tab_group); $j++) {
			echo "<div>";
			for($i = 0; $i < 45; $i++) {
				echo "<span class=\"dropper\" ondrop=\"drop(event)\" ondragover=\"allowDrop(event)\">";
				foreach ($tab_lesson as $cle => $valeur){
					if($valeur['day'] == 'Jeudi' && $valeur['idGroup'] == $tab_group[$j] && $valeur['hourStart']-8 == $i/4) {
						$duration = $valeur['duration'] * 7.5;
						echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh; background-color:#{$valeur['color']}\" draggable=\"true\" ondragstart=\"drag(event)\">
                                  <a href=\"{$url['path']}?action=delete&idLesson={$valeur['idLesson']}&{$url['query']}\">X</a>
								  <p>{$valeur['nameSubject']}</p>
								  <p>{$valeur['idRoom']}</p>
								  <p>{$valeur['nameTeacher']}  {$valeur['firstNameTeacher']}</p>
							  </div>";
					}
				}
				echo "</span>";
			}
			echo "</div>";
		}
		?>
	</div>
</div>

<div id="Vendredi">
	<p>Vendredi</p>
	<div>
		<?php
		for($j = 0; $j < sizeof($tab_group); $j++) {
			echo "<div>";
			for($i = 0; $i < 45; $i++) {
				echo "<span class=\"dropper\" ondrop=\"drop(event)\" ondragover=\"allowDrop(event)\">";
				foreach ($tab_lesson as $cle => $valeur){
					if($valeur['day'] == 'Vendredi' && $valeur['idGroup'] == $tab_group[$j] && $valeur['hourStart']-8 == $i/4) {
						$duration = $valeur['duration'] * 7.5;
						echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh; background-color:#{$valeur['color']}\" draggable=\"true\" ondragstart=\"drag(event)\">
                                  <a href=\"{$url['path']}?action=delete&idLesson={$valeur['idLesson']}&{$url['query']}\">X</a>
								  <p>{$valeur['nameSubject']}</p>
								  <p>{$valeur['idRoom']}</p>
								  <p>{$valeur['nameTeacher']}  {$valeur['firstNameTeacher']}</p>
							  </div>";
					}
				}
				echo "</span>";
			}
			echo "</div>";
		}
		?>
	</div>
</div>

<div id="Samedi">
	<p>Samedi</p>
	<div>
		<?php
		for($j = 0; $j < sizeof($tab_group); $j++) {
			echo "<div>";
			for($i = 0; $i < 45; $i++) {
				echo "<span class=\"dropper\" ondrop=\"drop(event)\" ondragover=\"allowDrop(event)\">";
				foreach ($tab_lesson as $cle => $valeur){
					if($valeur['day'] == 'Samedi' && $valeur['idGroup'] == $tab_group[$j] && $valeur['hourStart']-8 == $i/4) {
						$duration = $valeur['duration'] * 7.5;
						echo "<div id=\"{$valeur['idLesson']}\" style=\"height:{$duration}vh; background-color:#{$valeur['color']}\" draggable=\"true\" ondragstart=\"drag(event)\">
                                  <a href=\"{$url['path']}?action=delete&idLesson={$valeur['idLesson']}&{$url['query']}\">X</a>
								  <p>{$valeur['nameSubject']}</p>
								  <p>{$valeur['idRoom']}</p>
								  <p>{$valeur['nameTeacher']}  {$valeur['firstNameTeacher']}</p>
							  </div>";
					}
				}
				echo "</span>";
			}
			echo "</div>";
		}
		?>
	</div>
</div>
