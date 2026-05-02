<?php
$id_jogador = $_GET['id'];

require("conectar_com_banco.php");

$sql = "
DELETE FROM jogadores
WHERE jogadorId = :id_jogador
";

$stmt = $conn->prepare($sql);

$stmt->bindValue(':id_jogador', $id_jogador);

$stmt->execute(); 

require "gerenciar-jogador.php";
?>