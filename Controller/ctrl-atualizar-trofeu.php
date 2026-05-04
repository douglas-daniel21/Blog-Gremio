<?php
$nome = $_POST['trofeu_nome'];
$quantidade = $_POST['trofeu_quantidade'];
$ultimo = $_POST['trofeu_ultimo'];
$img = $_POST['trofeu_img'];
$id = $_POST['trofeu_id'];

require(__DIR__."/../conectar_com_banco.php");

$sql = "
UPDATE trofeus
SET nome = :nome,
    quantidade = :quantidade,
    ultimo = :ultimo,
    img = :img
WHERE trofeuId = :id_trofeu;
";



$stmt = $conn->prepare($sql);

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':quantidade', $quantidade);
$stmt->bindValue(':ultimo', $ultimo);
$stmt->bindValue(':img', $img);
$stmt->bindValue(':id_trofeu', $id);

$stmt->execute();
?>

<?php
require __DIR__."/../View/gerenciar-trofeu.php";
?>