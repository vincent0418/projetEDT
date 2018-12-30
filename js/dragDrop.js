function allowDrop(ev) {
	ev.preventDefault();
}

function drag(ev) {
	ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
	ev.preventDefault();
	var data = ev.dataTransfer.getData("text");
	var target = ev.target;
	while (target.className.indexOf('dropper') == -1) { // Cette boucle permet de remonter jusqu'à la zone de drop parente
		target = target.parentNode;
	}
	target.appendChild(document.getElementById(data)); // Ajout de l'element drag dans l'element drop

	var listSpan = target.parentNode.querySelectorAll("span"); // liste de toutes les balises span du jour
	listSpan.forEach(
		function (currentValue, currentIndex, listObj) {
			if (currentValue == target) { // si la balise correspond a la balise cible
				var xhr = new XMLHttpRequest();
				var idLesson = parseInt(data, 10);
				var hourStart = currentIndex / 4 + 8;
				var day = target.parentNode.parentNode.parentNode.id;
				xhr.open('GET', document.location.origin + document.location.pathname.slice(0, -10) + "/model/update.php?idLesson=" + idLesson + "&hourStart=" + hourStart + "&day=" + day);
				xhr.send(null);
			}
		}
	)
}
