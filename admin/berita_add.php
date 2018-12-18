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
					<li><a href="../index.php" target="blank"> <strong> Go To Website </strong></a></li>
					<li><a href="index.php"><i class="fa fa-dashboard "></i>Beranda</a></li>
					<li><a class="active-menu" href="berita.php"><i class="fa fa-dashboard "></i>Data Berita</a></li>
					<li><a href="fakta.php"><i class="fa fa-bolt "></i>Data Fakta</a></li>
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
                        <h1 class="page-head-line">Tambah Berita</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
     				<a href="berita.php" class="btn btn-success">Data Berita</a></td>
	<hr>
                  <?php
						if(isset($_POST['berita_add'])){
							$id_berita	= ($_POST['id_berita']);
							$judul	= ($_POST['judul']);
							$isi	= ($_POST['isi']);
							$gambar_berita	= ($_POST['gambar_berita']);
							$tanggal	= date("c");
							
							
							$cek = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id_berita'");
							if(mysqli_num_rows($cek) == 0){
								$insert = mysqli_query($koneksi, "INSERT INTO berita(id_berita, judul, isi, gambar_berita, tanggal )
														VALUES('$id_berita', '$judul', '$isi', '$gambar_berita','$tanggal')") or die(mysqli_error());
									if($insert){
										echo '<div class="alert alert-success">Penambahan berhasil dilakukan.</div>';
									}else{
										echo '<div class="alert alert-danger">Penambahan gagal dilakukan, silahkan coba lagi.</div>';
						}
				}
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">id berita</label>
					<div class="col-sm-3">
						<input type="text" name="id_berita" class="form-control" placeholder="id berita" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">judul</label>
					<div class="col-sm-9">
						<input type="text" name="judul" class="form-control" placeholder="judul" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">isi</label>
					<div class="col-sm-9">
						<textarea type="text" name="isi" class="form-control" placeholder="isi berita" required></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Gambar </label>
						<input class="col-sm-9" type="file" name="gambar_berita"  placeholder="gambar" required>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<button type="submit" name="berita_add" class="btn btn-primary"><i class="fa fa-pencil"></i> Tambah</button>
						<a href="berita.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
				
				
                    </form>
				</div>
              </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
  <?php
		include("config/footer.php");
?>