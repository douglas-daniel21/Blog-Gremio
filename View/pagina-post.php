<?php
$id_post = $_GET['id'];

require("../conectar_com_banco.php");

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

    <header style="text-align: center; padding: 20px;">
        <img style="width: 20%;" src="../img/gremio logo.svg">
        <img style="width: 80%;" src="../gif/gif-2000x380.gif">
    </header>


    <main class="container" style="text-align: center; border: 1px solid gray">
        <article class="container">
                <h1>
                <?=$titulo?>
                </h1>
                <h5><?=$resumo?></h5>
                <small style="color: gray;">por <span style="color: skyblue"><?=$autor?></span> - <?=$data?> 15:34 </small>

                <figure>    
                <img style="width: 40%;" class="figure-img img-fluid" src="img/icones/<?=$img?>.svg">
                </figure>

                <figcaption style="padding: 10px">Jogo Gremio</figcaption>
                <a href="https://www.youtube.com/watch?v=V1mm6ry2Jk0" 
                target="_blank" style="text-decoration: none; padding: 10px 20px; background-color: #007bff; color:
                white; border-radius: 5px; display: inline-block;">
                Assistir resumo da partida
                </a>
                <hr>

                <p class="container" style="padding: 20px; width: 80%; text-align: justify;">
                <?=$texto?>
                </p>      
        </article>

    </main>


        

       
    <footer style="text-align: center; padding: 20px">
        <button  style="background-color: white; padding: 5px; border 1px solid gray;" href="">
             <img style="width: 40px;" src="../img/icones/icone-zap.jpg"> 
        </button>

        <button style="background-color: white; padding: 5px; border 1px solid gray;" href="">
             <img style="width: 40px;" src="../img/icones/icone-instagram.jpg">
        </button>

        <button style="background-color: white; padding: 5px; border 1px solid gray;" href="">
             <img style="width: 40px;" src="../img/icones/icone-compartilhar.jpg">
        </button>
    </footer>
    <hr>

    <div class="container">
    <?php
    require ("require/post.php");
    ?>
    </div>

</body>

</html>