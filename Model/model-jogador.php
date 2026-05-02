<?php
require("conectar_com_banco.php");
$sql_dados_jogadores = "
SELECT nome, posicao, idade, camisa, nacionalidade, img
FROM jogadores
ORDER BY jogadorId DESC;
";
$rs_jogadores = $conn->query($sql_dados_jogadores);
?>

<?php
require("conectar_com_banco.php");
$sql_dados_jogadores_ata = "
SELECT nome, posicao, img
FROM jogadores
WHERE posicao in ('ATA','PD','PE','SA');
";
$rs_jogadores_ata = $conn->query($sql_dados_jogadores_ata);
?>

<?php
require("conectar_com_banco.php");
$sql_dados_jogadores_mc = "
SELECT nome, posicao, img
FROM jogadores
WHERE posicao in ('MC','MAT','ME','MD','VOL');
";
$rs_jogadores_mc = $conn->query($sql_dados_jogadores_mc);
?>

<?php
require("conectar_com_banco.php");
$sql_dados_jogadores_def = "
SELECT nome, posicao, img
FROM jogadores
WHERE posicao in ('ZAG','LE','LD');
";
$rs_jogadores_def = $conn->query($sql_dados_jogadores_def);
?>

<?php
require("conectar_com_banco.php");
$sql_dados_jogadores_gol = "
SELECT nome, posicao, img
FROM jogadores
WHERE posicao in ('GOL');
";
$rs_jogadores_gol = $conn->query($sql_dados_jogadores_gol);
?>