var i=0

i=parseInt(i);

function verdadero(){
    document.getElementById('p1').style.color='green'
    document.getElementById('p1').innerHTML='Verdadero!'
    i=i+1;
    setTimeout(function(){ window.location="Index.html"; }, 3000);
}


function falso(){
    document.getElementById('p1').style.color='red'
    document.getElementById('p1').innerHTML='Falso'
}
function verdadero2(){
    document.getElementById('p2').style.color='green'
    document.getElementById('p2').innerHTML='Verdadero!'
    i=i+1;
    document.getElementById('res').style.color='white'
    document.getElementById('res').innerHTML=i
}
function falso2(){
    document.getElementById('p2').style.color='red'
    document.getElementById('p2').innerHTML='Falso'
}
function verdadero3(){
    document.getElementById('p3').style.color='green'
    document.getElementById('p3').innerHTML='Verdadero!'
    i=i+1;
    document.getElementById('res').style.color='white'
    document.getElementById('res').innerHTML=i
  
}
function falso3(){
    document.getElementById('p3').style.color='red'
    document.getElementById('p3').innerHTML='Falso' 
   
}
function verdadero4(){
    document.getElementById('p4').style.color='green'
    document.getElementById('p4').innerHTML='Verdadero!'
    i=i+1;
    document.getElementById('res').style.color='white'
    document.getElementById('res').innerHTML=i
  
}
function falso4(){
    document.getElementById('p4').style.color='red'
    document.getElementById('p4').innerHTML='Falso' 
   
}
function verdadero5(){
    document.getElementById('p5').style.color='green'
    document.getElementById('p5').innerHTML='Verdadero!'
    i=i+1;
    document.getElementById('res').style.color='white'
    document.getElementById('res').innerHTML=i
  
}
function falso5(){
    document.getElementById('p5').style.color='red'
    document.getElementById('p5').innerHTML='Falso' 
   
}
function verdadero6(){
    document.getElementById('p6').style.color='green'
    document.getElementById('p6').innerHTML='Verdadero!'
    i=i+1;
    document.getElementById('res').style.color='white'
    document.getElementById('res').innerHTML=i
  
}
function falso6(){
    document.getElementById('p6').style.color='red'
    document.getElementById('p6').innerHTML='Falso' 
   
}
function verdadero7(){
    document.getElementById('p7').style.color='green'
    document.getElementById('p7').innerHTML='Verdadero!'
    i=i+1;
    document.getElementById('res').style.color='white'
    document.getElementById('res').innerHTML=i
  
}
function falso7(){
    document.getElementById('p7').style.color='red'
    document.getElementById('p7').innerHTML='Falso' 
   
}
function verdadero8(){
    document.getElementById('p8').style.color='green'
    document.getElementById('p8').innerHTML='Verdadero!'
    i=i+1;
    document.getElementById('res').style.color='white'
    document.getElementById('res').innerHTML=i
  
}
function falso8(){
    document.getElementById('p8').style.color='red'
    document.getElementById('p8').innerHTML='Falso' 
   
}
function verdadero9(){
    document.getElementById('p9').style.color='green'
    document.getElementById('p9').innerHTML='Verdadero!'
    i=i+1;
    document.getElementById('res').style.color='white'
    document.getElementById('res').innerHTML=i
  
}
function falso9(){
    document.getElementById('p9').style.color='red'
    document.getElementById('p9').innerHTML='Falso' 
   
}
















function verdaderofinal(){
    document.getElementById('p10').style.color='green'
    document.getElementById('p10').innerHTML='Verdadero!'
    i=i+1;
    document.getElementById('res').style.color='white'
    document.getElementById('res').innerHTML=i

    if(i<4){
        document.getElementById('resfinal').style.color="red"
        document.getElementById('resfinal').innerHTML=" Regular"
        return false
    }



    if(i>=5&&i<7){
        document.getElementById('resfinal').style.color="blue"
        document.getElementById('resfinal').innerHTML="Bien"
        return false
    }

   
    if(i>=7&&i<10){
        document.getElementById('resfinal').style.color="green"
        document.getElementById('resfinal').innerHTML="Muy Bien"
        return false
    }
    if(i=10){
        document.getElementById('resfinal').style.color="yellow"
        document.getElementById('resfinal').innerHTML="Genial!!"
        return false;
    }


   
    
}
function falsofinal(){
    document.getElementById('p10').style.color='red'
    document.getElementById('p10').innerHTML='Falso'
   

    if(i<4){
        document.getElementById('resfinal').style.color="red"
        document.getElementById('resfinal').innerHTML=" Regular"
        return false
    }



    if(i>=5&&i<7){
        document.getElementById('resfinal').style.color="blue"
        document.getElementById('resfinal').innerHTML="Bien"
        return false
    }

   
    if(i>=7&&i<10){
        document.getElementById('resfinal').style.color="green"
        document.getElementById('resfinal').innerHTML="Muy Bien"
        return false
    }
    if(i=10){
        document.getElementById('resfinal').style.color="yellow"
        document.getElementById('resfinal').innerHTML="Genial!!"
        return false;
    }



   
}