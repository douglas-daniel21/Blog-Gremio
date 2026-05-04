<?php
$id_trofeu = $_GET['id'];

require(__DIR__."/../conectar_com_banco.php");

$sql = "
DELETE FROM trofeus
WHERE trofeuId = :id_trofeu
";

$stmt = $conn->prepare($sql);

$stmt->bindValue(':id_trofeu', $id_trofeu);

$stmt->execute(); 

require "../View/gerenciar-trofeu.php";
?>