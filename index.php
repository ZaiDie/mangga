<?php 
include 'header.php';
include 'admin/config/koneksi.php';
include 'fungsi_paging.php';
?>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			
						<?php
							$p = new Paging();
							$batas = 5;
							$posisi = $p->cariPosisi($batas);
							
							$berita = mysqli_query($koneksi,"SELECT * FROM berita order by tanggal desc limit $posisi,$batas");
							$res = mysqli_query($koneksi,"SELECT * FROM berita");
							$set = mysqli_query($koneksi,"SELECT * FROM berita order by tanggal");
							$rows = mysqli_num_rows($set);
							if(mysqli_num_rows($res)){
							while($data=mysqli_fetch_array($berita)){
								$isi = substr($data['isi'],0,250);
								$isi = substr($data['isi'],0,strrpos($isi," "));
							$idse = $data['id_berita'];
							
						?>
				<div class="col-sm-3 loc_1">
			    	<a href=""><?php if($data['gambar_berita']!="") ?>
					<img src="assets/img//<?= $data['gambar_berita']; ?>" class="img-responsive" /></a>
			    </div>
						<div class="col-sm-9">
							<div class="post-preview">
							<a href='berita_detail.php?id=<?=$idse?>'>
								<h3 class="post-title">
									<?= $data['judul']; ?> 
								</h3>
							</a>
								<div class="post-preview">
									<p class="post-meta">diposting pada <?= $data['tanggal']; ?></p>
								</div>
							</div>
						</div>
					<p align="justify">
						<span class="m_2"><?= $isi; ?> ...</span>
						<br>
			    	 <a href="berita_detail.php?id=<?=$idse?>" >
					 <span class="icon_text">Lihat selengkapnya</span>
					 </a>
					</p>		
						<hr>		
						
						<?php 
							} //tutup while
						?>
				 
                <!-- Pager -->
                <ul class="pager">
                    <li class="center">
					<?php
						$jumlahData = mysqli_num_rows($res);
						$jml_halaman = $p->jmlHalaman($jumlahData,$batas);
						$link = $p->linkHal(@$_GET['halaman'],$jml_halaman);
				
						echo"<center><br \>$link</center>";
					}
					?>
					
                    </li>
                </ul>
            </div>			
        </div>
		
    </div>

    <hr>
<?php include 'footer.php';?>