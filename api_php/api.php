<?php

    //Cabeçalho
    header("Content-Type: application/json");  //Define o tipo de resposta

    //Conteúdo
    $usuarios = [
        ["id" => 1, "nome" => "Astrid", "email" => "storm@gmail.com"],
        ["id" => 2, "nome" => "Soluço", "email" => "toothless@gmail.com"]
    ];

    //Converte para JSON e retorna
    echo json_encode($usuarios);