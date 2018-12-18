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
                    <li><a href="fakta.php"><i class="fa fa-venus "></i>Data fakta </a></li>
					<li><a class="active-menu" href="aturan.php"><i class="fa fa-dashcube "></i>Data Aturan</a></li>
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
                        <h1 class="page-head-line">Tambah Aturan</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                  <?php
			if(isset($_POST['aturan_add'])){
				$id_aturan	= ($_POST['id_aturan']);
				$id_fakta = ($_POST['id_fakta']);
			
					$insert = mysqli_query($koneksi, "INSERT INTO aturan (id_aturan,  id_fakta)
											VALUES('$id_aturan', '$id_fakta')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success">Penambahan berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">Penambahan gagal dilakukan, silahkan coba lagi.</div>';
						}
				
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Aturan</label>
					<div class="col-sm-3">
						<input type="text" name="id_aturan" class="form-control" placeholder="id_aturan" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">fakta</label>
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
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="aturan_add" class="btn btn-primary" value="TAMBAH">
						<a href="aturan.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
				
				
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
       <?php
	include ("config/footer.php");
?>