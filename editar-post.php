<?php
$id_post = $_GET['id'];

require("conectar_com_banco.php");

$sql_dados_posts = "
SELECT postId, titulo, resumo, texto, data, autor,img
FROM posts
WHERE postId = $id_post;
";

$rs_posts = $conn->query($sql_dados_posts);

$um_post = $rs_posts->fetch(PDO::FETCH_ASSOC);

$titulo = $um_post['titulo'];
$resumo = $um_post['resumo'];
$texto = $um_post['texto'];
$data = $um_post['data'];
$autor = $um_post['autor'];
$img = $um_post['img'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">

    <title>Editar Post</title>
    
</head>
<body>
    <header>

        <div>
            <img style="width: 200px;" src="img/gremio logo.svg">
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="posts.php">Posts</a>
            <a href="novo-post.html">Novo Post</a>
            <a href="deletar-post.php">Deletar Post</a>
        </nav>

    </header>
    
    <h2 style="text-align: center;">Editar Post</h2>
    <form action="ctrl-atualizar-post.php" method="post">
        
        <label>Título:</label>
        <input style="width: 100%;" name="posts_titulo" value="<?=$titulo?>">
        
        <label>Resumo:</label>
        <textarea name="posts_resumo"><?=$resumo?></textarea>

        <label>Texto:</label>
        <textarea name="posts_texto"><?=$texto?></textarea>

        <label>Autor:</label>
        <input style="width: 100%;" name="posts_autor" value="<?=$autor?>">

        <label>Data:</label>
        <input style="width: 100%;" name="posts_data" value="<?=$data?>">

        <label>Img:</label>
        <input style="width: 100%;" name="posts_img" value="<?=$img?>">
        
        <input type="hidden" name="posts_id" value="<?=$id_post?>">

        <input style="font-family: Arial, Helvetica, sans-serif; width: 45%;" type="submit" value = "Atualizar Post">
    </form>
</body>
</html>