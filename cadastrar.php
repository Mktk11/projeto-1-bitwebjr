<?php
    
    require("conexao.php");

    $tabela = "INSERT INTO usuario(email, senha) VALUES ('" . $_POST['user'] . "', '" . $_POST['senha'] . "')";

    $executar = pg_query($conexao,$tabela);

    if ($executar) {
        echo "Cadastrado com sucesso";
    }else{
        echo "Não foi cadastrado";
    }


?>