<?php
$num2=6576;
function CantDigitos($num) {
    if ($num >= 1 && $num < 10) {
        return "un digito";
    } else if ($num >= 10 && $num < 100) {
        return "dos digitos";
    } else if ($num >= 100 && $num < 1000) {
        return "tres digitos";
    } else if ($num >= 1000 && $num < 10000) {
        return "cuatro digitos";
    } else if ($num >= 10000 && $num < 100000) {
        return "cinco digitos";
    } else {
        return "limite de digitos";
    }
}


echo "Valor ingresado: $num2 <br>";
$m = CantDigitos($num2);
echo "Número de dígitos: $m";