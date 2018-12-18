<?php
include("config/koneksi.php");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor Mangga</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-datepicker.css" rel="stylesheet">

      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.php">Bos Doctor Mangga 

                </a>
            </div>

            <div class="notifications-wrapper">
			<ul class="nav">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user-plus"></i> My Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../login/logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
        </nav>    
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
					<li><a href="berita.php"><i class="fa fa-dashboard "></i>Data Berita</a></li>
                    <li><a class="active-menu" href="fakta.php"><i class="fa fa-venus "></i>Data Fakta </a></li>
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
                        <h1 class="page-head-line">Edit fakta</h1>
                    </div>
                </div>
				<a href="fakta.php" class="btn btn-success">Data Fakta</a>
				<hr>
                <div class="row">
			
                    <div class="col-md-6">
            <?php
			$id_fakta = $_GET['id_fakta'];
			

			$sql = mysqli_query($koneksi, "SELECT * FROM fakta WHERE id_fakta='$id_fakta'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: fakta.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$fakta	= ($_POST['fakta']);
				$jenis	= ($_POST['jenis']);
				$info	= ($_POST['info']);
				$solusi	= ($_POST['solusi']);
				$gambar	= ($_POST['gambar']);

				$update = mysqli_query($koneksi, "UPDATE fakta SET fakta='$fakta', jenis='$jenis', info='$info', solusi='$solusi', gambar='$gambar'
													WHERE id_fakta='$id_fakta'") or die(mysqli_error());
				if($update){
					header("Location: fakta.php?id_fakta=".$id_fakta."&pesan=sukses");
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
					<label class="col-sm-3 control-label">ID fakta</label>
					<div class="col-sm-2">
						<input type="text" name="id_fakta" class="form-control" value="<?php echo $row['id_fakta']; ?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fakta</label>
					<div class="col-sm-8">
						<textarea type="text" name="fakta" class="form-control" required><?= $row['fakta']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Jenis</label>
					<div class="col-sm-8">
						<textarea type="text" name="jenis" class="form-control" required><?= $row['jenis']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Info Hama Penyakit</label>
					<div class="col-sm-8">
						<textarea type="text" name="info" class="form-control"><?= $row['info']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Solusi</label>
					<div class="col-sm-8">
						<textarea type="text" name="solusi" class="form-control" ><?= $row['solusi']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Gambar</label>
					<div class="col-sm-4">
					<img src="assets/img/<?= $row['gambar']; ?>" width="100"> <br> <input type="file" name="gambar">

					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
					<button type="submit" name="save" class="btn btn-default"><i class=" fa fa-refresh "></i> Update</button>
						<a href="fakta.php" class="btn btn-warning">BATAL</a>
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
<?php
include("config/koneksi.php");
?></body>
</html>