<?php
//Conexão
require_once 'connect.php';

//Sessão
session_start();

//Botão enviar
if(isset($_POST['submit'])):
    $erros = array();
    
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    
    if(empty($email) or empty($senha)):
        $erros[] = "<li> O campo email/senha precisa ser preenchido </li>";
    else:    
        
        $sql = "SELECT email FROM user WHERE email = '$email'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
            $senha = md5($senha);
            $sql = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'";

            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1 ):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: index.php');
            else:
                $erros[] = "<li> Usuário e senha não conferem </li>";
            endif;

        else:
            $erros[] = "<li> Usuário inexistente </li>";
        endif;

    endif;

endif;
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/forms.css">
  <link rel="icon" href="./assets/A.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/script.js" defer></script>
  <title>Ackag Official Site</title>
</head>


<body>

<!--------------------------------------Cabeçalho-------------------------------------------->
<header class="header">
    <nav class="nav-bar">
      <a href="/" class="logo"><img src="../assets/Ackag.png" class="logo"></a>
      <ul class="nav-list">
        <li><a href="#about"><b>Sobre</b></a></li>
        <li><a href="contatos.php"><b>Contato</b></a></li>
        <li><a href="login.php"><b>Login</b></a></li>
      </ul>
      <div class="mobile-icon">
        <button onclick="menuOn()"><img class="icon" src="assets/barra-menu.svg" alt=""></button>
      </div>
    </nav>
    <div class="mobile-menu">
      <ul class="nav-list">
        <li><a href="#about"><b>Sobre</b></a></li>
        <li><a href="login.php"><b>Login</b></a></li>
        <li><a href="contatos.php"><b>Contato</b></a></li>
      </ul>
    </div>
  </header>
<!--------------------------------------Form-------------------------------------------->
<div class="form">
    <form action="newRegister.php" method="POST">
      <div class="contatos">
        <h1><span>Faça Login</span></h1>
      </div>

      <div class="teste">
        <div class="campos">

          <label for="nome">Email:</label>
          <input type="text" id="nomeid" required="required" name="email" />

          <label for="username">Senha:</label>
          <input type="password" id="senhaid" required="required" name="senha" />
         

        </div>

        <div class="link"><a href="register.php">Não possui conta? Cadastre-se</a></div>

        <div class="buttonClass">
          <input class="button1" type="submit" name="submit" class="enviar" onclick="validadePassword();" value="Enviar" />
        </div>
      </div>
    </form>
  </div>

<!--------------------------------------Footer----------------------------------------------->
<div class="footer-div" id="footer">
    <footer class="footer-distributed">
      <div class="footer-left">
        <img src="./assets/Ackag.png" width="12%">
        <h3>Ackag.Startup</h3>
        <p class="footer-links">
          <a href="#menu-top">Voltar ao início</a>
        </p>
        <a style="text-decoration: none;">
          <p class="footer-company-name">©Ackag</p>
        </a>
      </div>

      <div class="footer-right">
        <!-- Sobre nós -->
        <p class="footer-company-about">
          <span>Sobre nós</span>
          Nós acreditamos que a criatividade capacita a transformação, pessoalmente e profissionalmente em todos os
          setores. Buscamos bons resultados, não somente pessoais, mas como um todo.<br>
          <br>Site desenvolvido por @v1tooR (Github)
          <!-- Redes Sociais -->
        <div class="footer-icons">
          <a href="https://pt-br.facebook.com/senaitaubate/"><img src="./assets/004-facebook.png"><i
              class="fa fa-facebook"></i></a>
          <a href="https://github.com/DigitCCode"><img src="./assets/github.png"><i class="fa fa-twitter"></i></a>
          <a href="https://www.instagram.com/akag_.br/"><img src="./assets/002-instagram.png"><i
              class="fa fa-instagram"></i></a>
          <a href="https://br.linkedin.com/company/escolasenaitaubate"><img src="./assets/001-linkedin.png"><i
              class="fa fa-linkedin"></i></a>

        </div>

      </div>
    </footer>
  </div>

</body>
</html>