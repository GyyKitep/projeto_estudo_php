<?php
//Calcular o IMC e exibir se esta a baixo, dentro ou acima do nivel recomendado

$altura = 1.85;
$peso = 85;
$imc = 0; 

$imc = ($peso / ($altura * $altura));

if ($imc < 18.5){
     echo "O imc é $imc, por isso esta a baixo do peso ideal";

}else if ($imc > 18.6 && $imc < 24.9){
          echo "O imc é $imc, por isso esta no peso ideal";       
}else echo "O imc é $imc, por issa esta a cima do peso ideal";  