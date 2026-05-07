<?php
require(__DIR__."/../conectar_com_banco.php");

$email = $_POST['usuario_email'];
$senha = $_POST['usuario_senha'];

try{

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "
    INSERT INTO usuarios (email, senha)
    VALUES (:email, :senha);
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senhaHash);

    if($stmt->execute()){
        $id = $conn->lastInsertId();
    }
        
}catch(PDOException $e){
    echo "ERRO ao conectar: ". $e->getMessage();
}
?>

<?php
require __DIR__."/../index.php";
?>