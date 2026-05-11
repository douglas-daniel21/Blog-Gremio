<?php
// 1. Inicia a sessão para ter acesso a ela
session_start();

// 2. Limpa todas as variáveis da sessão
$_SESSION = array();

// 3. Se desejar matar a sessão completamente, apague também o cookie de sessão.
// Nota: Isso destrói a conexão entre o navegador e o servidor.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// 4. Destrói a sessão no servidor
session_destroy();

echo "<script>
alert('Você saiu da sua conta!');
window.location.href = '../index.php'; // Redireciona após o OK
</script>";

// 5. Redireciona o usuário para a página de login ou home
header("Location: /index.php");
exit;
?>