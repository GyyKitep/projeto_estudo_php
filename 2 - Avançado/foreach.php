<?php


// Olhar o array_assosiativo para ter a base no que se transformou 
// 0 => $conta1    O INDICE 0, 1, 2, 'titular', 'saldo' SERIA A CHAVE DA INFORMAÇÃO
// 1 => $conta2
// 2 => $conta3

$contaCorrentes = [
     1 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
     ],
     2 => [
        'titular' => 'Maria',
        'saldo' => 10000
     ],                   
     3 => [
        'titular' => 'Alberto',
        'saldo' => 300
     ]                    
];

// Adiciona uma nova informação no array 
$contaCorrentes[] = [                        // Se finromar o indice "[1]" ele adiciona no indice informado, caso não ele incrementa no ultimo livre
       'titular' => 'teste',                 // O indice normal do array é numerico, então se declarar um indice string e colocar para incrementar 
       'saldo' => 99999                      // no automatico ele pega o numero 0 como numero livre
];

//foreach ($contaCorrentes as $conta){
foreach ($contaCorrentes as $chave => $conta){
//    echo $conta['titular'] . PHP_EOL;
      echo $chave. PHP_EOL;

}


