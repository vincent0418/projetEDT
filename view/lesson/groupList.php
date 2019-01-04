<nav>
	<ul>
		<li> 1ère Année </li>
		<ul>
			<li> Semestre 1 </li>
			<ul>
				<li>
					<a href="#"> S1 </a> -
					<a href="#"> S2 </a> -
					<a href="#"> S3 </a> -
					<a href="#"> S4 </a> -
					<a href="#"> S5 </a> -
					<a href="#"> S6 </a>
				</li>
			</ul>
		</ul>
		<ul>
			<li> Semestre 2 </li>
			<ul>
				<li>
					<a href="#"> C1 </a> -
					<a href="#"> C2 </a> -
					<a href="#"> C3 </a> -
					<a href="#"> C4 </a> -
					<a href="#"> C5 </a>
				</li>
			</ul>
		</ul>
	</ul>
	<ul>
		<li> 2ème Année </li>
		<ul>
			<li> Semestre 3 </li>
			<ul>
				<select multiple onchange="getSelectValues(this)">
					<option> Q1 </option>
					<option> Q2 </option>
					<option> Q3 </option>
					<option> Q4 </option>
				</select>
			</ul>
		</ul>
		<ul>
			<li> Semestre 4 </li>
			<ul>
				<li>
					<a href="#"> Q1 </a> -
					<a href="#"> Q2 </a> -
					<a href="#"> Q3 </a> -
					<a href="#"> Q4 </a>
				</li>
			</ul>
		</ul>
	</ul>

<script src="js/Selectday.js"></script>
   		<div>
      		<input type="checkbox" checked onclick="displayDay(this)" >Lundi</input>
      		
      	</div>
      		
        <div>	
      		<input type="checkbox" checked onclick="displayDay(this)">Mardi</input>
      	</div>	
      		
   		<div>
      		<input type="checkbox" checked onclick="displayDay(this)">Mercredi</input>
      	</div>	
      		
   		<div>
      		<input type="checkbox" checked onclick="displayDay(this)">Jeudi</input>
      	</div>	
      		
   		<div>
      		<input type="checkbox" checked onclick="displayDay(this)">Vendredi</input>
      	</div>	
      
   		<div>
      		<input type="checkbox" checked onclick="displayDay(this)">Samedi</input>
      	</div>	
	

</nav>

<script>
	// Retourne une liste des options selectionees
	function getSelectValues(select) {
		var result = [];
		var options = select;

		for (var i = 0; i < options.length; i++) {
			if (options[i].selected) {
				result.push(options[i].text);
				0
			}
		}
		setTimeout(function() {
			document.location.href = document.location.origin + document.location.pathname + "?idGroup=" + result.join('_');
		}, 2000);
	}

</script>
