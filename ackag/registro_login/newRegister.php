<?php
//Sessão
session_start();
//Conexão
include_once 'connect.php';
//Dando Clear
function clear($input) {
  global $connect; //Essa forma de atribuir variável, o global, tem uma maior abrangência, pode ser acessada em qualquer lugar ( a grosso modo );
  //sql
  $var = mysqli_escape_string($connect, $input);
  //xss
  $var = htmlspecialchars($var);
  return $var; 
}

//Pegando dados do usuário do formulário
if(isset($_POST['submit'])):
  $nome = clear($_POST['name']);
  $user = clear($_POST['username']);
  $email = clear($_POST['email']);
  $senha = clear($_POST['senha']);
  $senha_crip = SHA1($senha);

  //Verificando se o cadastro já foi feito no banco de dados, impedindo cadastros duplicados
    $sql_login = "SELECT COUNT(*) total FROM user WHERE nomeUser = '$user'";
    $sql_email = "SELECT COUNT(*) total FROM user WHERE email = '$email'";

    $res_login = mysqli_query($connect, $sql_login);
    $res_email = mysqli_query($connect, $sql_email);

  while($dados_login = mysqli_fetch_array($res_login)):
      $login_unico = $dados_login['total'];
  endwhile;

  while($dados_email = mysqli_fetch_array($res_email)):
    $email_unico = $dados_email['total'];
  endwhile;



    if($login_unico == 1 || $email_unico == 1){
    header('Location: register.php'); 
       die();   
    }
    

  //verificando se a senha é forte, caso não seja redirecionando o usuário de volta para página de registro
    if (strlen($senha) < 8):
     header('Location: register.php');
     exit();    
    endif;


      //iserindo dados no banco
  $sql = "INSERT INTO user (nomeUser, email, senha, nome) VALUES ('$user','$email','$senha_crip','$nome')";

  //Validando SQL e redirecionando para a página principal
    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Cadastrado com sucesso!";
      header('Location: ../index.html');
    else:
      $_SESSION['mensagem'] = "Erro ao cadastrar, tente novamente mais tarde";
      header('Location: ../index.html');
    endif;


endif;


?>