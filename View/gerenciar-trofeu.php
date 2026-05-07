<?php

require(__DIR__."/../conectar_com_banco.php");
$sql_dados_trofeus = "
SELECT trofeuId, nome, ultimo, quantidade
FROM trofeus
ORDER BY trofeuId DESC;
";

$rs_trofeus = $conn->query($sql_dados_trofeus);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <title>Gerenciar Troféus</title>
</head>

<body>
    <header>
        <div>
            <img style="width: 200px;" src="../img/gremio logo.svg">
        </div>

    <nav>
        <a href="index.php">Home</a>
        <a href="trofeus.php">Troféus</a>
        <a href="novo-trofeu.html">Novo Troféu</a>
        <a href="gerenciar-trofeu.php">Gerenciar Troféu</a>
    </nav>
    
    </header>
    <h2 style="text-align: center;">Deletar Troféu</h2>
    <table>
        <thead>
            <th style='text-align: center;'>Nome</th>
            <th style='text-align: center;'>Quantidade</th>
            <th style='text-align: center;'>Ultimo</th>
            <th style='text-align: center;'>Comando</th>
        </thead>

        <tbody>
            <?php
            
            while($um_trofeu = $rs_trofeus->fetch(PDO::FETCH_ASSOC)) {
                $nome = $um_trofeu['nome'];
                $quantidade = $um_trofeu['quantidade'];
                $ultimo = $um_trofeu['ultimo'];
                $id = $um_trofeu['trofeuId'];

                $linha_com_trofeu = "
                <tr>
                    <td <td style='text-align: center;'>$nome</td>
                    <td <td style='text-align: center;'>$quantidade</td>
                    <td <td style='text-align: center;'>$ultimo</td>
                    <td style='text-align: center;'>
                        <a style='color: black; background-color: red; border-radius: 8px; padding: 8px; font-family: Arial, Helvetica, sans-serif;'  
                        href='../Controller/ctrl-apagar-trofeu.php?id=$id'>Deletar</a>
                        
                        <a style='color: black; background-color: orange; border-radius: 8px; padding: 8px; padding-left: 10px; font-family: Arial, Helvetica, sans-serif;'  
                        href='../View/editar-trofeu.php?id=$id'>Editar</a>
                </tr>
                ";

                echo $linha_com_trofeu;
            };

            ?>
        <tbody>
    </table>
</body>
</html>