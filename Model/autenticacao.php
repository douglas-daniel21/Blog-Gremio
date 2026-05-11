<?php
session_start(); // Inicia a sessão para "lembrar" o usuário logado

require(__DIR__ . "/../conectar_com_banco.php");

$email = $_POST['usuario_email'];
$senha = $_POST['usuario_senha'];

try {
    // 1. Buscamos o usuário pelo email
    $sql = "SELECT email, senha, role
            FROM usuarios 
            WHERE email = :email";

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // 2. Verificamos se o usuário existe e se a senha bate com o hash
    if ($usuario && password_verify($senha, $usuario['senha'])) {
        // Sucesso! Salvamos os dados na sessão
        // $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_email'] = $usuario['email'];
        $_SESSION['usuario_role'] = $usuario['role'];
        echo "<script>
            alert('Bem vindo!');
            window.location.href = '../index.php'; // Redireciona após o OK
          </script>";
        // Aqui você pode redirecionar: header("Location: painel.php");
        
    } else {
        // Se o email não existir ou a senha estiver errada
        echo "Usuário ou senha incorretos.";
    }

} catch(PDOException $e) {
    echo "ERRO ao conectar: " . $e->getMessage();
}
?>