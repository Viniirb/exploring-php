<?php
    // Meus dados
    $bebida = "Café";

    // Exibindo os dados
    $$bebida = "Espresso";

    echo $Café . "<br>";
    echo "<hr>";

    /* 
    Variáveis dinâmicas são variáveis que recebem o valor de outra variável.
    Neste caso, a variável $bebida recebe o valor "Café" e a variável $$bebida recebe o valor "Espresso".
    O resultado será "Espresso".
    */

    $destino = "cidade";
    $$destino = "Rio de Janeiro";

    echo $cidade;

    /*
    Neste caso, a variável $destino recebe o valor "cidade" e a variável $$destino recebe o valor "Rio de Janeiro".
    O resultado será "Rio de Janeiro".
    */
?>