<?php
require "model-post.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <main>
        <section>
        <?php

        while ($dados_posts = $rs_posts->fetch(PDO::FETCH_ASSOC)) {

            $posts_titulo = $dados_posts["titulo"];
            $posts_resumo = $dados_posts["resumo"];
            $posts_texto = $dados_posts["texto"];
            $posts_autor = $dados_posts["autor"];
            $posts_data = $dados_posts["data"];
            $posts_img = $dados_posts["img"];
            $id = $dados_posts['postId'];


            $template_de_post = "
            <div style='padding-left: 50px' class='col-md-12'>
                <div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>
                    <div class='col p-4 d-flex flex-column position-static'> <strong
                    style='color: navy;' class='d-inline-block mb-2 text-primary-emphasis'>Autor: $posts_autor</strong>
                        <h3 class='mb-0'>$posts_titulo</h3>
                        <div class='mb-1 text-body-secondary'>$posts_data</div>
                        <p class='card-text mb-auto'>$posts_resumo</p> 
                        <a style='color: blue; font-family: Arial, Helvetica, sans-serif;'  
                        href='pagina-post.php?id=$id'>Ler mais</a>
                    </div>
                    <div class='col-auto d-none d-lg-block'> 
                        <img style='width: 180px;' src='img/icones/$posts_img.svg'>    
                    </div>
                </div>
            </div>
            </article>
            ";

            echo $template_de_post;
        };
        ?>
            
        </section>
        
    </main>
</body>
</html>