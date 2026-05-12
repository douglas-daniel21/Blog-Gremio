<?php
require(__DIR__."/../conectar_com_banco.php");
$busca = $_GET['busca'] ?? null;

if ($busca == null){
    $sql_dados_posts = "
    SELECT postId, titulo, resumo, texto, data, autor, img
    FROM posts
    ORDER BY postId DESC;
    ";
}else{
    $sql_dados_posts = "
    SELECT postId, titulo, resumo, texto, data, autor, img
    FROM posts
    WHERE titulo LIKE '%$busca%'
    ORDER BY postId DESC;
    ";
}

$rs_posts = $conn->query($sql_dados_posts);
?>