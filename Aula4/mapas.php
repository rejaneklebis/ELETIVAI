<?php

    $frutas = array("morango", "maça", "abacaxi");

    echo "<p>".$frutas[0]."</p>";

    $frutas[0] = "laranja";

    $frutas["fruta"] = 15; //indice fruta, por nome "chave"

    $cores[0] = "azul";
    $cores["cor"] = "laranja";

    $mapa = [
        "valor1" => 1,
        "valor2" => 2,
        "valor3" => 3
    ];

    var_dump($cores);//imprimir
    echo "<p></p>";
    print_r($mapa);//imprimir

    asort($frutas);//ordenar por valor
    #ksort($frutas); ordenar pela chave (índice)

    #foreach($frutas as $valor)
    foreach($frutas as $chave => $valor){
        echo "Na posição $chave temos a fruta: $valor";
        echo "<p></p>"; 
    }

    echo "Quantidade de elementos: ".count($frutas);
