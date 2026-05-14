<?php
$id_post = $_GET['id'];

require(__DIR__."/../conectar_com_banco.php");

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
    <title>Pagina Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <header>
        <div style=" padding: 20px;">

            <div>
                <a style="position: fixed; top: 20px; right: 20px; z-index: 9999; text-decoration: none;background-color: rgb(38, 120, 228); border-radius: 5px; padding: 8px;color: white;font-size: larger;" type="button" href="../index.php" 
                data-bs-dismiss="modal" aria-label="Close">Home</a>

                <div style="text-align: center;">
                    <img style="width: 10%;" src="../img/gremio logo.svg">
                </div>
            </div>

            <div style="padding-bottom: 20px;text-align: center;">
                <img style="width: 50%;" src="../gif/gif-2000x380.gif">

            </div>
        </div>
        
        
    </header>

    <main class="container" style="text-align: center; border: 1px solid gray">
        <article class="container">
                <h1 style="padding-bottom: 20px; padding-top: 20px;">
                <?=$titulo?>
                </h1>
                <h5><?=$resumo?></h5>
                <small style="color: gray;">por <span style="color: skyblue"><?=$autor?></span> - <?=$data?> 15:34 </small>

                <figure>    
                <img style="width: 20%;" class="figure-img img-fluid" src="/img/icones/<?=$img?>.svg">
                </figure>

                <hr>

                <h6 class="container" style="padding: 20px; width: 80%; text-align: justify;">
                <?=$texto?>
                </h6>      
        </article>

    </main>   
    <footer style="text-align: center; padding: 20px">
        <button  style="background-color: white; padding: 5px; border: 1px solid gray;" href="">
             <img style="width: 40px;" src="../img/icones/icone-zap.jpg"> 
        </button>

        <button style="background-color: white; padding: 5px; border: 1px solid gray;" href="">
             <img style="width: 40px;" src="../img/icones/icone-instagram.jpg">
        </button>

        <button style="background-color: white; padding: 5px; border: 1px solid gray;" href="">
             <img style="width: 40px;" src="../img/icones/icone-compartilhar.jpg">
        </button>
    </footer>
    <hr>
    <div style="padding-top: 25px;" class="container">
    
    <?php
    require("post-index.php");
    ?>
    
    <hr>

    </div>

    <?php 
    require("footer.html");
    ?>
</body>
</html>