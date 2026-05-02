<?php
$nome = $_POST['jogador_nome'];
$posicao = $_POST['jogador_posicao'];
$idade = $_POST['jogador_idade'];
$camisa = $_POST['jogador_camisa'];
$nacionalidade = $_POST['jogador_nacionalidade'];
$img = $_POST['jogador_img'];
$id = $_POST['jogador_id'];

$sql = "
UPDATE jogadores
SET nome = :nome,
    posicao = :posicao,
    idade = :idade,
    camisa = :camisa,
    nacionalidade = :nacionalidade,
    img = :img
WHERE jogadorId = :id_jogador;
";

$conn = new PDO("sqlite:banco_blog.db");

$stmt = $conn->prepare($sql);

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':posicao', $posicao);
$stmt->bindValue(':idade', $idade);
$stmt->bindValue(':camisa', $camisa);
$stmt->bindValue(':nacionalidade', $nacionalidade);
$stmt->bindValue(':img', $img);
$stmt->bindValue(':id_jogador', $id);

$stmt->execute();
?>

<?php
require "gerenciar-jogador.php";
?>