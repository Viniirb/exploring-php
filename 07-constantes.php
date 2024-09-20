<?php
// Constantes

define('NOME', 'José Carlos');
define('IDADE', 30);
define('ALTURA', 1.75);
define('CASADO', true);

echo 'Nome: ' . NOME . '<br>';
echo 'Idade: ' . IDADE . '<br>';
echo 'Altura: ' . ALTURA . '<br>';
echo 'Casado: ' . CASADO . '<br>';
echo '<hr>';

// Arrays Constantes

define('TIMES', ['Vasco', 'Flamengo', 'São Paulo']);


function exibeTime() {
    foreach(TIMES as $time) {
        echo $time . ' ';
    }
}

exibeTime();

/* Definicao de Constantes
    - as constantes sao declaradas atraves da funcao define()
    - o primeiro parametro e o nome da constante
    - o segundo parametro e o valor da constante
    - as constantes sao globais
    - por padrao, o nome das constantes sao em maiusculas
    - o nome das constantes sao case-sensitive
    - para exibir o valor de uma constante, nao e necessario usar o sinal de cifrao ($)
    - as constantes nao podem ser redefinidas
*/

/* Arrays Constantes
    - a partir do PHP 5.6, e possivel criar arrays constantes
    - para isso, basta usar a funcao define() e passar o nome da constante e o array
    - para exibir os valores do array, e necessario usar a funcao foreach()
*/
?>