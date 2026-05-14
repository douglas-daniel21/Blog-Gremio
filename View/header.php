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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
    
    <title>BlogDoGrêmio</title>
</head>
<body>
    <header class="border-bottom lh-1 py-3">
        <div class="row">
        
            <div class="col-4 pt-1">           
                <img width="220px" src="../img/gremio logo.svg">
            </div>
    
            <div  class="col-4 text-center"> 
                <a class="blog-header-logo text-body-emphasis text-decoration-none"
                    href="#">BlogDoGrêmio</a> 
            </div>
            
            <div class="col-4 d-flex justify-content-end align-items-center">

                <div style="padding: 20px;">

                    <?php if (!$logado): ?>
                    
                    <a href="/View/login.html" class="btn-login" style="border-radius: 10px; color: white; display: inline-block;padding: 15px 25px;background-color: #007bff;">
                        Entrar</a>

                    <?php elseif ($role === 'adm'): ?>
                    <div class="btn-auth admin">Bem-vindo, Administrador!</div>
                    <a href="/../Model/logout.php">Sair</a>

                    <?php else: ?>
                    <div class="btn-auth user">Bem-vindo, Usuário!</div>
                    <a href="/../Model/logout.php">Sair</a>

                    <?php endif; ?>             
                </div>

            </div>
        </div>
    </header>
    <div>
        <nav style="padding-left: 50px;" class="nav nav-underline justify-content-between"> 
            <a style="color: white;" class="nav-item nav-link link-body-emphasis active" href="#">Tudo </a> 
            <a style="color: white;" class="nav-item nav-link link-body-emphasis" href="View/posts.php">Posts</a> 
            <a style="color: white;" class="nav-item nav-link link-body-emphasis" href="View/jogador.php">Jogadores</a> 
            <a style="color: white;" class="nav-item nav-link link-body-emphasis" href="View/contratacoes.php">Contratações</a> 
            <a style="color: white;" class="nav-item nav-link link-body-emphasis" href="View/trofeus.php">Troféus</a> 
            <hr>
        </nav>
    </div>
</body>
</html>