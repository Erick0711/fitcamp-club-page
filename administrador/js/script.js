let eliminar = document.getElementById("borrar");

eliminar.addEventListener("click",borrar())


function borrar(){
    confirm("Estas seguro de eliminar este dato?");
}