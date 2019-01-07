<nav>
	<ul>
		<li> 1ère Année </li>
		<ul>
			<li><a href="index.php?idGroup=S1S1_S1S2_S1S3_S1S4_S1S5_S1S6">Semestre 1</a></li>
			<ul>
				<select multiple onchange="getSelectValues(this)">
					<option value="S1S1"> S1 </option>
					<option value="S1S2"> S2 </option>
					<option value="S1S3"> S3 </option>
					<option value="S1S4"> S4 </option>
					<option value="S1S5"> S5 </option>
					<option value="S1S6"> S6 </option>
				</select>
			</ul>
		</ul>
		<ul>
			<li><a href="index.php?idGroup=S2S1_S2S2_S2S3_S2S4_S2S5_S2S6">Semestre 2</a></li>
			<ul>
				<select multiple onchange="getSelectValues(this)">
					<option value="S2S1"> S1 </option>
					<option value="S2S2"> S2 </option>
					<option value="S2S3"> S3 </option>
					<option value="S2S4"> S4 </option>
					<option value="S2S5"> S5 </option>
					<option value="S2S6"> S6 </option>
				</select>
			</ul>
		</ul>
	</ul>
	<ul>
		<li> 2ème Année </li>
		<ul>
			<li><a href="index.php?idGroup=S3Q1_S3Q2_S3Q3_S3Q4">Semestre 3</a></li>
			<ul>
				<select multiple onchange="getSelectValues(this)">
					<option value="S3Q1"> Q1 </option>
					<option value="S3Q2"> Q2 </option>
					<option value="S3Q3"> Q3 </option>
					<option value="S3Q4"> Q4 </option>
				</select>
			</ul>
		</ul>
		<ul>
			<li><a href="index.php?idGroup=S4Q1_S4Q2_S4Q3_S4Q4">Semestre 4</a></li>
			<ul>
				<select multiple onchange="getSelectValues(this)">
					<option value="S4Q1"> Q1 </option>
					<option value="S4Q2"> Q2 </option>
					<option value="S4Q3"> Q3 </option>
					<option value="S4Q4"> Q4 </option>
				</select>
			</ul>
		</ul>
	</ul>

	<script src="js/Selectday.js"></script>
	<div>
		<input type="checkbox" checked onclick="displayDay(this)">Lundi
	</div>
	<div>
		<input type="checkbox" checked onclick="displayDay(this)">Mardi
	</div>
	<div>
		<input type="checkbox" checked onclick="displayDay(this)">Mercredi
	</div>
	<div>
		<input type="checkbox" checked onclick="displayDay(this)">Jeudi
	</div>
	<div>
		<input type="checkbox" checked onclick="displayDay(this)">Vendredi
	</div>
	<div>
		<input type="checkbox" checked onclick="displayDay(this)">Samedi
	</div>
</nav>

<script>
	// Retourne une liste des options selectionees
	function getSelectValues(select) {
		setTimeout(function() {
			var result = [];
			var options = select;

			for (var i = 0; i < options.length; i++) {
				if (options[i].selected) {
					result.push(options[i].value);
				}
			}
			document.location.href = document.location.origin + document.location.pathname + "?idGroup=" + result.join('_');
		}, 2000);
	}

</script>
