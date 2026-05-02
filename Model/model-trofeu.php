<?php

require("conectar_com_banco.php");

$sql_dados_trofeus = "
SELECT nome, quantidade, ultimo, img
FROM trofeus
ORDER BY trofeuId DESC;
";

$rs_trofeus = $conn->query($sql_dados_trofeus);
?>