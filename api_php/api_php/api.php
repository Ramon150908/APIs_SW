<?php

    //Cabeçalho
    header("Content-Type: application/json");  //Define o tipo de resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

    //Recupera o arquivo JSON na mesma pasta do projeto
    $arquivo = 'usuarios.json';

    //Verifica se o arquivo existe, se não existir, cria um array vazio
    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_CODE));
    }

    //Lê o conteúdo do arquivo JSON
    $usuarios = json_decode(file_get_contents($arquivo), true);

    //Conteúdo
    //$usuarios = [
    //    ["id" => 1, "nome" => "Astrid", "email" => "stormfly@gmail.com"],
    //    ["id" => 2, "nome" => "Soluço", "email" => "toothless@gmail.com"]
    //];


    //echo "Método de requisição: ". $metodo;
    
    switch ($metodo) {
        case 'GET':
            echo json_encode($usuarios);
            //echo "Aqui as ações do método GET";
            break;
        case 'POST':
            //echo "Aqui as ações do método POST";
            $dados = json_decode(file_get_contents('php://input'), true);
            //print_r($dados);
            $newUser = [
                "id" => $dados["id"],
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];

            //Adiciona o novo usuário ao array existente
            array_push($usuarios,$newUser);
            echo json_encode('Usuário inserido com sucesso! ');
            print_r($usuarios);
            break;
        case 'PUT':
            echo "Aqui as ações do método PUT";
            break;
        case 'DELETE':
            echo "Aqui as ações do método DELETE";
            break;
        default:
            echo "Método não encontrado!";
            break;
    }
    
    
    
    
    
    //Converte para JSON e retorna;
    