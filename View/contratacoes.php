<?php
require  __DIR__."/../Model/model-contratacoes.php";
?>
<?php
// Simulando a lógica de verificação
session_start();
$logado = isset($_SESSION['usuario_email']);
$role = $logado ? $_SESSION['usuario_role'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Contratações</title>
</head>
<body>
    
    <header>
        <div>
            <img style="width: 200px;" src="img/gremio logo.svg">
        </div>
        
        <nav>
            <a href="../index.php">Voltar para home</a>

            <?php if ($role === 'adm'): ?>
                <a href="/View/contratacoes.php">Contratações</a>
                <a href="/View/nova-contratacao.html">Novo Contratação</a>
                <a href="/View/gerenciar-contratacao.php">Gerenciar Contratações</a>
            <?php endif; ?> 

        </nav>   
   
    </header>

    <main class="container">
    <h1 style="text-align: center;">Contratações</h1>

    <?php
        while ($dados_contratacoes = $rs_contratacoes->fetch(PDO::FETCH_ASSOC)) {

            $contratacao_nome = $dados_contratacoes["nome"];
            $contratacao_posicao = $dados_contratacoes["posicao"];
            $contratacao_time = $dados_contratacoes["time"];
            $contratacao_idade = $dados_contratacoes["idade"];
            $contratacao_nacionalidade = $dados_contratacoes["nacionalidade"];
            $contratacao_valor = $dados_contratacoes["valor"];
            $contratacao_img = $dados_contratacoes["img"];
            
            $template_contratacao = "
            <div  style='text-align: center;'  class='container'>
                <div style='width: 100%; height: 550;' class='card mb-4 rounded-3 shadow-sm'>
                    <div class='card-header py-3'>
                    <img src='img/contratacoes/$contratacao_img.jpg'> 
                    </div>
                    <div id='card-body' class='card-body'>
                        <h1 class='card-title pricing-card-title'> $contratacao_nome
                            <small class='text-body-secondary fw-light'>/ $contratacao_posicao</small>
                        </h1>
                        <ul class='list-unstyled mt-3 mb-4'>
                            <h6 style='color: gray;'>Ex Time: $contratacao_time</h6>
                            <h6 style='color: gray;'>Idade: $contratacao_idade</h6>
                            <h6 style='color: gray;'>Nacionalidade: $contratacao_nacionalidade</h6>
                            <h6 style='color: gray;'>Valor Pago: R$$contratacao_valor</h6>
                        </ul> 
                    </div>           
                </div>
            </div>
            ";

            echo $template_contratacao;
        }
        ?>
        
    </main>
</body>
</html>