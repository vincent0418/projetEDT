var id = 1;

function addLesson(hour) {
    // crée un nouvel élément div 
    var newDiv = document.createElement("div");
    
    var newP = document.createElement("p");
    newP.textContent = (document.getElementById("subject").value);
    newDiv.appendChild(newP);
    
    var newP = document.createElement("p");
    newP.textContent = (document.getElementById("room").value);
    newDiv.appendChild(newP);
    
    var newP = document.createElement("p");
    newP.textContent = (document.getElementById("teacher").value);
    newDiv.appendChild(newP);
    
    id++;
    newDiv.id = id;
    newDiv.draggable = "true";
    newDiv.setAttribute("ondragstart", "drag(event)");
    
    var duration = parseFloat(document.getElementById("duration").value, 10);
    newDiv.style.height = (duration * 7.25) + "0vh";

    // ajoute le nouvel élément créé et son contenu dans le DOM 
    var currentDiv = document.getElementById("cours");
    currentDiv.appendChild(newDiv);
};