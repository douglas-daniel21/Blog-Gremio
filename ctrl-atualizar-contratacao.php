<?php
$nome = $_POST['contratacao_nome'];
$posicao = $_POST['contratacao_posicao'];
$time = $_POST['contratacao_time'];
$idade = $_POST['contratacao_idade'];
$nacionalidade = $_POST['contratacao_nacionalidade'];
$valor = $_POST['contratacao_valor'];
$img = $_POST['contratacao_img'];
$id = $_POST['contratacao_id'];

$sql = "
UPDATE contratacoes
SET nome = :nome,
    posicao = :posicao,
    time = :time,
    
    idade = :idade,
    nacionalidade = :nacionalidade,
    valor = :valor,
    img = :img
WHERE contratacaoId = :id_contratacao;
";

$conn = new PDO("sqlite:banco_blog.db");

$stmt = $conn->prepare($sql);

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':posicao', $posicao);
$stmt->bindValue(':time', $time);
$stmt->bindValue(':idade', $idade);
$stmt->bindValue(':nacionalidade', $nacionalidade);
$stmt->bindValue(':valor', $valor);
$stmt->bindValue(':img', $img);
$stmt->bindValue(':id_contratacao', $id);

$stmt->execute();
?>

<?php
require "gerenciar-contratacao.php";
?>