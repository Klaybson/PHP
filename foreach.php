<?php
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
    ],  
];
foreach ($contascorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL;
}