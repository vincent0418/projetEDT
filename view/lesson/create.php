<form method="POST" action="index.php">
	<select name="subject">
		<option value="2">Algo</option>
		<option value="3">BD</option>
		<option value="1">Maths</option>
	</select>

	<select name="room">
		<option value="K014">K014</option>
		<option value="K127">K127</option>
	</select>

	<select name="teacher">
		<option value="4">BOUGERET MARIN</option>
		<option value="5">CHIROUZE ANNE</option>
		<option value="1">PALLEJA NATHALIE</option>
	</select>
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
		<input type="submit" value="Envoyer" />
	</div>
</form>
