<?php

//include ('funcoes_auxilia_function.php'); //liga um arquivo a este aquivo não essencial
require ('funcoes_auxilia_function1.php');   //liga um arquivo a este aquivo essencial 




$contaCorrentes = [
     1 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
     ],
     2 => [
        'titular' => 'Maria',
        'saldo' => 300
     ],                   
     3 => [
        'titular' => 'Alberto',
        'saldo' => 100
     ]                    
];

$contaCorrentes[1] = sacar($contaCorrentes[1], 
    500
);

$contaCorrentes[2] = depositar($contaCorrentes[2],
    200
);


foreach ($contaCorrentes as $chave => $conta){
       //exibeMensagem($chave. " " . $conta['titular'] . ' ' . $conta['saldo']);

       //exibeMensagem(
       //    "$conta[titular] $conta[saldo]"            //Só funciona desse jeito 
       //);

       exibeMensagem(
           "$chave {$conta['titular']} {$conta['saldo']}"     //sintax padrao
        );

       //echo $chave. " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;

}


