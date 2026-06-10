<?php
	session_start();

	$descricao = $_POST['descricao'];

	$texto = $descricao.PHP_EOL;

	//Abrindo o arquivo
	$arquivo = fopen('arquivo.hd', 'a');
	
	//Escrevendo no arquivo
	fwrite($arquivo, $texto);

	//Fechando arquivo
	fclose($arquivo);

	echo $texto;

?>