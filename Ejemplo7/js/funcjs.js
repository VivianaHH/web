var operandoa;
var operandob;
var operacion;

function init(){
    
    document.getElementById('igual').onclick=igual;
    document.getElementById('reset').onclick=reset;
    document.getElementById('suma').onclick=suma; 
    document.getElementById('resta').onclick=resta;
    document.getElementById('multiplicacion').onclick=multiplicacion;
    document.getElementById('division').onclick=division;
    document.getElementById('cero').onclick=cero;
    document.getElementById('uno').onclick=uno;
    document.getElementById('dos').onclick=dos;
    document.getElementById('tres').onclick=tres;
    document.getElementById('cuatro').onclick=cuatro;
    document.getElementById('cinco').onclick=cinco;
    document.getElementById('seis').onclick=seis;
    document.getElementById('siete').onclick=siete;
    document.getElementById('ocho').onclick=ocho;
    document.getElementById('nueve').onclick=nueve;

               //Eventos para cada boton
function cero() {
resultado.textContent = resultado.textContent + "0";
}

function uno() {
resultado.textContent = resultado.textContent + "1";
}

function dos() {
resultado.textContent = resultado.textContent + "2";
}

function tres() {
resultado.textContent = resultado.textContent + "3";
} 

function cuatro() {
resultado.textContent = resultado.textContent + "4";
} 
function cinco() {
resultado.textContent = resultado.textContent + "5";
}
function seis() {
resultado.textContent = resultado.textContent + "6";
}
function siete() {
resultado.textContent = resultado.textContent + "7";
} 
function ocho() {
resultado.textContent = resultado.textContent + "8";
}
function nueve() {
resultado.textContent = resultado.textContent + "9";
}
function reset() {
    limpiar();
}

function suma(){
        operandoa =resultado.textContent;
        operacion='+';
        limpiar();
    }   
function resta(){
        operandoa=resultado.textContent;
        operacion='-';
       limpiar();
    }
    
    function multiplicacion(){
        operandoa=resultado.textContent;
        operacion='*';
        limpiar();
    }
    
    function division(){
        operandoa=resultado.textContent;
        operacion='/';
        limpiar();
    }
    
    function igual(){
        operandob =resultado.textContent;
        resolver();
    }
    
    function limpiar(){
    resultado.textContent="";
    
    }
    
    function resetear(){
        resultado.textContent="";
        operandoa=0;
        operandob=0;
        operacion="";
    }
    
    function resolver(){
        res=0;
        switch (operacion) {
            case "+":
                 res=parseFloat(operandoa) + parseFloat(operandob);
            break;
            
            case"-":
                res=parseFloat(operandoa) - parseFloat(operandob);
                
            break;
            
            case"*":
                 res=parseFloat(operandoa) * parseFloat(operandob);
                 
            break;
            
            case "/":
                res=parseFloat(operandoa) / parseFloat(operandob);
            break;
    
        }
        resetear();
        resultado.textContent=res;
    

    }
    
}

