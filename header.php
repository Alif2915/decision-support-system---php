<?php
	include "includes/config.php";
	session_start();
	if(!isset($_SESSION['nama_lengkap'])){
		echo "<script>location.href='login.php'</script>";
	}
	$config = new Config();
	$db = $config->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administrasi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">SAW</a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="nilai.php">Nilai</a></li>
						<li><a href="kriteria.php">Kriteria</a></li>
						<li><a href="alternatif.php">Alternatif</a></li>
						<li><a href="ranking.php">Ranking</a></li>
						<li><a href="laporan.php">Laporan</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="profil.php"><?php echo $_SESSION['nama_lengkap']?></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></a>
							<ul class="dropdown-menu">
								<li><a href="profil.php">Profil</a></li>
								<li><a href="user.php">Manejer pengguna</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	
	<div class="container">