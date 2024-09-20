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

    Sua função é determinar a visibilidade de uma variável em um script PHP
    - Local: variável declarada dentro de uma função
    - Global: variável declarada fora de uma função
    - Static: variável que mantém o valor mesmo após a execução da função
    - Superglobais: variáveis pré-definidas do PHP
    - Parâmetros: variáveis passadas para uma função
    - Para acessar uma variável global dentro de uma função, é necessário usar a palavra-chave global
    - Para acessar uma variável global dentro de uma função, é possível usar o array $GLOBALS
    - Para acessar uma variável global dentro de uma função, é possível usar a palavra-chave global
    
*/
?>