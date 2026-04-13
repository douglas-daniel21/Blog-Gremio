<?php
$id_trofeu = $_GET['id'];

require("conectar_com_banco.php");

$sql_dados_trofeus = "
SELECT trofeuId, nome, quantidade, ultimo, img
FROM trofeus
WHERE trofeuId = $id_trofeu;
";

$rs_trofeus = $conn->query($sql_dados_trofeus);

$um_trofeu = $rs_trofeus->fetch(PDO::FETCH_ASSOC);

$nome = $um_trofeu['nome'];
$quantidade = $um_trofeu['quantidade'];
$ultimo = $um_trofeu['ultimo'];
$img = $um_trofeu['img'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">

    <title>Novo Troféu</title>
</head>
<body>
    <header>

        <div>
            <img style="width: 200px;" src="img/gremio logo.svg">
        </div>
        <nav>
            <a href="index.php">Home</a> 
            <a href="trofeus.php">Troféus</a>
            <a href="novo-trofeu.html">Novo Troféu</a>
            <a href="gerenciar-trofeu.php">Gerenciar Troféu</a>
        </nav>
    </header>
    <h2 style="text-align: center;">Editar Troféu</h2>
    <form action="ctrl-atualizar-trofeu.php" method="post">
        
        <label>Nome:</label>
        <input style="width: 100%;" name="trofeu_nome" value="<?=$nome?>">

        <label>Quantidade:</label>
        <input style="width: 100%;" name="trofeu_quantidade" value="<?=$quantidade?>">
        
        <label>Ultima vez conquistado:</label>
        <input style="width: 100%;" name="trofeu_ultimo" value="<?=$ultimo?>">

        <label>Img:</label>
        <input style="width: 100%;" name="trofeu_img" value="<?=$img?>">
        
        <input type="hidden" name="trofeu_id" value="<?=$id_trofeu?>">

        <input style="font-family: Arial, Helvetica, sans-serif; width: 45%;" type="submit" value = "Atualizar Troféu">
    </form>
</body>
</html>