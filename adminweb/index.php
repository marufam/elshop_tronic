<?php
	error_reporting(0);
	session_start();
	include "koneksi.php";
	include "buatkode.php";
	include "pagging.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<a class="navbar-brand" href="index.php">Home</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="../index.php" target="_blank">Tampilan Utama</a></li>
			<li><a href="logout.php">Logout</a></li>

		</ul>
	</div><!-- /.navbar-collapse -->
</nav>
<!--<div class="container">-->
<!--	<div class="row breadcrumb">-->
<!--		<img src="banner.png" class="img-responsive ">-->
<!--	</div>-->
<!--</div>-->
<div class="container">
	<div class="row">
		<div class="col-md-3">
            <div class="list-group">
				<a class="list-group-item active">Management Website </a>
				<a class="list-group-item" href="?page=informasi">Informasi </a>
				<a class="list-group-item" href="?page=slider">Slider </a>
				<a class="list-group-item" href="?page=berita">Berita </a>
				<a class="list-group-item" href="?page=komentar">Komentar </a>
				<a class="list-group-item" href="?page=gbook">Guest Book </a>
				<a class="list-group-item" href="?page=contact">Contact </a>
				<a class="list-group-item" href="?page=pengguna">Pengguna </a>
				<a class="list-group-item" href="?page=admin">Ganti Password </a><br>

				<a class="list-group-item active">Management Transaksi </a>
				<a class="list-group-item" href="?page=pelanggan">Pelanggan </a>
				<a class="list-group-item" href="?page=kategori">Kategori </a>
                <a class="list-group-item" href="?page=produk">Produk </a>
                <a class="list-group-item" href="?page=penjualan">Pemesanan</a>

            </div>
        </div>
        <div class="col-md-9">
			<ol class="breadcrumb">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="active"><?php if(isset($_GET['page'])){ echo $_GET['page']; } ?></li>
			</ol>
            <div class="row">
				<div class="container-fluid">
                <?php include "content.php";    ?>
				</div>
            </div>
        </div>
	</div>
</div>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>