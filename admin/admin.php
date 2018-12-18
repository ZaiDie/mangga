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
					<li><a href="berita.php"><i class="fa fa-dashboard "></i>Data Berita</a></li>
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
                        <h1 class="page-head-line">Data Admin</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
					
				<?php
			if(isset($_GET['aksi']) == 'delete'){
				$id_admin = $_GET['id_admin'];
				$cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin='$id_admin'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin='$id_admin'");
					if($delete){
						echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-info">Data gagal dihapus.</div>';
					}
				}
			}
			?>
                   <a href="admin_add.php" class="btn btn-danger">+ Tambah Data</a>
				   <hr>
				 <div class="table-responsive">
						<table class="table table-striped table-hover">
							<tr>
								<th>No</th>
								<th>Id Admin</th>
								<th>Username</th>
								<th>Actions</th>
							</tr>
							<?php
							$urut = '';
							if($urut){
								$sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE status='$urut' ORDER BY id_admin Desc");
							}else{
								$sql = mysqli_query($koneksi, "SELECT * FROM admin ORDER BY id_admin Desc");
							}
							if(mysqli_num_rows($sql) == 0){
								echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
							}else{
								$no = 1;
								while($row = mysqli_fetch_assoc($sql)){
									echo '
									<tr>
										<td>'.$no.'</td>
										<td>'.$row['id_admin'].'</td>
										<td>'.$row['username'].'</td>
										<td>
											<a href="admin_edit.php?id_admin='.$row['id_admin'].'" title="Rubah Data">
											<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
											<a href="admin.php?aksi=delete&id_admin='.$row['id_admin'].'" title="Hapus Data" 
											onclick="return confirm(\'Yakin?\')">
											<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
										</td>
									</tr>
									';
									$no++;
								}
							}
							?>
						</table>
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
