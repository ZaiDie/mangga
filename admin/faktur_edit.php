<?php
include("config/header.php");
include("config/koneksi.php");
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
                    <li><a href="berita.php"><i class="fa fa-dashboard "></i>Data Berita</a></li>
                    <li><a href="fakta.php"><i class="fa fa-venus "></i>Data Fakta </a></li>
					<li><a href="aturan.php"><i class="fa fa-dashcube "></i>Data Aturan</a></li>
                    <li><a class="active-menu" href="faktur.php"><i class="fa fa-bolt "></i>Data Fakta aturan</a></li>
					<li><a href="admin.php"><i class="fa fa-code "></i>Data Admin</a></li>               
                </ul>
            </div>
        </nav>
		
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
			
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Fakta Aturan</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                <?php
			$id_faktur = $_GET['id_faktur'];

			$sql = mysqli_query($koneksi, "SELECT * FROM fakta_aturan WHERE id_faktur='$id_faktur'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: faktur.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$id_aturan	= ($_POST['id_aturan']);
				$id_fakta	= ($_POST['id_fakta']);
				$update = mysqli_query($koneksi, "UPDATE fakta_aturan SET id_aturan='$id_aturan', id_fakta='$id_fakta'
													WHERE id_faktur='$id_faktur'") or die(mysqli_error());
				if($update){
					header("Location: faktur_edit.php?id_faktur=".$id_faktur."&pesan=sukses");
					echo'<div class="alert alert-success">Penambahan berhasil dilakukan.</div>';
				}else{
					echo '<div class="alert alert-danger">Data gagal disimpan, silahkan coba lagi.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success">Data berhasil disimpan.</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-4 control-label">Id faktur</label>
					<div class="col-sm-4">
						<input type="text" name="id_faktur" class="form-control" value="<?php echo $row['id_faktur']; ?>"disabled>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Aturan</label>
					<div class="col-sm-8">
						<input type="text" name="id_aturan" class="form-control" value="<?php echo $row['id_aturan']; ?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Aturan</label>
					<div class="col-sm-3">
						<select class="form-control" name="id_aturan">
						<?php
							$cek = mysqli_query($koneksi, "SELECT * FROM aturan ");
							while($row = mysqli_fetch_assoc($cek)){
						?>
							<option><?php echo $row['id_aturan']?></option>					
						<?php } ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Fakta</label>
					<div class="col-sm-8">
						<input type="text" name="id_fakta" class="form-control" value="<?php echo $row['id_fakta']; ?>" disabled>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Fakta</label>
					<div class="col-sm-3">
						<select class="form-control" name="id_fakta">
						<?php
							$cek = mysqli_query($koneksi, "SELECT * FROM fakta ");
							while($row = mysqli_fetch_assoc($cek)){
						?>
							<option><?php echo $row['id_fakta']?></option>					
						<?php } ?>
						</select>
					</div>
				</div>
						
				<div class="form-group">
					<label class="col-sm-4 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-primary" value="SIMPAN">
						<a href="faktur.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
				
			</form>
				
				
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
<?php
   include("config/footer.php");
?>