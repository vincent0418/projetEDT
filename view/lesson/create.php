<form method="POST" action="index.php?idGroup=<?php echo myGet('idGroup'); ?>">
	<select name="subject">
		<option value="2">Algo</option>
		<option value="3">BD</option>
		<option value="1">Maths</option>
	</select>

    <p>Salle :
        <input type="text" name="room" list="tabRoom">
        <datalist id="tabRoom">
            <?php
            foreach ($tab_room as $cle => $valeur) {
                echo "<option value=\"{$valeur->get("idRoom")}\"></option>";
            }?>
        </datalist>
    </p>

    <p>Professeur :
        <input type="text" name="teacher" list="tabTeacher">
        <datalist id="tabTeacher">
            <?php
            foreach ($tab_teacher as $cle => $valeur) {
                echo "<option value=\"{$valeur->get("firstNameTeacher")} {$valeur->get("nameTeacher")}\"></option>";
            }?>
        </datalist>
    </p>
    
	<select name="duration">
		<option value="1">1h</option>
		<option value="1.5">1h30</option>
		<option value="2">2h</option>
		<option value="2.5">2h30</option>
		<option value="3">3h</option>
	</select>
	<input type='hidden' name='idGroup' value="<?php echo myGet('idGroup'); ?>">
	<input type='hidden' name='action' value='created'>
	<div>
		<input type="submit" value="Creation" />
	</div>
</form>
