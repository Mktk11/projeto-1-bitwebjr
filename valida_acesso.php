<?php
// Validação de acesso para páginas que só podem ser vistas por usuários logados.
// Esse arquivo deve ser incluído no início de cada página privada.

session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header('Location: index.php?login=erro');
    exit;
}

// Aqui podemos adicionar checagens adicionais, como autorização por perfil ou permissões.
?>