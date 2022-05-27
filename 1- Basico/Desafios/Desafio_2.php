<?php
//Exibir a Taboada

$tabuada = 2;
$resultado = 0;

for ($i = 1; $i <= 10; $i ++){
     
    $resultado = $tabuada * $i;                      
    echo "$tabuada x $i = $resultado" . PHP_EOL;  

}


