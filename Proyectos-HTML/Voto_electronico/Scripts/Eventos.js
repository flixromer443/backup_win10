
function validar(){
    var btn=document.getElementById("dni").value;
    if(btn.length<8){
        document.getElementById("mensaje").style.color="red";
        document.getElementById("mensaje").style.fontSize="20px"
        document.getElementById("mensaje").innerHTML="*Debe contener 8 caracteres"
        document.getElementById("dni").style.borderColor="red";
        return false;
    }
    document.getElementById("mensaje").innerHTML=""
    document.getElementById("dni").style.borderColor="green";
    return false;   
}

function validar2(){
    var contraseña=prompt("ingrese la contraseña");
    if(contraseña!=42471205){
        setTimeout(function(){window.location="../Index.php"});
    }
}

