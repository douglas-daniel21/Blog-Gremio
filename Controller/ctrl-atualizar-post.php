<?php

$titulo = $_POST['posts_titulo'];
$resumo = $_POST['posts_resumo'];
$texto = $_POST['posts_texto'];
$data = $_POST['posts_data'];
$autor = $_POST['posts_autor'];
$img = $_POST['posts_img'];
$id = $_POST['posts_id'];

$sql = "
UPDATE posts
SET titulo = :titulo,
    resumo = :resumo,
    texto = :texto,
    data = :data,
    autor = :autor,
    img = :img
WHERE postId = :id_post;
";

$conn = new PDO("sqlite:banco_blog.db");

$stmt = $conn->prepare($sql);

$stmt->bindValue(':titulo', $titulo);
$stmt->bindValue(':resumo', $resumo);
$stmt->bindValue(':texto', $texto);
$stmt->bindValue(':data', $data);
$stmt->bindValue(':autor', $autor);
$stmt->bindValue(':img', $img);
$stmt->bindValue(':id_post', $id);

$stmt->execute();
?>

<?php
require "gerenciar-post.php";
?>