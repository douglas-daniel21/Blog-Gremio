<?php
require(__DIR__."/../conectar_com_banco.php");
$busca = $_GET['busca'] ?? null;

if ($busca == null){
    $sql_dados_contratacoes = "
    SELECT nome, posicao, time, idade, nacionalidade, valor, img
    FROM contratacoes
    ORDER BY contratacaoId DESC;
    ";
}else{
    $sql_dados_contratacoes = "
    SELECT nome, posicao, time, idade, nacionalidade, valor, img
    FROM contratacoes
    WHERE nome LIKE '%$busca%'
    ORDER BY contratacaoId DESC;
    ";
}

$rs_contratacoes = $conn->query($sql_dados_contratacoes);
?>