<?php

    //Cabeçalho
    header("Content-Type: application/json");  //Define o tipo de resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

    //echo "Método de requisição: ". $metodo;
    
    switch ($metodo) {
        case 'GET':
            echo "Aqui as ações do método GET";
            break;
        case 'POST':
            echo "Aqui as ações do método POST";
            break;
        default:
            echo "Método não encontrado!";
            break;
    }
    
    
    
    
    //Conteúdo
    //$usuarios = [
    //    ["id" => 1, "nome" => "Astrid", "email" => "stormfly@gmail.com"],
    //    ["id" => 2, "nome" => "Soluço", "email" => "toothless@gmail.com"]
    //];

    //Converte para JSON e retorna
    //echo json_encode($usuarios);