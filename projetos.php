<?php
    require_once("valida_acesso.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/projetos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
     integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="js/scripts.js" defer></script>
    <title>Projetos</title>
</head>
<body class="tema--light">
    <aside class="body__aside">
        <nav>
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
            <div class="nav__logo">
                <div class="nav--img">
                    <img src="imagens/logo-bit-removebg.png" alt="logo da bitweb Junior" srcset="">
                </div>
                <ul>
                    <li >
                        <a href="home.php">
                            <span class="span__icon"><i class="fa-solid fa-house"></i></span>
                            <span class="span__txt--link">Home</span>
                        </a>
                    </li>
                    <li >
                        <a href="doc.php">
                            <span ><i class="fa-solid fa-folder"></i></span>
                            <span class="span__txt--link">Documentos</span>
                        </a>
                    </li>
                    <li>
                        <a href="projetos.php">
                            <span ><i class="fa-solid fa-file"></i></span>
                            <span class="span__txt--link">Páginas</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav__imgperfil">
                <div class="div--imgperfil">
                    <img src="?php echo $foto;?>" alt="perfil-usuario">
                    <p>perfil</p>
                </div>
                
            </div>
        </nav>
    </aside>
    <main>
        <section id="main__section--divisao">
            <h1>Projetos</h1>
            <div class="section__divisao">
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
            </div>
        </section>
        <section id="main__section--resolucao">
            <div id="div--resolucoes">
                <h3>Projetos</h3>
                <div class="div--btn">
                    <button>Filter</button>
                    <button>Add</button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>