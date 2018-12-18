<?php 
include 'header.php';
include 'admin/config/koneksi.php';
?>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                        <div class="panel-body">
                            <ul class="nav"> 
                                <li class="active"><a href="#home" data-toggle="tab">
                                <center><h2>Menu Diagnosa</h2></center></a>
                                <br>
                                </li>
                            </ul>
 							<div class="alert alert-info"><center> Silahan Pilih Gejala yang Sesuai dengan Tanaman Mangga anda 
 							</center>
 							</div>
                            
                             <div class="tab-content">
								
                                <div class="tab-pane fade active in" id="home">	
								<form action="hasildiagnosa.php" method="post" id="main-form"> 
 								 <?php
										$cek = mysqli_query($koneksi, "select * from fakta where jenis='Gejala' ");
										$no=1;
										while($data=mysqli_fetch_array($cek)){
											$id = $data['id_fakta'];
											$fakta = $data['fakta'];
											
									?>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="gejala[]" value="<?php echo $data['id_fakta']; ?>"/>
												<?=$data['fakta'];
												$no++;
											?>
											</label>
										</div>
									
									<?php
									}
									?>
							<br>
							<input type="submit" name="submit" value="Proses " class="btn btn-info"> 
							<hr>
							<div class="alert alert-danger"><center> Silahan Pilih Gejala yang Sesuai dengan Tanaman Mangga anda 
							</center>
 							</div>
							
							
							<br>
</form> 
								</div>	
																
                            </div>
                        </div>
		</div>
    </div>
</div>

 <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-google fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Doctor Mangga <?php echo date('Y')?></p>

                    <div class="go2top">
                        <i class="icon-arrow-up"></i>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>
   
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#main-form').submit(function()
        {
            var is_ada = false;
            $('[type="checkbox"]').each(function()
            { 
                if ($(this).is(':checked')) is_ada = true;
            })
            if(!is_ada) 
            {
                alert('Harap centang dulu');
                return false;
            }

        })

    </script>>

    <!-- Custom Theme JavaScript -->
    <!--script src="assets/js/clean-blog.min.js"></script-->
