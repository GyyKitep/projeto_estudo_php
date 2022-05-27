<?php

$contador = 1;

//("$contador = $contador + 1" == "$contador += 1"(
// "$contador++" adiciona 1 para a variavel

while ($contador <= 15) {                                           // Estilo 1 = não sabemos quando deve acabar
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}

echo PHP_EOL . PHP_EOL;

for ($contador = 1; $contador <= 15; $contador = $contador + 1) {   // Estilo 2 = sabemos que uma hora acaba
    echo "#$contador" . PHP_EOL;
}

//    continue; --> // pula para a proxima repetição
//    break;    --> // aborta a repetição


