<?php
$servidor= "localhost";
$username= "hadames";
$senha= "Hadson01";
$dbname= "projetoa3";

$conexao = mysqli_connect ($servidor,$username,$senha,$dbname);
if(!$conexao) {
    die("falha na conexão: ".mysqli_connect_error());
}else
?>