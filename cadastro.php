<?php

$host = "localhost";
$usuario = "postgres";
$port = "5432";
$senha = "cusCUS11@@12";
$db = "cadastro_bitwebjr";

try{

    $dsn = "pgsql:host=$host;port=$port;dbname=$db";

    $conexao = new PDO($dsn,$usuario,$senha);

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    echo "<h1>ERRO: ".$e->getCode(). "Mensagem: ".$e->getMessage() . "</h1>";
    
}