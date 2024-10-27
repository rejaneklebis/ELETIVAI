<?php

    $host = "localhost"; 
    $db = "bancofrota_php";
    $usuario = "root";
    $senha = "";
    $port = "3306"; //para trocar a porta se precisar

    try{
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $usuario, $senha);//3 parametros, 1 string de conexão padrão
        if($pdo){
            echo "Conexão realizada com sucesso!";
        }else {
            echo "Erro ao conectar o banco de dados!";
        }
    }catch(Exception $e){ 
        echo "Erro: ".$e->getMessage();
    }

?>

