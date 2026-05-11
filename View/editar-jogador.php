<?php
$id_jogador = $_GET['id'];

require(__DIR__."/../conectar_com_banco.php");
$sql_dados_jogadores = "
SELECT jogadorId, nome, posicao, idade, camisa, nacionalidade, img
FROM jogadores
WHERE jogadorId = $id_jogador;
";

$rs_jogador = $conn->query($sql_dados_jogadores);

$um_jogador = $rs_jogador->fetch(PDO::FETCH_ASSOC);

$nome = $um_jogador['nome'];
$posicao = $um_jogador['posicao'];
$idade = $um_jogador['idade'];
$camisa = $um_jogador['camisa'];
$nacionalidade = $um_jogador['nacionalidade'];
$img = $um_jogador['img'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">

    <title>Editar Jogador</title>
</head>
<body>
    <header>
        
        <div>
            <img style="width: 200px;" src="/img/gremio logo.svg">
        </div>

        <nav>
            <a href="/index.php">Home</a>
            <a href="/View/jogador.php">Jogadores</a>
            <a href="/View/novo-jogador.html">Novo Jogador</a>
            <a href="/View/gerenciar-jogador.php">Deletar Jogador</a>
        </nav>
    </header>
    <h2 style="text-align: center;">Editar Jogador</h2>
    <form action="../Controller/ctrl-atualizar-jogador.php" method="post">
        
        <label>Nome:</label>
        <input type="text" style="width: 100%;" name="jogador_nome" value="<?=$nome?>" required>

        <label>Posição:</label>
        <input minlength="3" type="text" style="width: 100%;" name="jogador_posicao" value="<?=$posicao?>" required> 

        <label>Idade:</label>
        <input minlength="2" type="number" style="width: 100%;" name="jogador_idade" value="<?=$idade?>" required>

        <label>Camisa:</label>
        <input minlength="3" type="number" style="width: 100%;" name="jogador_camisa" value="<?=$camisa?>" required>

        <label>Nacionalidade:</label>
        <input type="text" style="width: 100%;" name="jogador_nacionalidade" value="<?=$nacionalidade?>" required>

        <label>Img:</label>
        <input type="text" style="width: 100%;" name="jogador_img" value="<?=$img?>" required>
        
        <input type="hidden" name="jogador_id" value="<?=$id_jogador?>">

        <input style="font-family: Arial, Helvetica, sans-serif; width: 45%;" type="submit" value = "Atualizar Jogador">
    </form>
</body>
</html>