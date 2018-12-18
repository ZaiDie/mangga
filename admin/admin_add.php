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
					<li><a  href="../index.php" target="blank"> <strong> Go To Website </strong></a></li>
					<li><a href="index.php"><i class="fa fa-dashboard "></i>Beranda</a></li>
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
                        <h1 class="page-head-line">Tambah Admin</h1>
                    </div>
                </div>
                <a href="admin.php" class="btn btn-success">Data Admin</a>
				<hr>
                <div class="row">
                    <div class="col-md-6">
                  <?php
						if(isset($_POST['admin_add'])){
							$id_admin	= ($_POST['id_admin']);
							$username	= ($_POST['username']);
							$password	= ($_POST['password']);
							
							$cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin='$id_admin'");
							if(mysqli_num_rows($cek) == 0){
								if($password == $password){
									$insert = mysqli_query($koneksi, "INSERT INTO admin(id_admin, username, password)
														VALUES('$id_admin', '$username', '$password')") or die(mysqli_error());
									if($insert){
										echo '<div class="alert alert-success">Penambahan berhasil dilakukan.</div>';
									}else{
										echo '<div class="alert alert-danger">Penambahan gagal dilakukan, silahkan coba lagi.</div>';
									}
								}else{
									echo '<div class="alert alert-danger">Konfirmasi password tidak sesuai.</div>';
								}
							}else{
								echo '<div class="alert alert-danger">id_admin sudah terdaftar.</div>';
							}
						}
					?>
						<form class="form-horizontal" action="" method="post">
							<div class="form-group">
								<label class="col-sm-3 control-label">Id Admin</label>
								<div class="col-sm-3">
									<input type="text" name="id_admin" class="form-control" placeholder="id Admin" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">username</label>
								<div class="col-sm-4">
									<input type="text" name="username" class="form-control" placeholder="Username" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">password</label>
								<div class="col-sm-4">
									<input type="password" name="password" class="form-control" placeholder=" Password" required>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">&nbsp;</label>
								<div class="col-sm-6">
									<input type="submit" name="admin_add" class="btn btn-primary" value="TAMBAH">
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