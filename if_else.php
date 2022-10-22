<?php 
$idade = 18;// Declaração de variavel. Se for strig coloca entre ""

//Comando echo para imprimir na tela.
echo "Só para maiores de 18 anos!!<br>" . PHP_EOL;

//Estrutura de decisão
if ($idade > 18 or $idade == 18 ){
echo "Voce tem $idade anos <br> " . PHP_EOL;//A variavel de ambiente PHP_EOL é pra compatibilidade do sistema
echo "Acesso liberado!!! <br>"; // A tag <br> server para quebra uma linha
}   
    else {
            echo "Idade menor que 18!<br>";
        }
?>
