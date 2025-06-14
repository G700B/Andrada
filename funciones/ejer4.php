
<?php
function validar($valor, $minimo, $maximo){

if ($valor>$minimo && $valor<$maximo){
return "esta dentro del rango permitido";
}else {
    return "no esta dentro del rango permitido";
}
}
echo validar(1, 2, 10);
   
?> 
