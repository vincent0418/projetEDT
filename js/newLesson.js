var id = 3;

function addLesson(hour) {
    // crée un nouvel élément div 
    var newDiv = document.createElement("div");
    
    var newP = document.createElement("p");
    newP.textContent = (document.getElementById("subject_id").value);
    newDiv.appendChild(newP);
    
    var newP = document.createElement("p");
    newP.textContent = (document.getElementById("room_id").value);
    newDiv.appendChild(newP);
    
    var newP = document.createElement("p");
    newP.textContent = (document.getElementById("teacher_id").value);
    newDiv.appendChild(newP);
    
    id++;
    newDiv.id = id;
    newDiv.draggable = "true";
    newDiv.setAttribute("ondragstart", "drag(event)");
    //newDiv.style.height = hour + "0vh";

    // ajoute le nouvel élément créé et son contenu dans le DOM 
    var currentDiv = document.getElementById("cours");
    currentDiv.appendChild(newDiv);
};