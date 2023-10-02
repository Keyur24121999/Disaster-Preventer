<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<title>Disaster Preventor</title>
		<?php include_once("topscripts.php"); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			
</head>
<body>
	
		<!-- Mp Color -->
		<!-- <div class="mp-color">
			<div class="icon inOut"><i class="fa fa-cog fa-spin"></i></div>
			<h4>Choose Color</h4>
			<span class="color1"></span>
			<span class="color2"></span>
			<span class="color3"></span>
			<span class="color4"></span>
			<span class="color5"></span>
			<span class="color6"></span>
			<span class="color7"></span>
			<span class="color8"></span>
		</div> -->
		<!--/ End Mp Color -->
	
		<?php include_once("header.php"); ?>
		
		<!-- Start Breadcrumbs -->
		<!-- <section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Contact Pages</h2>
						<ul class="bread-list">
							<li><a href="index-2.html">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section> -->
		<!--/ End Breadcrumbs -->
		
		<!-- Contact Us -->
		<section id="contact" class="contact section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2><span>Forgot </span> Password</h2>
							<p></p>
						</div>
					</div>
				</div>
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="contact-map">
								<!-- Map -->
								<div id="map"></div>
								<!--/ End Map -->
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-head">
								<!-- Form -->
								<form class="form" action="<?php echo site_url('user/User/ChangePassword'); ?>" method="post">
									<div class="form-group">
										<!-- <span><small id="result" style="color: red;"></small></span> -->
										<input name="txtEmail" id="txtEmail" type="text" placeholder="Enter Registered Email" required="">
									</div>
									<div class="form-group" align="center">
										<div class="button">
								    		<button type="button" class="btn primary" id="btnotp">Get OTP</button>
								    	</div>
								    </div>
								    <!-- <button type="button" class="btn primary" id="btnotp">Get OTP</button> -->
								    <div class="form-group">
								    	<label class="form-control" id="txtOTP" hidden=""></label>
								    </div>
								    <div class="form-group">
										<!-- <span><small id="result" style="color: red;"></small></span> -->
										<input name="OTP" id="OTP" type="text" placeholder="Enter OTP" required="">
									</div>
								    <div class="form-group">
										<!-- <span><small id="result" style="color: red;"></small></span> -->
										<input name="txtNewPwd" id="txtNewPwd" type="text" placeholder="Enter New Password" required="">
									</div>
									<div class="form-group">
										<input name="txtConPwd" type="txtConPwd" placeholder="Confirm Password" required="">
									</div>
									<div class="form-group">
										<p style="color: red;">
											<?php
												if (isset($loginErr)) 
												{
													echo $loginErr;		
												}
											?>
										</p>
									</div>
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn primary" id="btnsubmit">
												Change
											</button>
										</div>
									</div>
									<div class="form-group">
										<a href="<?php echo site_url('user/User'); ?>">Already have an Account ?</a>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<!--/ End Contact Us -->
		
		<?php include_once("footer.php"); ?>
		
		<?php include_once("bottomscripts.php"); ?>
<script>
    
  $(document).ready(function() {
    $('#btnsubmit').click(function(){
      $ck=$('#txtOTP').html();
      $ot=$('#OTP').val();
      if($ck == $ot)
      {
        return true;
      }
      else{
        return false;
      }
      });
    $('#btnotp').click(function() {
      var e=$('#txtEmail').val();
      $.ajax({
            url: "<?php echo site_url('user/User/send/')?>",
            method: "post",
            data:{e:e},
            success: function(result)
            {
              document.getElementById("txtOTP").innerHTML=result;
            }
            });
    })
  })
</script>
</body>
</html>