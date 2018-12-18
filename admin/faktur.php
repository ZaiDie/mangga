<?php
include("config/koneksi.php");
include("config/header.php");
include 'fungsi_paging.php';

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
                    <li><a class="active-menu" href="faktur.php"><i class="fa fa-bolt "></i>Data Fakta Aturan</a></li>
					<li><a href="admin.php"><i class="fa fa-code "></i>Data Admin</a></li>               
                </ul>
            </div>
        </nav>
		
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
			
			
			
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Fakta Aturan</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
					
						<?php
					if(isset($_GET['aksi']) == 'delete'){
						$id_faktur = $_GET['id_faktur'];
						$cek = mysqli_query($koneksi, "SELECT * FROM fakta_aturan WHERE id_faktur='$id_faktur'");
						if(mysqli_num_rows($cek) == 0){
							echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
						}else{
							$delete = mysqli_query($koneksi, "DELETE FROM fakta_aturan WHERE id_faktur='$id_faktur'");
							if($delete){
								echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
							}else{
								echo '<div class="alert alert-info">Data gagal dihapus.</div>';
							}
						}
					}
					?>
                   <a href="faktur_add.php" class="btn btn-danger">+ Tambah Data</a>
				   <hr>
				 <div class="table-responsive">
						<table class="table table-striped table-hover">
							<tr>
								<th>No</th>
								<th>Id Fakta Aturan</th>
								<th>Id Aturan</th>
								<th>Id Fakta</th>
								<th>Actions</th>
							</tr>
							<?php
							$p = new Paging();
							$batas = 10;
							$posisi = $p->cariPosisi($batas);
							
							$urut = '';
							if($urut){
								$sql = mysqli_query($koneksi, "SELECT * FROM fakta_aturan order by id_faktur desc limit $posisi,$batas");
							}else{
								$sql = mysqli_query($koneksi, "SELECT * FROM fakta_aturan limit $posisi,$batas");
							}
							$res = mysqli_query($koneksi,"SELECT * FROM fakta_aturan");
							$job = mysqli_query($koneksi,"SELECT * FROM fakta_aturan order by id_faktur");
							$rows = mysqli_num_rows($job);
							if(mysqli_num_rows($res) == 0){
								echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
							}else{
								$no = 1+$posisi;
								while($row = mysqli_fetch_assoc($sql)){
									echo '
									<tr>
										<td>'.$no.'</td>
										<td>'.$row['id_faktur'].'</td>
										<td>'.$row['id_aturan'].'</td>
										<td>'.$row['id_fakta'].'</td>
										
										<td>
											<a href="faktur_edit.php?id_faktur='.$row['id_faktur'].'" title="Rubah Data"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
											<a href="faktur.php?aksi=delete&id_faktur='.$row['id_faktur'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
										</td>
									</tr>
									';
									$no++;
								}
							}
							?>
						</table>
					</div>
					<?php}?>
						<?php
							$jumlahData = mysqli_num_rows($res);
							$jml_halaman = $p->jmlHalaman($jumlahData,$batas);
							$link = $p->linkHal(@$_GET['halaman'],$jml_halaman);
							echo"<center><br \>$link</center>";		
						?>
		
			
			
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