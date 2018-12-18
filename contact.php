<?php 
include 'header.php';
include 'admin/config/koneksi.php';
?>
   
    <!-- Main Content -->
    <div class="container">
        <div   class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			
			
			<?php
				if(isset($_POST['contact'])){
					$ID_EMAIL	=($_POST['ID_EMAIL']);
					$PENGIRIM	= ($_POST['PENGIRIM']);
					$EMAIL_PENGIRIM	= ($_POST['EMAIL_PENGIRIM']);
					$NOMOR_HP	= ($_POST['NOMOR_HP']);
					$ISI_EMAIL	= ($_POST['ISI_EMAIL']);
					$TANGGAL	= date("c");
					
				
				$cek = mysqli_query($koneksi, "SELECT * FROM email WHERE ID_EMAIL='$ID_EMAIL'");
				if(mysqli_num_rows($cek) == 0){
					$insert = mysqli_query($koneksi, "INSERT INTO email( ID_EMAIL, PENGIRIM,EMAIL_PENGIRIM,NOMOR_HP, ISI_EMAIL,TANGGAL )
											VALUES( '$ID_EMAIL','$PENGIRIM', '$EMAIL_PENGIRIM', '$NOMOR_HP','$ISI_EMAIL','$TANGGAL')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success">Email Anda Sudah Terkirim, tunggu balasan kami</div>';
						}else{
							echo '<div class="alert alert-danger">Email gagal dikirim, silahkan coba lagi.</div>';
						}
				}
			}
			?>
			
                <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
				<!--
			  <form class="form-horizontal" action="" method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" name="pengirim" class="form-control" placeholder="Name" required>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" name="email_pengirim" class="form-control" placeholder="Email Address"required >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" name="nomor_hp" class="form-control" placeholder="Phone Number"required>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" name="isi_email" class="form-control" placeholder="Message"required ></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>

					<div class="form-group">
                        <div class="form-group col-xs-12">
                            <button type="submit" name="contact" class="btn btn-default">Send</button>
       						<a href="contact.php" class="btn btn-warning">BATAL</a>

						</div>
                    </div>
                </form>
				<hr>
				-->
				<section id="contact" class="map">
					<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9383.24347636094!2d112.49843852088078!3d-6.963506472828532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTgnMDguNCJTIDExMsKwMjknNDkuMSJF!5e0!3m2!1sen!2sid!4v1478593727953"></iframe>					
<br />
					<small>
<a href="https://goo.gl/maps/sMoVw9QC6N62"></a>
					</small>
					</iframe>
				</section>		
<hr>				
           <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Alamat Kami :</strong>
                    </h4>
                    <p>Jl. Raya Gedangan No. 09
                        <br>Sidayu Gresik Jawa Timur Indonesia
						<!--
						<br>Buka Maps di link berikut -6.969005, 112.496974<a target="blank" 
						href="https://www.google.co.id/maps/place/6%C2%B058'08.5%22S+112%C2%B029'49.
						1%22E/@-6.969025,112.4963918,208m/data=!3m2!1e3!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-6.
						969025!4d112.496963?hl=id">Home Doctor Mangga </a>
						-->
						
						</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:doctor.mangga@gmail.com">doctor.mangga@gmail.com</a>
                        </li>
                    </ul>
                    <br>
			</div>
			<hr>
			</div>
        </div>
    </div>

<?php include 'footer.php';?>

<script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>
