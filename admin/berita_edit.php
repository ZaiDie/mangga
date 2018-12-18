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
					<li><a href="../index.php"> <strong> Go To Website </strong></a></li>
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
                        <h1 class="page-head-line">Edit Berita</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                <?php
			$id_berita = $_GET['id_berita'];
			$sql = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id_berita'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: berita.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$judul	= ($_POST['judul']);
				$isi	= ($_POST['isi']);
				$gambar_berita	= ($_POST['gambar_berita']);
				
				$update = mysqli_query($koneksi, "UPDATE berita SET judul='$judul', isi='$isi', gambar_berita='$gambar_berita' WHERE id_berita='$id_berita'") or die(mysqli_error());
				if($update){
					header("Location: berita.php?id_berita=".$id_berita."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger">Data gagal di update, silahkan coba lagi.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success">Data berhasil di update.</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Berita</label>
					<div class="col-sm-3">
						<input type="text" name="id_berita" class="form-control" value="<?php echo $row['id_berita']; ?>" placeholder="ID berita" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">judul Berita</label>
					<div class="col-sm-9">
						<input type="text" name="judul" class="form-control" value="<?php echo $row['judul']; ?>" placeholder="judul berita" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">isi Berita</label>
					<div class="col-sm-9">
						<textarea type="text" name="isi" class="form-control" ><?= $row['isi']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Gambar</label>
					<div class="col-sm-4">
					<img src="../assets/img/<?= $row['gambar_berita']; ?>" width="100"> <br> <input type="file" name="gambar_berita">

					</div>
				</div>
				
				
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
					<button type="submit" name="save" class="btn btn-default"><i class=" fa fa-refresh "></i> Update</button>
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