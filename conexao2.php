<?php  

$host = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cadastro";

$con = mysqli_connect($host,$usuario,$senha,$dbname)or die("Não foi possivel conectar ao banco de dados");
$db = mysqli_select_db($con,$dbname)or die("Não se pode selecioar o bando de dados solicitado");


?>