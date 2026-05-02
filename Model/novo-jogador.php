<?php
$nome = $_POST['jogador_nome'];
$posicao = $_POST['jogador_posicao'];
$idade = $_POST['jogador_idade'];
$camisa = $_POST['jogador_camisa'];
$nacionalidade = $_POST['jogador_nacionalidade'];
$img = $_POST['jogador_img'];

$sql = "
INSERT INTO jogadores (nome, posicao, idade, camisa, nacionalidade,img)
VALUES (:nome, :posicao, :idade, :camisa, :nacionalidade, :img);
";

require("conectar_com_banco.php");

$stmt = $conn->prepare($sql);

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':posicao', $posicao);
$stmt->bindValue(':idade', $idade);
$stmt->bindValue(':camisa', $camisa);
$stmt->bindValue(':nacionalidade', $nacionalidade);
$stmt->bindValue(':img', $img);

$stmt->execute(); 

$id = $conn->lastInsertId();
?>

<?php
require "jogador.php";
?>