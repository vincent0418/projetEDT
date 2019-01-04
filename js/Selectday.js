function displayDay(input){
var nombalise = input.parentNode;
var id = nombalise.innerText || nombalise.textContent ;
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