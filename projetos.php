<?php
    // 1. SEMPRE a primeira coisa no arquivo
    session_start();

    // 2. PROTEÇÃO: Se não estiver logado, volta para o login
    if (!isset($_SESSION['usuario_id'])) {
        header("Location: index.html");
        exit;
    }

    // 3. VARIÁVEIS (pegando da sessão que você criou no login.php)
    $user = $_SESSION['usuario_nome'] ?? "Usuário";
    $foto = $_SESSION['usuario_foto'] ?? "Foto";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/projetos.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
     integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="js/scripts.js" defer></script>
    <title>Projetos</title>
</head>
<body class="light">
    <aside class="menu-lateral">
        <ul class="flex space-x-4">
          <li class="w-50 m-4" id="ul__li--icones">
            <input type="checkbox" name="change-theme" id="change-theme">
            <label for="change-theme">
              <i class="fa-solid fa-toggle-off" onclick="temaLightDark()"></i>
              <i class="fa-solid fa-toggle-on" onclick="temaLightDark()"></i>
            </label>
            <label>
                <i class="fa fa-times" id="btn-expandir" onclick="fecharMenu()" aria-hidden="true"></i>
            </label>
          </li>
        </ul>
        <nav class="">
            <img src="imagens/logo-bit-removebg.png" alt="logo da bitweb Junior" srcset="">
            <ul class="">
                <li class="item-menu">
                    <a href="home.php">
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="doc.php">
                        <span class="icon"><i class="fa-solid fa-folder"></i></span>
                        <span class="txt-link">Documentos</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="projetos.php">
                        <span class="icon"><i class="fa-solid fa-file"></i></span>
                        <span class="txt-link">Páginas</span>
                    </a>
                </li>
            </ul>
            <div id="nav__div--perfil">
                <img src="<?php echo $foto;?>" id="nav__img--perfil" alt="perfil-usuario">
                <p>perfil</p>
            </div>
        </nav>
    </aside>
    <main>
        <section id="main__section--divisao">
            <div id="section__div--projetos">
                <p>
                    projetos
                </p>
            </div>
            <div id="section__div--concluidos">
                <p>
                    concluidos
                </p>
            </div>
            <div id="section__div--andamento">
                <p>
                    em andamento
                </p>
            </div>
        </section>
        <section id="main__section--resolucao">
            <div id="div--resolucoes">
                <div id="resolucao__div--botoes">
                    <button>add</button>
                    <button>remove</button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>