<?php
$servername = 'localhost:3306';
$username = 'root';
$password = '';
$db = 'users';

$connect = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($connect, "utf8");

//chgando se a conexão foi efetuada com sucesso, caso não retornando com um erro. 
if(mysqli_connect_error()): 
    echo "Erro na conexão: ".mysqli_connect_error();
 endif;    


?>