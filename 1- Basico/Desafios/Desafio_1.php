<?php
//Realiazer um código Aonde exiba apenas numeros impares até 100
// $i comum usar "i"(Interação) como contador 
$i = 0; 

for ($i = 1; $i < 100; $i ++){
     
    if ($i % 2 == 0){                       
        echo 'Numero Impar '. $i . PHP_EOL;  
    }
}