<?php
require(__DIR__."/../conectar_com_banco.php");
$busca = $_GET['busca'] ?? null;

if ($busca == null){
    $sql_dados_trofeus = "
    SELECT nome, quantidade, ultimo, img
    FROM trofeus
    ORDER BY trofeuId DESC;
    ";
}else{
    $sql_dados_trofeus = "
    SELECT nome, quantidade, ultimo, img
    FROM trofeus
    WHERE nome LIKE '%$busca%'
    ORDER BY trofeuId DESC;
    ";
}

$rs_trofeus = $conn->query($sql_dados_trofeus);
?>