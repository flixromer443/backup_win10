
function validar(){
    var nombre=document.getElementById('nombre').value;
    var fecha=document.getElementById('fecha').value;
    var dni=document.getElementById('dni').value;
    var correo=document.getElementById('correo').value;
    var telefono=document.getElementById('telefono').value;
    var error=document.getElementById('error');

    
     if(nombre.length<3||nombre.length>8){
        alert("su nombre no es valido");
        return false; 
    }
    if(dni.length!=8)
    {
        alert("Su numero de documento no es valido");
        return false;
    }
  
    
}