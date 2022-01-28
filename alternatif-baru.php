<?php
	include_once 'header.php';
	if($_POST){
		include_once 'includes/alternatif.inc.php';
		
		$eks = new Alternatif($db);
		
		$eks->kt = $_POST['kt'];
		if($eks->insert()){
?>
	<div class="alert alert-succes alert-dismissible" role="alert">
		<button type="button" class="close" data-dissmis="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<strong>Berhasil tambah data!</strong> Tambah lagi atau <a href="alternatif.php">
			lihat semua data
		</a>
	</div>
	<?php
		}
		else{
	?>
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dissmis="alert" aria-label="Close">
			<strong>Gagal tambah data</strong> terjadi kesalahan, coba lagi
		</button>
	</div>
	<?php
		}
	}
	?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8">
			<div class="page-header">
				<h5>Tambah alternatif</h5>
			</div>
			
			<form method="post">
				<div class="form-group">
					<label for="kt">Nama alternatif</label>
					<input type="text" class="form-control" id="kt" name="kt" required>
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
				<button type="button" onclick="location.href='alternatif.php'" class="btn btn-succes">Kembali</button>
			</form>
		</div>
	</div>
	<?php
		include_once 'footer.php';
	?>