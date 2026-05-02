<?php
$nome = $_POST['trofeu_nome'];
$quantidade = $_POST['trofeu_quantidade'];
$ultimo = $_POST['trofeu_ultimo'];
$img = $_POST['trofeu_img'];

$sql = "
INSERT INTO trofeus (nome, quantidade, ultimo, img)
VALUES (:nome, :quantidade, :ultimo, :img);
";

require("../conectar_com_banco.php");

$stmt = $conn->prepare($sql);

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':quantidade', $quantidade);
$stmt->bindValue(':ultimo', $ultimo);
$stmt->bindValue(':img', $img);

$stmt->execute();

$id = $conn->lastInsertId();
?>

<?php
require "../View/trofeus.php";
?>