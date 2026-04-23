<?php
require("validacao.php");

$titulo = $_POST['post_titulo'];
$resumo = $_POST['post_resumo'];
$texto = $_POST['post_texto'];
$autor = $_POST['post_autor'];
$data = $_POST['post_data'];
$img = $_POST['post_img'];

$validation = new Validation();
$data = $validation->validator(
    [
    "imdb" => $input["imdb"] ?? "",
    "titulo" => $input["titulo"] ?? "",
    "genero" => $input["genero"] ?? [],
    "duracao" => $input["duracao"] ?? 0,
    "classificacao" => $input["classificacao"] ?? ""
    ],//Dados

    [
        "imdb" => "required|size:10",
        "titulo" => "required|min:5",
        "genero" => "required|array|min:1",
        "duracao" => "required|numeric|min:90",
        "classificacao" => "required|min:2",
    ],//Regras

    [
        "imdb.required" => "O campo imdb é obrigatório.",
        "titulo.required" => "O campo titulo é obrigatório.",
        "genero.required" => "O campo genero é obrigatório.",
        "genero.array" => "O campo genero deve ser um array.",
        "genero.min" => "O campo genero deve ter pelo menos 1 item.",
        "duracao.required" => "O campo duracao é obrigatório.",
        "duracao.integer" => "O campo duracao deve ser um número inteiro.",
        "classificacao.required" => "O campo classificacao é obrigatório.",
        "classificacao.string" => "O campo classificacao deve ser uma string."
    ],//Messages
);

if($data->fails()){
    echo json_encode(["success" => false, "message" => $data->errors()->all()]);
    http_response_code(400);
    exit;
}

$sql = "
INSERT INTO posts (titulo, resumo, texto, autor, data, img)
VALUES (:titulo, :resumo, :texto, :autor, :data, :img);
";

require("conectar_com_banco.php");

$stmt = $conn->prepare($sql);

$stmt->bindValue(':titulo', $titulo);
$stmt->bindValue(':resumo', $resumo);
$stmt->bindValue(':texto', $texto);
$stmt->bindValue(':autor', $autor);
$stmt->bindValue(':data', $data);
$stmt->bindValue(':img', $img);

$stmt->execute();

$id = $conn->lastInsertId();
?>

<?php
require "posts.php";
?>