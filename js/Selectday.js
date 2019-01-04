function displayDay(input){
    var nomBalise = input.parentNode;
    var id = nomBalise.innerText || nomBalise.textContent ;
    var select = document.getElementById(id);
    if (input.checked == false){
        select.style.position= "absolute";
        select.style.visibility= "hidden"; 
    }
    else {
        select.style.position= "static";
        select.style.visibility= "visible"; 
    }
}