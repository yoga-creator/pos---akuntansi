<?php
require "config/database.php"; require "config/auth.php"; login_required();
$user=$_SESSION['user'];
$page=$_GET['page']??'dashboard';
$allowed=['dashboard','barang','supplier','penjualan','pembelian','laporan','keuangan'];
if(!in_array($page,$allowed))$page='dashboard';
function rupiah($n){return 'Rp '.number_format($n,0,',','.');}
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>POS & Akuntansi</title><link rel="stylesheet" href="assets/style.css"></head>
<body><div class="app"><aside class="sidebar"><div class="brand">🛒 POS & Akuntansi</div><nav class="nav">
<a href="?page=dashboard">🏠 Dashboard</a><a href="?page=barang">📦 Data Barang</a><a href="?page=supplier">🚚 Supplier</a><a href="?page=penjualan">🛍️ Penjualan</a><a href="?page=pembelian">📥 Pembelian</a><a href="?page=laporan">📊 Laporan</a><a href="?page=keuangan">💰 Keuangan</a><a href="logout.php">🚪 Logout</a>
</nav></aside><main class="main"><div class="topbar"><div><h2><?=ucfirst($page)?></h2><div class="muted">Sistem POS & Akuntansi Toko</div></div><div class="user">👤 <?=h($user['nama'])?> · <?=h($user['role'])?></div></div>
<?php include __DIR__."/pages/{$page}.php"; ?>
</main></div></body></html>