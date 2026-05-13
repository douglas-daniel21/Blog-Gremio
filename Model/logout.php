<?php
session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

echo "<script>
alert('Você saiu da sua conta!');
window.location.href = '../index.php'; // Redireciona após o OK
</script>";

header("Location: /index.php");
exit;
?>