<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BitWeb - Projeto 1</title>
    <!-- Ícones -->

    <script src="https://kit.fontawesome.com/9729da2774.js" crossorigin="anonymous"></script>

    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="css/_basico.css">
    <link rel="stylesheet" href="css/estilo.css">
    <!-- Javascript -->

    <script src="js/scripts.js" defer></script>
    <style>
      .mensagem-erro{
        text-align: center;
        font-size: 1.2rem;
        color: red;
      }
    </style>
  </head>
  <body class="tema--light">
    <header>
      <nav>
        <div class="nav__logo">
          <a href="#">
            <img src="imagens/logo.png" alt="logo-BitwebJr">
          </a>
        </div>
        <div class="nav__icones">
          <ul>
            <li>
              <input type="checkbox" name="change-theme" id="change-theme">
              <label for="change-theme">
                <i class="fa-solid fa-toggle-off"></i>
                <i class="fa-solid fa-toggle-on"></i>
              </label>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <section class="main__sectionhero">
        <div class="section--img">
          <a href="#">
            <img src="imagens/logo-bit-removebg.png" alt="Logo BitWeb">
          </a>
        </div>
        <div class="section--form">
          <div class="section--form_btn">
            <button id="btn--login">Login</button>
            <button id="btn--cadastro">Cadastro</button>
          </div>
          <h2 class="form--login_h2">Login</h2>
          <h2 class="form--cadastro_h2 hidden">Cadastro</h2>
          <form method="POST" action="login.php" class="form--login" enctype="multipart/form-data">
            <label for="login-user">Usuário:</label>
            <input type="text" id="login-user" name="email" required>
            <label for="login-senha">Senha:</label>
            <input type="password" id="login-senha" name="senha" required>
            <?php
              if(isset($_GET['login']) && $_GET['login'] == "erro"){
            ?>
              <div class ="mensagem-erro">
                Usuários ou senha inválidos
              </div>
            <?php   
              }
            ?>
            <input type="submit" value="Entrar">
          </form>
          <form method="POST" action="cadastrar.php" class="form--cadastro hidden" enctype="multipart/form-data">
            <label for="cad-user">Usuário:</label>
            <input type="text" id="cad-user" name="user" required>
            <label for="cad-senha">Senha:</label>
            <input type="password" id="cad-senha" name="senha" required>
            <label for="cad-imagem">Imagem de perfil:</label>
            <input type="file" alt="Enviar" name="image-user" src="imagens/import.svg">
            <input type="submit" value="Cadastrar">
          </form>
        </div>
      </section>
    </main>
  </body>
</html>