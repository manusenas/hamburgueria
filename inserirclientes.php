<?php
$nome = $_GET["nome"];
$numero = $_GET["numero"];

include "conexao.php";

$insert = "insert into clientes values ('', '$nome', '$numero')";
$conexao->query($insert);






?>