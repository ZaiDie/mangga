<?php 
include 'header.php';
include 'admin/config/koneksi.php';


?>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<?php
						$id_berita = $_GET['id'];
							$berita = mysqli_query($koneksi, "select * from berita where id_berita='$id_berita'");
							while($data=mysqli_fetch_array($berita)){
								$judul = $data['judul'];
								$isi = $data['isi'];
								$gambar_berita = $data['gambar_berita'];
								$tanggal = $data ['tanggal'];
							}
					?>
					
					<h2 class="section-heading"><?= $judul; ?></h2>
					<div class="post-preview">
									<p class="post-meta">diposting pada <?= $tanggal; ?></p>
								</div>
					<a>			
						<?php if($data['gambar_berita']!="") ?>
						<img src="assets/img/<?= $gambar_berita; ?>" class="img-responsive">
					</a>
					<p align="justify"><?= $isi; ?> </p>
				
								
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="index.php">&larr; Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>
<?php include 'footer.php';?>
    
