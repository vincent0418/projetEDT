<div class="tabs">
	<div id="lesson">
		<a href=#lesson>Cours</a>
		<div>
			<form method="POST" action="index.php?idGroup=<?php echo myGet('idGroup'); ?>#lesson">
				<p>Matiere :
					<input type="text" name="subject" list="tabSubject" required>
					<datalist id="tabSubject">
						<?php
						foreach ($tab_subject as $cle => $valeur) {
							echo "<option value=\"{$valeur->get("nameSubject")}\"></option>";
						}?>
					</datalist>
				</p>

				<p>Salle :
					<input type="text" name="room" list="tabRoom" required>
					<datalist id="tabRoom">
						<?php
						foreach ($tab_room as $cle => $valeur) {
							echo "<option value=\"{$valeur->get("idRoom")}\"></option>";
						}?>
					</datalist>
				</p>

				<p>Professeur :
					<input type="text" name="teacher" list="tabTeacher" required>
					<datalist id="tabTeacher">
						<?php
						foreach ($tab_teacher as $cle => $valeur) {
							echo "<option value=\"{$valeur->get("firstNameTeacher")} {$valeur->get("nameTeacher")}\"></option>";
						}?>
					</datalist>
				</p>
				<p>Durée :
					<select name="duration">
						<option value="0.5">30min</option>
						<option value="1">1h</option>
						<option value="1.5">1h30</option>
						<option value="2" selected>2h</option>
						<option value="2.5">2h30</option>
						<option value="3">3h</option>
						<option value="3.5">3h30</option>
					</select>
				</p>
				<input type='hidden' name='idGroup' value="<?php echo myGet('idGroup'); ?>">
				<input type='hidden' name='action' value='created'>
				<div>
					<input type="submit" value="Creation" />
				</div>
			</form>
			<?php
			if($tab_newLesson) {
				$size = sizeof($tab_newLesson);
				if($size > 1) {		// si il y a plus d'un cours non attribue a une journee
					for($i = 0; $i < $size - 1; $i++)	// boucle jusqu'à l'avant dernier cours
						ModelLesson::delete($tab_newLesson[$i]['idLesson']);	// on supprime le cours
				}
				$duration = $tab_newLesson[$size-1]['duration'] * 7;
				echo "<div id=\"{$tab_newLesson[$size-1]['idLesson']}\" style=\"background-color:#{$tab_newLesson[$size-1]['color']}\" draggable=\"true\" ondragstart=\"drag(event)\">
						  <p>{$tab_newLesson[$size-1]['nameSubject']}</p>
						  <p>{$tab_newLesson[$size-1]['idRoom']}</p>
						  <p>{$tab_newLesson[$size-1]['nameTeacher']} {$tab_newLesson[$size-1]['firstNameTeacher']}</p>
					  </div>";
			}
			?>
		</div>
	</div>
	<?php
	// preparation de l'url
	$url = parse_url($_SERVER['REQUEST_URI']);
	if (!isset($url['query']))
		$url['query'] = '';
	else
		$url['query'] = "idGroup=".myGet('idGroup');
	?>
	<div id="subject">
		<a href=#subject>Matière</a>
		<div>
			<table>
				<tr>
					<th>Nom</th>
					<th>Supprimer</th>
				</tr>
				<?php
				foreach ($tab_subject as $cle => $valeur) {
					echo "<tr>";
					echo "<td>{$valeur->get("nameSubject")}</td>";
					echo "<td><a href=\"{$url['path']}?controller=subject&action=delete&idSubject={$valeur->get("idSubject")}&{$url['query']}#subject\">x</a></td>";
					echo "</tr>";
				}?>
			</table>
		</div>
	</div>
	<div id="room">
		<a href=#room>Salle</a>
		<div>
			<table>
				<tr>
					<th>Numéro</th>
					<th>Supprimer</th>
				</tr>
				<?php
				foreach ($tab_room as $cle => $valeur) {
					echo "<tr>";
					echo "<td>{$valeur->get("idRoom")}</td>";
					echo "<td><a href=\"{$url['path']}?controller=room&action=delete&idRoom={$valeur->get("idRoom")}&{$url['query']}#room\">x</a></td>";
					echo "</tr>";
				}?>
			</table>
		</div>
	</div>
	<div id="teacher">
		<a href=#teacher>Professeur</a>
		<div>
			<table>
				<tr>
					<th>Prénom</th>
					<th>Nom</th>
					<th>Supprimer</th>
				</tr>
				<?php
				foreach ($tab_teacher as $cle => $valeur) {
					echo "<tr>";
					echo "<td>{$valeur->get("nameTeacher")}</td>";
					echo "<td>{$valeur->get("firstNameTeacher")}</td>";
					echo "<td><a href=\"{$url['path']}?controller=teacher&action=delete&idTeacher={$valeur->get("idTeacher")}&{$url['query']}#teacher\">x</a></td>";
					echo "</tr>";
				}?>
			</table>
		</div>
	</div>
</div>
