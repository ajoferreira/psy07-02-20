<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'psymed';
//$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
$conn = mysqli_connect($server, $user, $pass, $database) or die ("Sem conexão com o database");
?>