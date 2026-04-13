<?php
require "model-jogador.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <main>
        <div style="width: 380px; text-align: center;" 
        id="myCarousel" class="carousel slide mb-1" data-bs-ride="carousel">
        <div class="carousel-indicators"> 
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button> 
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button> 

        </div>

        <div class="carousel-inner">
            <div class="carousel-item active"> 
                <img style="width: 100%; height: 408px;" src="img/gremio-defensores.jpg">

                <div class="container">
                    <div class="carousel-caption text-start">
                    </div>
                </div>
            </div>

            <?php
            while ($dados_jogadores_def = $rs_jogadores_def->fetch(PDO::FETCH_ASSOC)) {
            
            // Pegamos os dados da linha e guardamos em variáveis...
            $def_nome = $dados_jogadores_def["nome"];
            $def_posicao = $dados_jogadores_def["posicao"];
            $def_img = $dados_jogadores_def["img"];
            
            //...usamos as variáveis para preencher o template
            $template_jogador_def = "
            <div class='carousel-item'> 
                <img style='width: 100%;' src='img/jogadores/$def_img.jpg'>
                <div class='container'>
                    <div class='carousel-caption text-start'>
                        <h4 style='color: white; background-color: darkgray; text-align: center; border-radius: 20px;'>$def_nome/$def_posicao</h4 style='color: white; background-color: darkgray; text-align: center; border-radius: 20px;'>
                    </div>
                </div>
            </div>
            ";
            
            //Escrevemos o HTML resultante (template + dados)
            echo $template_jogador_def;
            };
            ?>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev"> 
            <span style="background-color: gray; border-radius: 20px" class="carousel-control-prev-icon" aria-hidden="true"></span> 
            <span class="visually-hidden">Previous</span>
        </button> 
        <button  class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span style="background-color: gray; border-radius: 20px" class="carousel-control-next-icon" aria-hidden="true"></span> 
            <span class="visually-hidden">Next</span>
        </button>

    </div>
    </main>
    
</body>
</html>