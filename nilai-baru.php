<?php
	include_once 'header.php';
	if($_POST){
		include_once 'includes/nilai.inc.php';
		
		$eks = new Nilai($db);
		
		$eks->kt = $_POST['kt'];
		$eks->jm = $_POST['jm'];
		
		if($eks->insert()){
?>
	<div class="alert alert-succes alert-dismissble" role="alert">
		<button type = "button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<strong>berhasil tambah data</strong>Tambah lagi atau<a href="nilai.php">lihat semua data</a>.
	</div>
	<?php
		}
		
		else{
	?>
	<div class="alert alert-danger alert-dismissble" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<strong>Gagal tambah data</strong> Terjadi kesalahan, coba sekali lagi.
	</div>
	<?php
		}
	}
	?>
	
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8">
				<div class="page-header">
					<h5>Tmabah nilai prefrensi</h5>
				</div>
				
				<form method="post">
					<div class="form-group">
						<label for="kt">Keterangan nilai</label>
						<input type="text" class="form-control" id="kt" name="kt" required>
					</div>
					<div class="form-group">
						<label for="jm">Jumlah nilai</label>
						<input type="text" class="form-control" id="jm" name="jm" required>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="button" onclick="location.href='nilai.php'" class="btn btn-succes">kembali</button>
				</form>
				
			</div>
			
			
		</div>
		<?php
			include_once 'footer.php';
		?>