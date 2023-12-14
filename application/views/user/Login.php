<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<title>Disaster Preventor</title>
		<?php include_once("topscripts.php"); ?>
			
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
		
		
		
		<!-- Contact Us -->
		<section id="contact" class="contact section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2><span>Login</span> Information</h2>
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
								<form class="form" action="<?php echo site_url('user/User/validateLogin'); ?>" method="post">
									<div class="form-group">
										<!-- <span><small id="result" style="color: red;"></small></span> -->
										<input name="txtUname" id="txtUname" type="text" placeholder="Enter User Name" required="">
									</div>
									<div class="form-group">
										<input name="txtPwd" type="password" placeholder="Enter Password" required="">
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
											<button type="submit" class="btn primary">
												Login
											</button>
										</div>
									</div>
									<div class="form-group">
										<a href="<?php echo site_url('user/User/loadForgetPassword'); ?>"><u>Forgot Password ?</u></a>
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
		
		$('#btnotp').click(function() {
			var e=$('#txtEmail').val();
			$.ajax({
	          url: "<?php echo site_url('user/User/send/')?>",
	          method: "post",
	          data:{e:e},
	          success: function(result)
	          {
	            document.getElementById('txtOTP').innerHTML=result;
	          }
	          });
		})


	
		$('#txtEmail').change(function(){
			var email=$('#txtEmail').val();
			if (email != '') 
			{
				$.ajax({
					url:"<?php echo base_url('user/User/checkEmail'); ?>",
					method:"POST",
					data:{email:email},
					success: function(data)
					{
						//document.getElementById('#Emailvalidation').innerHTML=result;
						$('#Emailvalidation').html(result);
					}
				});
			}
		

			
		function load_data(query)
		{
			$.ajax({
				url:"<?php echo site_url('user/User/checkusername'); ?>",
				method:"POST",
				data:{query:query},
				success:function(data)
				{
					document.getElementById("result").innerHTML=data;
				}
			});
		}
		
		$('#txtUname').keyup(function(){
			var search=$(this).val();
			if (search != '') 
			{
				load_data(search);
			}
			else
			{
				load_data();
			}
		});
	})	
</script>
</body>
</html>