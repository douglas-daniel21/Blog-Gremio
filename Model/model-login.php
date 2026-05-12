<?php
require (__DIR__."/../conector_com_banco.php");

$email = $_POST['usuario_email'];
$senha = $_POST['usuario_senha'];

try {
    $sql = "SELECT id, email,senha 
    FROM usuarios
    WHERE email = email";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if($usuario && password_verify($senha, $usuario['senha'])){

    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_email'] = $usuario['email'];

    echo "Login realizadocom sucesso! Bem-vindfo ". $usuario['email'];

    }  else {
        echo "Email ou senha incorretos.";
    }
} catch(PDOException $e) {
    echo "ERRO ao conectar: ". $e->getMessage();
}
?>