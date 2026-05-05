<?php

require(__DIR__."/../conectar_com_banco.php");

$sql_dados_contratacoes = "
SELECT contratacaoId, nome, posicao, time, idade, nacionalidade, valor
FROM contratacoes
ORDER BY contratacaoId DESC;
";

$rs_contratacoes = $conn->query($sql_dados_contratacoes);

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    
</head>

<body>
    <header>
        <div>
            <img style="width: 200px;" src="../img/gremio logo.svg">
        </div>

        <nav>
            <a href="/index.php">Home</a>
            <a href="/View/contratacoes.php">Contratações</a>
            <a href="/View/nova-contratacao.html">Novo Contratação</a>
            <a href="/View/gerenciar-contratacao.php">Gerenciar Contratações</a>
        </nav>  
    
    </header>
    <h2 style="text-align: center;">Gerenciar Contratação</h2>
    <table>
        <thead>
            <th style="text-align: center;">Nome</th>
            <th style="text-align: center;">Posição</th>
            <th style="text-align: center;">Ex clube</th>
            <th style="text-align: center;">Nacionalidade</th>
            <th style="text-align: center;">Comando</th>
        </thead>

        <tbody>

            <?php
            
            while($uma_contratacao = $rs_contratacoes->fetch(PDO::FETCH_ASSOC)) {
                $nome = $uma_contratacao['nome'];
                $posicao = $uma_contratacao['posicao'];
                $time = $uma_contratacao['time'];
                $idade = $uma_contratacao['idade'];
                $nacionalidade = $uma_contratacao['nacionalidade'];
                $valor = $uma_contratacao['valor'];
                $id = $uma_contratacao['contratacaoId'];

                $linha_com_contratacao = "
                <tr>
                    <td style='text-align: center;'>$nome</td>
                    <td style='text-align: center;'>$posicao</td>
                    <td style='text-align: center;'>$time</td>
                    <td style='text-align: center;'>$nacionalidade</td>
                    <td style='text-align: center;'>
                        <a style='color: black; background-color: red; border-radius: 8px; padding: 8px; font-family: Arial, Helvetica, sans-serif;'  
                        href='../Controller/ctrl-apagar-contratacao.php?id=$id'>Deletar</a>
                        
                        <a style='color: black; background-color: orange; border-radius: 8px; padding: 8px; padding-left: 10px; font-family: Arial, Helvetica, sans-serif;'  
                        href='../View/editar-contratacao.php?id=$id'>Editar</a>
                    </td>
                </tr>
                ";

                echo $linha_com_contratacao;
            };
            ?>
        <tbody>
    </table>
</body>
</html>