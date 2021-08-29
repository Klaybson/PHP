<?php

$conta1 = [
    'titular' => 'klaybson',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'laila',
    'saldo' => 10000
];
$conta3 = [
    'titular' => 'tais'
    ,'saldo' => 10
];

//echo $conta1['titular'] , PHP_EOL;
$contascorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contascorrentes); $i++){
    echo $contascorrentes[$i] ['titular'] . PHP_EOL;
    PHP_EOL;
    echo $contascorrentes [$i] ['saldo'] . PHP_EOL;
}