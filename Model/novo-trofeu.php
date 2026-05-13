<?php
$nome = $_POST['trofeu_nome'];
$quantidade = $_POST['trofeu_quantidade'];
$ano = $_POST['trofeu_ano'];
$img = $_POST['trofeu_img'];

$sql = "
INSERT INTO trofeus (nome, quantidade, ano, img)
VALUES (:nome, :quantidade, :ano, :img);
";

require(__DIR__."/../conectar_com_banco.php");

$stmt = $conn->prepare($sql);

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':quantidade', $quantidade);
$stmt->bindValue(':ano', $ano);
$stmt->bindValue(':img', $img);

$stmt->execute();

$id = $conn->lastInsertId();
?>

<?php
require  __DIR__."../View/trofeus.php";
?>