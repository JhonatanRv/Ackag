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
  <link rel="icon" href="../assets/A.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/script.js" defer></script>
  <title>Ackag Official Site - Register</title>

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
        <button onclick="menuOn()"><img class="icon" src="../assets/barra-menu.svg" alt=""></button>
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
<!--------------------------------------Body----------------------------------------------->

<div class="form">
    <form action="newRegister.php" method="POST">
      <div class="contatos">
        <h1><span>Registre-se</span></h1>
      </div>

      <div class="teste">
        <div class="campos">

          <label for="nome">Nome:</label>
          <input type="text" id="nomeid" required="required" name="name" />

          <label for="username">Nome de usuário:</label>
          <input type="text" id="userid" required="required" name="username" />

          <label for="email">Email:</label>
          <input type="email" id="emailid" required="required" name="email" />

          <label for="password">senha:</label>
          <input type="password" id="senhaid" required="required"  name="senha" />

        

        </div>
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
        <img src="../assets/Ackag.png" width="12%">
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
          <a href="https://pt-br.facebook.com/senaitaubate/"><img src="../assets/004-facebook.png"><i
              class="fa fa-facebook"></i></a>
          <a href="https://github.com/DigitCCode"><img src="../assets/github.png"><i class="fa fa-twitter"></i></a>
          <a href="https://www.instagram.com/akag_.br/"><img src="../assets/002-instagram.png"><i
              class="fa fa-instagram"></i></a>
          <a href="https://br.linkedin.com/company/escolasenaitaubate"><img src="../assets/001-linkedin.png"><i
              class="fa fa-linkedin"></i></a>

        </div>

      </div>
    </footer>
  </div>

</body>
</html>