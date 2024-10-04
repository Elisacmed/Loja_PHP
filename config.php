<?php

$user = "localhost";
$user = "root";
$password = "sucesso";
$dbname = "loja";
$dsn = "mysql:host=$host;dbname=$dbname;"; //url que vai construir para conectar com o banco de dados e inicia com mysql
//cria uma constante que pode ser acessada
define("dsn", $dsn);
define("user", $user);
define("password", $password);
 
?>