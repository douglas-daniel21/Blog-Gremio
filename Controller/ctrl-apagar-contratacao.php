<?php
$id_contratacao = $_GET['id'];

require(__DIR__."/../conectar_com_banco.php");

$sql = "
DELETE FROM contratacoes
WHERE contratacaoId = :id_contratacao
";

$stmt = $conn->prepare($sql);

$stmt->bindValue(':id_contratacao', $id_contratacao);

$stmt->execute(); 

require __DIR__."/../View/gerenciar-contratacao.php";
?>