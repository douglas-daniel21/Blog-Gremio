<?php
$id_contratacao = $_GET['id'];

require(__DIR__."/../conectar_com_banco.php");

$sql_dados_contratacao = "
SELECT contratacaoId, nome, posicao, time, idade, nacionalidade, valor, img
FROM contratacoes
WHERE contratacaoId = $id_contratacao;
";

$rs_contratacao = $conn->query($sql_dados_contratacao);

$uma_contratacao = $rs_contratacao->fetch(PDO::FETCH_ASSOC);

$nome = $uma_contratacao['nome'];
$posicao = $uma_contratacao['posicao'];
$time = $uma_contratacao['time'];
$idade = $uma_contratacao['idade'];
$nacionalidade = $uma_contratacao['nacionalidade'];
$valor = $uma_contratacao['valor'];
$img = $uma_contratacao['img'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <title>Editar Contratação</title>
</head>
<body>
    <header>

        <div>
            <img style="width: 200px;" src="/img/gremio logo.svg">
        </div>
                   
        <nav>
            <a href="/index.php">Home</a>
            <a href="/View/contratacoes.php">Contratações</a>
            <a href="/View/nova-contratacao.html">Novo Contratação</a>
            <a href="/View/gerenciar-contratacao.php">Gerenciar Contratações</a>
        </nav>  
    </header>
    <h2 style="text-align: center;">Editar Contratação</h2>
    <form action="ctrl-atualizar-contratacao.php"  method="post">
        
        <label>Nome:</label>
        <input type="text" style="width: 100%;" name="contratacao_nome" value="<?=$nome?>" required>

        <label>Posição:</label>
        <input minlength="3" type="text" style="width: 100%;" name="contratacao_posicao" value="<?=$posicao?>" required>

        <label>Time:</label>
        <input type="text" style="width: 100%;" name="contratacao_time" value="<?=$time?>" required>

        <label>Idade:</label>
        <input minlength="2" type="number" style="width: 100%;" name="contratacao_idade" value="<?=$idade?>" required>

        <label>Nacionalidade:</label>
        <input type="text" style="width: 100%;" name="contratacao_nacionalidade" value="<?=$nacionalidade?>" required>

        <label>Valor:</label>
        <input type="number" style="width: 100%;" name="contratacao_valor" value="<?=$valor?>" required>

        <label>Img:</label>
        <input style="width: 100%;" name="contratacao_img" value="<?=$img?>" required>
        
        <input type="hidden" name="contratacao_id" value="<?=$id_contratacao?>">

        <input style="font-family: Arial, Helvetica, sans-serif; width: 45%;" type="submit" value = "Atualizar Contratação">
    </form>
</body>
</html>