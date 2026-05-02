<?php
$nome = $_POST['trofeu_nome'];
$quantidade = $_POST['trofeu_quantidade'];
$ultimo = $_POST['trofeu_ultimo'];
$img = $_POST['trofeu_img'];
$id = $_POST['trofeu_id'];

$sql = "
UPDATE trofeus
SET nome = :nome,
    quantidade = :quantidade,
    ultimo = :ultimo,
    img = :img
WHERE trofeuId = :id_trofeu;
";

$conn = new PDO("sqlite:banco_blog.db");

$stmt = $conn->prepare($sql);

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':quantidade', $quantidade);
$stmt->bindValue(':ultimo', $ultimo);
$stmt->bindValue(':img', $img);
$stmt->bindValue(':id_trofeu', $id);

$stmt->execute();
?>

<?php
require "gerenciar-trofeu.php";
?>