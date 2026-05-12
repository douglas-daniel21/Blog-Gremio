<?php
require(__DIR__."/../conectar_com_banco.php");
$busca = $_GET['busca'] ?? null;

if ($busca == null){
    $sql_dados_jogadores = "
    SELECT nome, posicao, idade, camisa, nacionalidade, img
    FROM jogadores
    ORDER BY jogadorId DESC;
    ";
}else{
    $sql_dados_jogadores = "
    SELECT nome, posicao, idade, camisa, nacionalidade, img
    FROM jogadores
    WHERE nome LIKE '%$busca%'
    ORDER BY jogadorId DESC;
    ";
}

$rs_jogadores = $conn->query($sql_dados_jogadores);
?>