<?php
$nome = $_POST['jogador_nome'];
$posicao = $_POST['jogador_posicao'];
$idade = $_POST['jogador_idade'];
$camisa = $_POST['jogador_camisa'];
$nacionalidade = $_POST['jogador_nacionalidade'];
$img = $_POST['jogador_img'];
$id = $_POST['jogador_id'];

require(__DIR__."/../conectar_com_banco.php");

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
require __DIR__."/../View/gerenciar-jogador.php";
?>