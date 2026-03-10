<?php
require('cadastro.php');

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $email = $_POST['email'];
    $usuario = $_POST['user'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    

    if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])){
        $imagem = "imagens/".$_FILES['arquivo']['name'];
        move_uploaded_file($_FILES['arquivo']['tmp_name'],$imagem);
        echo "Imagem carregada com sucesso";
    }else{
        $imagem = "";
    }

    try {
        // REMOVIDO as aspas simples e AJUSTADO os nomes para bater com o bindParam
        $sql = "INSERT INTO usuario(nome, foto, email, senha) VALUES (:nome, :foto, :email, :senha)";
        
        $stmt = $conexao->prepare($sql);

        // Agora tudo coincide perfeitamente
        $stmt->bindParam(":nome", $usuario);
        $stmt->bindParam(":foto", $imagem);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        
        $stmt->execute();

        echo '<h1>Usuário cadastrado com sucesso!</h1>';
        header("Refresh: 3; url=index.html");

    } catch(PDOException $e) {
        echo 'Usuário não cadastrado: ' . $e->getMessage();
    }
}
?>