<?php
// Uma função retorna um valor e a subrotina executa um código isolado

echo "Aqui é o arquivo auxiliar de função" . PHP_EOL;

function sacar($conta, $valorASacar)
{
if ($valorASacar > $conta['saldo']){
    exibeMensagem($conta['titular'] . " não pode sacar este valor");
    //echo  $contaCorrentes[3]['titular'] . " não pode sacar este valor" . PHP_EOL;    ---Considerado uma função
}else {
     $conta['saldo'] -= $valorASacar;
}
return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;                                                          //Considerado uma subrotina
}

function depositar(array $conta, float $valorADepositar): array
{                                                                 //eu posso definir o tipo que é para vir e o tipo que vai retornar
                                                                  //para definir como retornar é só colocar os 2 pontos e o tipo    
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem('Depositos precisam ser positivos');
    }

    return $conta;

}