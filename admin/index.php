<?php 
include '../admin/config/header.php';
?>
<nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li><div class="user-img-div">
                            <img src="assets/img/4.jpg" class="img-circle" />
                        </div>
                    </li>
					<li><a href="../index.php" target="blank"> <strong> Go To Website </strong></a></li>
					<li><a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Beranda</a></li>
					<li><a href="berita.php"><i class="fa fa-dashboard "></i>Data Berita</a></li>
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
                        <h1 class="page-head-line">Selamat Datang </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                             Halaman website ini berfungsi untuk mengelola, menambah, mengedit dan menghapus  data mengenai tanaman mangga,
							 <strong><a  href="../about.php" target="_blank">About Website</a></strong>
							 seperti Data Berita, Data Fakta, Data Aturan, Data Fakta Aturan dan Data Admin.
                            <br /><br />
							Terima Kasih
							<br />
                            <strong><a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap.Com</a></strong> 
                        </div>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->

<?php
include 'config/footer.php';
?>