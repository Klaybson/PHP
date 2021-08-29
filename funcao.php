<?php

$nome = readline("Digite seu nome?" . PHP_EOL);
$cpf = readline("Digite seu cpf:". PHP_EOL);
$sal_in = readline("Qual deposito inicial?". PHP_EOL);
$contas = ['nome'  => $nome,'saldo' => $sal_in];

echo "Cliente: $nome" . PHP_EOL . "CPF: $cpf" . PHP_EOL . "Saldo: $sal_in". PHP_EOL;
echo "Cliente t:" . $contas['nome'] . PHP_EOL . $contas ['saldo'] . PHP_EOL;
echo "teste" ;
