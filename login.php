<?php
    
    session_start();

    $usuarios_autenticados = false;

    $usuarios_servidor = array(array('email'=>'adm@teste.com.br','senha'=>'123456789'),array('email'=>'user@teste.com.br','senha'=>'abcd'));

    foreach ($usuarios_servidor as $user) {
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuarios_autenticados = true;
        }
    }
    if ($usuarios_autenticados) {
        $_SESSION['autenticado'] = "SIM";
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = "NAO";
        header('Location: index.php?login=erro');
    }

/* Acesso ao banco de dados 

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

*/
?>


