function voto2(){
    document.getElementById("backgound2").addEventListener("click",function(){
        document.getElementById("formu2").style.display="block";
        console.log("en voto2")
        document.getElementById("mensaje").style.display="none";
        document.getElementById("contenedor").classList.add("opaco");
        document.getElementById("backgound1").classList.add("inactive");
        document.getElementById("backgound2").classList.add("inactive");
        document.getElementById("backgound3").classList.add("inactive");
        document.getElementById("backgound4").classList.add("inactive");
        document.getElementById("caracteristicas1").classList.add("inactive");
        console.log("funcionando");
       
       
    })
    document.getElementById("cancelar2").addEventListener("click",function(){
        document.getElementById("formu2").style.display="none";
        document.getElementById("mensaje").style.display="block";
        document.getElementById("contenedor").classList.remove("opaco") 
        document.getElementById("backgound1").classList.remove("inactive");
        document.getElementById("backgound2").classList.remove("inactive");
        document.getElementById("backgound3").classList.remove("inactive");
        document.getElementById("backgound4").classList.remove("inactive");
        document.getElementById("caracteristicas1").classList.remove("inactive");
        console.log("funcionando");
        
        
    })
}
