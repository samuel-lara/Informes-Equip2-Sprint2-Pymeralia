<?php
$host = "mariadb";
$user = "r00t";
$password = 'r00t';
$db_name = "pymeralias2";

$conn = mysqli_connect($host, $user, $password, $db_name);

mysqli_set_charset($conn,"utf8"); //transforma todo lo recuperado de la base de datos a utf-8 para poder codificar bien el texto 
?>
