<?php

$servername = "localhost"; // padrão - server local
$database = "db_curso_estoque"; // altera conforme o nome do seu banco de dados
$username = "root"; // padrão - root
$password = ""; // senha de conexão do banco de dados

// create connection
$conexao = mysqli_connect($servername, $username, $password, $database);

?>
