<?php

$titulo = $_POST['posts_titulo'];
$resumo = $_POST['posts_resumo'];
$texto = $_POST['posts_texto'];
$data = $_POST['posts_data'];
$autor = $_POST['posts_autor'];
$img = $_POST['posts_img'];
$id = $_POST['posts_id'];

require(__DIR__."/../conectar_com_banco.php");

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
require "../View/gerenciar-post.php";
?>