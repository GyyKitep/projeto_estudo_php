<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais de 18 anos ou ";
echo "a partir de 16 anos acompanhado." . PHP_EOL;

// ("==" Compara as Variaveis)
// ("|| / or" = "ou")
// ("&& / and" = "e")
// ("!=" = "<>")

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho";
} else      // "elseif" e "else" if funcionam tbm
    if ($idade >= 16 && $numeroDePessoas > 1) {
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
    } else {
        echo "Você tem $idade anos. Você não pode entrar";
    }

// else
//    echo "teste"          Funciona sem chave pq ele pega a proxima intrução as proximas linhas será
//                          conciderada fora dela

echo PHP_EOL;
echo "Adeus!";
