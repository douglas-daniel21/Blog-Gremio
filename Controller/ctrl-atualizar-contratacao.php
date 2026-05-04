<?php
$nome = $_POST['contratacao_nome'];
$posicao = $_POST['contratacao_posicao'];
$time = $_POST['contratacao_time'];
$idade = $_POST['contratacao_idade'];
$nacionalidade = $_POST['contratacao_nacionalidade'];
$valor = $_POST['contratacao_valor'];
$img = $_POST['contratacao_img'];
$id = $_POST['contratacao_id'];

require(__DIR__."/../conectar_com_banco.php");


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
require __DIR__."/../View/gerenciar-contratacao.php";
?>