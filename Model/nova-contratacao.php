<?php
$nome = $_POST['contratacao_nome'];
$posicao = $_POST['contratacao_posicao'];
$time = $_POST['contratacao_time'];
$idade = $_POST['contratacao_idade'];
$nacionalidade = $_POST['contratacao_nacionalidade'];
$valor = $_POST['contratacao_valor'];
$img = $_POST['contratacao_img'];

$sql = "
INSERT INTO contratacoes (nome, posicao, time, idade, nacionalidade, valor, img)
VALUES (:nome, :posicao, :time, :idade, :nacionalidade, :valor, :img);
";

require("conectar_com_banco.php");

$stmt = $conn->prepare($sql);

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':posicao', $posicao);
$stmt->bindValue(':time', $time);
$stmt->bindValue(':idade', $idade);
$stmt->bindValue(':nacionalidade', $nacionalidade);
$stmt->bindValue(':valor', $valor);
$stmt->bindValue(':img', $img);

$stmt->execute(); 

$id = $conn->lastInsertId();
?>

<?php
require "contratacoes.php";
?>