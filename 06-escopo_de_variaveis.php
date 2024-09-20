<?php

$nome = 'João';
$a = 1;
$b = 2;
$c = 3;

// funcao exibeNome() não consegue acessar a variável $nome
function exibeNome() {
    global $nome;
    echo $nome;
}

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

exibeNome();
echo '<hr>';
soma();
echo '<br>';

/* Escopo de Variaves
    - Local
    - Global
    - Static
    - Superglobais
    - Parâmetros
*/
?>