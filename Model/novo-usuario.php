<?php
require(__DIR__."/../conectar_com_banco.php");

$nome = $_POST['usuario_nome'];
$senha = $_POST['usuario_senha'];



try{

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "
    INSERT INTO usuarios (nome, senha)
    VALUES (:nome, :senha);
    ";

  

    $stmt = $conn->prepare($sql);

    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':senha', $senhaHash);

    if($stmt->execute()){
        $id = $conn->lastInsertId();
        echo "Usuario cadastrado com sucesso!";
    }
        
}catch(PDOException $e){
    echo "ERRO ao conectar: ". $e->getMessage();
} 


?>

<?php
require "../index.php";
?>