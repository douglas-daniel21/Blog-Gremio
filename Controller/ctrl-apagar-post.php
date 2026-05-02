<?php
$id_post = $_GET['id'];

require("conectar_com_banco.php");

$sql = "
DELETE FROM posts
WHERE postId = :id_post
";

$stmt = $conn->prepare($sql);

$stmt->bindValue(':id_post', $id_post);

$stmt->execute(); 

require "gerenciar-post.php";
?>