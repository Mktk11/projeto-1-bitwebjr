<?php
require("cadastro.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
        // Buscamos o usuário pelo e-mail
        $sql = "SELECT * FROM usuario WHERE email = :email";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            session_start();
            $_SESSION['usuario_id'] = $usuario['id_usuario'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            $_SESSION['usuario_foto'] = $usuario['foto'];

            
            header("Location: home.php");
            exit; 
        } else {
            echo "<h1>Usuário não encontrado!</h1>";
        }

    } catch(PDOException $e) {
        echo "Erro no login: " . $e->getMessage();
    }
}

