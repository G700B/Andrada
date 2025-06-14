<?php
$lista =[189, 19, 9, 945, 45, 78, 304];
$buscar=945;

function buscar($num_buscar , $lista){
    $pos=0;
    foreach ($lista as $l) {
        $pos++;
        if ($l==$num_buscar) {
            return $pos;
            break;
        }
    }
}
echo buscar(9, $lista);
?>