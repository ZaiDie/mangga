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
					<li><a href="berita.php"><i class="fa fa-dashboard "></i>Berita</a></li>
					<li><a href="fakta.php"><i class="fa fa-venus "></i>Data Fakta </a></li>
					<li><a href="aturan.php"><i class="fa fa-dashcube "></i>Data Aturan</a></li>
                    <li><a href="faktur.php"><i class="fa fa-bolt "></i>Data Fakta Aturan</a></li>
					<li><a class="active-menu" href="admin.php"><i class="fa fa-code "></i>Data Admin</a></li>                
                </ul>
            </div>
        </nav>
		
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
			
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Admin</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
					<?php
						$id_admin = $_GET['id_admin'];
						$sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin='$id_admin'");
						if(mysqli_num_rows($sql) == 0){
							header("Location: admin.php");
						}else{
							$row = mysqli_fetch_assoc($sql);
						}
						if(isset($_POST['save'])){
							$username		= ($_POST['username']);
							$password		= ($_POST['password']);
							
							$update = mysqli_query($koneksi, "UPDATE admin SET username='$username', password='$password' 
																WHERE id_admin='$id_admin'") or die(mysqli_error());
							if($update){
								header("Location: admin_edit.php?id_admin=".$id_admin."&pesan=sukses");
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
								<label class="col-sm-3 control-label">Id Admin</label>
								<div class="col-sm-2">
									<input type="text" name="id_admin" class="form-control" value="<?php echo $row['id_admin']; ?>" disabled>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">username</label>
								<div class="col-sm-4">
									<input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">password</label>
								<div class="col-sm-4">
									<input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">&nbsp;</label>
								<div class="col-sm-6">
									<input type="submit" name="save" class="btn btn-primary" value="SIMPAN">
									<a href="admin.php" class="btn btn-warning">BATAL</a>
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
	include ("config/footer.php");
?>
