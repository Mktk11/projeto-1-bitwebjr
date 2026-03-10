<?php
	require("cadastro.php");

	try{

		$query = "select * from usuario";

		$stmt = $conexao->prepare($query);
		$stmt->execute();

        $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($usuario){
    		foreach ($usuario as $usuario) {
	            echo "<h1>E-mail: " . $usuario['email'] . "</h1>";
	            echo "<p>Nome: " . $usuario['nome'] . "</p>";
	            echo "Imagem: " . $usuario['foto'];
	            echo "<hr>";
        	}
        }
  
	}catch(PDOException $e){
		echo "ERRO!!".$e->getMessage();
	}


?>
