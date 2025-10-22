<?php

$nome = $_GET["nome"];
$tipo = $_GET["tipo"];
$preco = $_GET["preco"];
$descricao = $_GET["descricao"];

include "conexao.php";

$insert = "insert into produto values ('', '$nome', '$tipo', $preco, '$descricao')";
$conexao->query($insert);


?>