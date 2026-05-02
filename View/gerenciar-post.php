<?php

require("../conectar_com_banco.php");

$sql_dados_posts = "
SELECT postId, titulo, autor, data
FROM posts
ORDER BY postId DESC;
";

$rs_posts = $conn->query($sql_dados_posts);

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
</head>

<body>
    <header>
        <div>
            <img style="width: 200px;" src="../img/gremio logo.svg">
        </div>

    <nav>
        <a href="index.php">Home</a>
        <a href="posts.php">Posts</a>
        <a href="novo-post.html">Novo Post</a>
        <a href="gerenciar-post.php">Gerenciar Posts</a>
    </nav>
    
    </header>
    <h2 style="text-align: center;">Gerenciar Posts</h2>
    <table>
        <thead>
            <th style='text-align: center;'>Autor</th>
            <th style='text-align: center;'>Título</th>
            <th style='text-align: center;'>Data</th>
            <th style='text-align: center;'>Comandos</th>
        </thead>

        <tbody>
            <?php
            
            while($um_post = $rs_posts->fetch(PDO::FETCH_ASSOC)) {
                $titulo = $um_post['titulo'];
                $autor = $um_post['autor'];
                $data = $um_post['data'];
                $id = $um_post['postId'];

                $linha_com_post = "
                <tr>
                    <td <td style='text-align: center;'>$autor</td>
                    <td <td style='text-align: center;'>$titulo</td>
                    <td <td style='text-align: center;'>$data</td>
                    <td style='text-align: center;'>
                        <a style='color: black; background-color: red; border-radius: 8px; padding: 8px; font-family: Arial, Helvetica, sans-serif;'  
                        href='ctrl-apagar-post.php?id=$id'>Deletar</a>
                        
                        <a style='color: black; background-color: orange; border-radius: 8px; padding: 8px; padding-left: 10px; font-family: Arial, Helvetica, sans-serif;'  
                        href='editar-post.php?id=$id'>Editar</a>
                    </td>
                </tr>
                ";

                echo $linha_com_post;
            }

            ?>
        <tbody>
    </table>
</body>
</html>