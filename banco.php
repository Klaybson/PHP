<?php

function exibemensagem ($mensagem) {
    echo $mensagem . PHP_EOL;
}

$contascorrentes = [
    12345 => [
        'titular' => 'klaybson',
        'saldo' => 1000
    ],
    77777=> [
        'titular' => 'laila',
        'saldo' => 10000
    ],
    8878 => [
        'titular' => 'tais'
        ,'saldo' => 10
    ]  
];

$contascorrentes ['8878']['saldo']-=5;

$contascorrentes ['77777']['saldo']+=25;

foreach ($contascorrentes as $cpf => $conta) {
    exibemensagem(mensagem $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}