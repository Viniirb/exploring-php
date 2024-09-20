<?php
// Arrays

// primeiro modo de criar um array
$carros = array('BMW', 'Audi', 'VW');
$carros[] = 'Fiat';
$carros[] = 'Ford';


// segundo modo de criar um array
$frutas = ['Uva', 'Laranja', 'Maçã', 'Banana', 'Mamão'];

// terceiro modo de criar um array
$nomes = array(
    'nome' => 'João',
    'idade' => 20,
    'cidade' => 'São Paulo'
);

echo '<pre>';
print_r($carros);
echo '<hr>';

echo '<br>';
print_r($frutas);
echo '<hr>';

echo '<br>';
print_r($nomes);
echo '<hr>';


// Primeiro modo de acesso a um array
echo $carros[0];
echo '<br>';
echo $carros[1];
echo '<br>';
echo $carros[2];
echo '<br>';
echo $carros[3];
echo '<br>';
echo $carros[4];
echo '<br>';
echo '<hr>';

// Segundo modo de acesso a um array
function exibeCarro($carros) {
    for($i = 0; $i < count($carros); $i++) {
        if($i == count($carros) - 1) {
            echo $carros[$i];
        } else {
            echo $carros[$i] . ', ';
        }
    }
}

exibeCarro($carros);

/* Arrays
    - arrays sao variaveis que podem armazenar mais de um valor
    - os valores sao acessados atraves de um indice
    - os indices sao numericos e comecam em 0
    - para criar um array, e necessario usar a funcao array()
    - para adicionar um valor ao final do array, e necessario usar colchetes vazios
    - para exibir um valor do array, e necessario informar o indice do valor
    - os indices podem ser acessados atraves de um loop
    - para exibir os valores de um array, e necessario usar a funcao print_r()
    - os indicies podem ser nomeados
*/
?>