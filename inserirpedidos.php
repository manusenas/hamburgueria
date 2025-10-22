<?php
$produto = $_GET["produto"];
$valor = $_GET["valor"];
$data = $_GET["data"];

include "conexao.php";

$insert = "insert into pedidos values ('', '$produto', $valor, $data)";
$conexao->query($insert);

?>