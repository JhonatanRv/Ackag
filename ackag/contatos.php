<?php 

if(isset($_POST['submit'])){

  //Linkando a configuração do banco de dados
  include_once('config.php');
  //declaração das variaveis dos inputs
  $nome = $_POST['nome'];
  $fone = $_POST['fone'];
  $email = $_POST['email'];
  $txt = $_POST['txt'];

  //Evitando o cadastro de dados vazios
  if ( (empty($_POST['nome'])) || (empty($_POST['fone'])) ){

    if ((empty($_POST['nome']))):
      $_SESSION['mensagem'] = "O Campo 'nome' é Obrigatório!";
    endif;

    if ((empty($_POST['fone']))):
      $_SESSION['mensagem'] = "O Campo 'fone' é Obrigatório!";
    endif;

    header('Location: contatos.php');
    die();


     }


  //Insert no banco de dados das informações
  $result = mysqli_query($con, "INSERT INTO contatos(nome,telefone,email,motivo) VALUES ('$nome', '$fone', '$email', '$txt')");
  header("Location: Contatos.php");
  exit;
  
}
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
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/forms.css">
  <link rel="icon" href="./assets/A.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    const handlePhone = (event) => {
      let input = event.target
      input.value = phoneMask(input.value)
    }

    const phoneMask = (value) => {
      if (!value) return ""
        value = value.replace(/\D/g,'')
        value = value.replace(/(\d{2})(\d)/,"($1) $2")
        value = value.replace(/(\d)(\d{4})$/,"$1-$2")
        return value
      }

  </script>
  <title>Ackag Official Site</title>
</head>

<body>

  <!--------------------------------------Cabeçalho-------------------------------------------->
  <header class="header">
    <nav class="nav-bar">
      <a href="/" class="logo"><img src="./assets/Ackag.png" class="logo"></a>
      <ul class="nav-list">
        <li><a href="#about"><b>Sobre</b></a></li>
        <li><a href="contatos.php"><b>Contato</b></a></li>
        <li><a href="registro_login/login.php"><b>Login</b></a></li>
      </ul>
      <div class="mobile-icon">
        <button onclick="menuOn()"><img class="icon" src="assets/barra-menu.svg" alt=""></button>
      </div>
    </nav>
    <div class="mobile-menu">
      <ul class="nav-list">
        <li><a href="#about"><b>Sobre</b></a></li>
        <li><a href="login.html"><b>Projetos</b></a></li>
        <li><a href="contatos.php"><b>Contato</b></a></li>
      </ul>
    </div>
  </header>
  <!----------------------------------------form----------------------------------------------->
  
  <div class="form">
    <form action="contatos.php" method="POST">
      <div class="contatos">
        <h1><span>Entre em contato</span></h1>
      </div>

      <div class="teste">
        <div class="campos">

          <label for="nome">Nome:</label>
          <input type="text" id="nomeid" placeholder="João Pedro da Silva"  name="nome" />

          <label for="fone">Telefone:</label>
          <input type="tel" id="foneid" maxlength="15" placeholder="Informe seu telefone sem o DDD" onkeyup="handlePhone(event)"   name="fone" />

          <label for="email">Email:</label>
          <input type="email" id="emailid" placeholder="exemplo.123@gmail.com" name="email" />



          <textarea placeholder="Digite aqui o motivo do contato" name="txt" maxlength="170"></textarea>
        </div>
        <div class="buttonClass">
          <input class="button1" type="submit" name="submit" class="enviar" onclick="Enviar()" value="Enviar" />
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