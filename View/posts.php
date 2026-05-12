<?php
require  __DIR__."/../Model/model-post.php";
?>
<?php
// Simulando a lógica de verificação
session_start();
$logado = isset($_SESSION['usuario_email']);
$role = $logado ? $_SESSION['usuario_role'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Posts</title>
</head>
<body>
    <header>
    <div>
            <img style="width: 200px;" src="../img/gremio logo.svg">
        </div>
        <nav>
            <a href="../index.php">Voltar para home</a>

            <?php if ($role === 'adm'): ?>
                <a href="/View/posts.php">Posts</a>
                <a href="/View/novo-post.html">Novo Post</a>
                <a href="/View/gerenciar-post.php">Gerenciar Posts</a>
            <?php endif; ?> 
            
        </nav>
    </header>
    <main> 

        <form style="padding: 10px;" action="/../Model/model-post.php" method="GET">
        <input type="text" name="busca" placeholder="Pesquisar posts..." value="<?php echo isset($_GET['busca']) ? $_GET['busca'] : ''; ?>">
        <button style="border-radius: 7px;" type="submit" class="btn-buscar">Buscar</button>
        </form>

        <section>
            <h1 style="text-align: center;">Posts</h1>
        <?php

        while ($dados_posts = $rs_posts->fetch(PDO::FETCH_ASSOC)) {

            $posts_titulo = $dados_posts["titulo"];
            $posts_resumo = $dados_posts["resumo"];
            $posts_texto = $dados_posts["texto"];
            $posts_autor = $dados_posts["autor"];
            $posts_data = $dados_posts["data"];
            $posts_img = $dados_posts["img"];

            $template_de_post = "
            <div class='col-md-12'>
                <div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>
                    <div class='col p-4 d-flex flex-column position-static'> <strong
                    style='color: navy;' class='d-inline-block mb-2'>Autor: $posts_autor</strong>
                        <h3 class='mb-0'>$posts_titulo</h3>
                        <div class='mb-1 text-body-secondary'>$posts_data</div>
                        <p class='card-text mb-auto'>$posts_resumo</p> 
                        <a href='#' class='icon-link gap-1 icon-link-hover stretched-link'>
                        Ler mais
                        </a>
                    </div>
                    <div class='col-auto d-none d-lg-block'> 
                        <img style='width: 180px;' src='../Img/icones/$posts_img.svg'>    
                    </div>
                </div>
            </div>
            ";

            echo $template_de_post;
        };
        ?>
        </section>       
    </main>
</body>
</html>