<?php
include("config/koneksi.php");
include("config/header.php");

?>

        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/4.jpg" class="img-circle" />
                        </div>
					</li>
					<li><a href="web/index.php" target="blank"> <strong> Go To Website </strong></a></li>
					<li><a href="index.php"><i class="fa fa-dashboard "></i>Beranda</a></li>
					<li><a href="berita.php"><i class="fa fa-dashboard "></i>Data Berita</a></li>
                    <li><a class="active-menu" href="fakta.php"><i class="fa fa-venus "></i>Data Fakta </a></li>
					<li><a href="aturan.php"><i class="fa fa-dashcube "></i>Data Aturan</a></li>
                    <li><a href="faktur.php"><i class="fa fa-bolt "></i>Data Fakta Aturan</a></li>
					<li><a href="admin.php"><i class="fa fa-code "></i>Data Admin</a></li>                
                </ul>
            </div>
        </nav>
		
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
			
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Tambah Fakta</h1>
                    </div>
                </div>
                <a href="fakta.php" class="btn btn-success">Data Fakta</a>
				<hr>
                <div class="row">
                    <div class="col-md-6">
                  <?php
			if(isset($_POST['fakta_add'])){
				$id_fakta	= ($_POST['id_fakta']);
				$fakta	= ($_POST['fakta']);
				$jenis	= ($_POST['jenis']);
				$info	= ($_POST['info']);
				$solusi	= ($_POST['solusi']);
				$gambar	= ($_POST['gambar']);

					$insert = mysqli_query($koneksi, "INSERT INTO fakta(id_fakta, fakta,jenis, info, solusi, gambar)
											VALUES('$id_fakta', '$fakta','$jenis','$info','$solusi','$gambar')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success">Penambahan berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">Penambahan gagal dilakukan, silahkan coba lagi.</div>';
						}
				
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Id fakta</label>
					<div class="col-sm-3">
						<input type="text" name="id_fakta" class="form-control" placeholder="id_fakta" required>
					</div>
				</div>
			
				<div class="form-group">
					<label class="col-sm-3 control-label">Fakta</label>
					<div class="col-sm-9">
						<textarea type="text" name="fakta" class="form-control" placeholder="fakta" required></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Jenis fakta</label>
					<div class="col-sm-9">
						<textarea type="text" name="jenis" class="form-control" placeholder="jenis" required></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Info Hama Penyakit</label>
					<div class="col-sm-3">
						<textarea name="info" class="form-control" placeholder="Info" ></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Solusi</label>
					<div class="col-sm-3">
						<textarea name="solusi" class="form-control" placeholder="Solusi" ></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Gambar </label>
						<input class="col-sm-9" type="file" name="gambar"  placeholder="gambar" required>
				</div>				
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="fakta_add" class="btn btn-primary" value="TAMBAH">
						<a href="fakta.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
				
				
                    </div>
                </div>

            </div>
		</div>
	</div>

            <!-- /. PAGE INNER  -->
<?php
include("config/footer.php");
?>