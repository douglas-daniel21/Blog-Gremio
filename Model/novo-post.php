<?php
$titulo = $_POST['post_titulo'];
$resumo = $_POST['post_resumo'];
$texto = $_POST['post_texto'];
$autor = $_POST['post_autor'];
$img = $_POST['post_img'];

$data_atual = date('Y-m-d H:i');

$sql = "
INSERT INTO posts (titulo, resumo, texto, autor, data, img)
VALUES (:titulo, :resumo, :texto, :autor, :data, :img);
";

require(__DIR__."/../conectar_com_banco.php");

$stmt = $conn->prepare($sql);

$stmt->bindValue(':titulo', $titulo);
$stmt->bindValue(':resumo', $resumo);
$stmt->bindValue(':texto', $texto);
$stmt->bindValue(':autor', $autor);
$stmt->bindValue(':data', $data_atual);
$stmt->bindValue(':img', $img);

$stmt->execute();

$id = $conn->lastInsertId();
?>

<?php
require  __DIR__."/../View/posts.php";
?>