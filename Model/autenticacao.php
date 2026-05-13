<?php
session_start();

require(__DIR__ . "/../conectar_com_banco.php");

$email = $_POST['usuario_email'];
$senha = $_POST['usuario_senha'];

try {
    $sql = "SELECT email, senha, role
            FROM usuarios 
            WHERE email = :email";

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_email'] = $usuario['email'];
        $_SESSION['usuario_role'] = $usuario['role'];
        echo "<script>
            alert('Bem vindo ao Blog do Grêmio!');
            window.location.href = '../index.php'; // Redireciona após o OK
          </script>";
        
    } else {
        echo "Usuário ou senha incorretos.";
    }

} catch(PDOException $e) {
    echo "ERRO ao conectar: " . $e->getMessage();
}
?>