<?php

function cantidadDigitos ($num = 0){
   //todo el codigo
    if ($num >0 AND $num < 10 ){
    echo "Tiene un digito";
    } else if ($num < 100){
    echo "tiene dos digitos";
    } else {
        echo "mal";
    }
}

cantidadDigitos("cien");