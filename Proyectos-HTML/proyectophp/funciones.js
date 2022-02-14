function validar()
{
    var nombre= document.getElementById('nombre').value;
    var apellido= document.getElementById('apellido').value;
    var dni= document.getElementById('dni').value;
    if(nombre=="")
    {
        alert("todos los campos son obligatorios");
    }

}