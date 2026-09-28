<?php
require "config/database.php";
require "config/auth.php";
if (!empty($_SESSION['user'])) { header("Location: index.php"); exit; }
$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = trim($_POST['username'] ?? '');
    $p = $_POST['password'] ?? '';
    $st = $pdo->prepare("SELECT * FROM users WHERE username=? AND password=SHA2(?,256)");
    $st->execute([$u,$p]);
    $user = $st->fetch();
    if ($user) {
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit;
    }
    $error = "Username atau password salah.";
}
?>
<!doctype html><html lang="id"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Login - POS Akuntansi</title><link rel="stylesheet" href="assets/style.css"></head>
<body class="login-page"><div class="login-card">
<div class="logo">POS</div><h1>POS & Akuntansi</h1><p class="muted">Sistem Pengelolaan Toko</p>
<?php if($error): ?><div class="alert danger"><?=h($error)?></div><?php endif; ?>
<form method="post"><label>Username</label><input name="username" required placeholder="admin">
<label>Password</label><input type="password" name="password" required placeholder="admin123">
<button class="btn primary full">Masuk</button></form>
<div class="hint">Demo: <b>admin / admin123</b> atau <b>kasir / kasir123</b></div>
</div></body></html>