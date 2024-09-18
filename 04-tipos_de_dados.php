<?php

    // Dados Escalares

    // String
    $nome = "Vinicius";
    var_dump($nome);
    if(is_string($nome)):
        echo "É uma string";
    else:
        echo "Não é uma string";
    endif;

    echo "<hr>";

    // Int
    $idade = 25;
    var_dump($idade);
    if(is_int($idade)):
        echo "É um inteiro";
    else:
        echo "Não é um inteiro";
    endif;

    echo "<hr>";

    // Float
    $altura = 1.78;
    var_dump($altura);
    if(is_float($altura)):
        echo "É um float";
    else:
        echo "Não é um float";
    endif;

    echo "<hr>";

    // Boolean
    $casado = false;
    var_dump($casado);
    if(is_bool($casado)):
        echo "É um boolean";
    else:
        echo "Não é um boolean";
    endif;

    echo "<hr>";

    // Array
    $carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
    var_dump($carros);
    if(is_array($carros)):
        echo "É um array";
    else:
        echo "Não é um array";
    endif;

    echo "<hr>";

    // Object
    class Cliente {
        public $nome;
        public function atribuirNome($nome) {
            $this->$nome = $nome;
        }
    }

    $cliente = new Cliente();
    $cliente->atribuirNome("Vinicius");
    var_dump($cliente);
    if(is_object($cliente)):
        echo "É um objeto";
    else:
        echo "Não é um objeto";
    endif;

    echo "<hr>";

    // Dados Compostos

    // Array
    $carros = array("Gol", "Uno", "Camaro");
    var_dump($carros);
    echo "<hr>";

    // Object
    class Cliente2 {
        public $nome;
        public function atribuirNome($nome) {
            $this->$nome = $nome;
        }
    }

    $cliente2 = new Cliente2();
    $cliente2->atribuirNome("Vinicius");
    var_dump($cliente2);
    echo "<hr>";

    // Especiais
    
    // NULL
    $cidade = NULL;
    var_dump($cidade);
    echo "<hr>";

    // Resource
    $arquivo = fopen("04-tipos_de_dados.php", "r");
    var_dump($arquivo);
    echo "<hr>";

    // Resource é um tipo de dado especial que armazena uma referência a recursos externos ao PHP.
    // Neste caso, o arquivo 04-tipos_de_dados.php foi aberto em modo de leitura.
    // O resultado será um resource.

    
?>