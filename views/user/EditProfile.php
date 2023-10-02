<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<title>Disaster Preventor</title>
		<?php include_once("topscripts.php"); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
	
		<?php include_once("header1.php"); ?>
		
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
							<h2><span>Update</span> Profile</h2>
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
								<form class="form" action="<?php echo site_url('user/Profile/editInfo/'.$_SESSION['uid']); ?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<input name="txtUname" id="txtUname" type="text" placeholder="Enter UserName" value="<?php echo $User[0]->Username; ?>" required="">
									</div>
									<!-- <div class="form-group">
										<input name="txtPwd" type="text" placeholder="Enter Password" value="<?php echo $User[0]->Password; ?>" required="">
									</div> -->
									<div class="form-group">
										<!-- <span><small id="Emailvalidation" name="Emailvalidation" style="color: red;"></small></span> -->
										<input name="txtEmail" id="txtEmail" type="text" placeholder="Enter Email" value="<?php echo $User[0]->Email; ?>" required="">
										<!-- <span id="Emailvalidation" name="Emailvalidation" ></span> -->
									</div>
									<div class="form-group">
										<input name="txtGender" type="text" placeholder="Enter Gender" value="<?php echo $User[0]->Gender; ?>" required="">
									</div>
									<div class="form-group">
										<input name="BirthDate" type="date" title="Enter Date of Birth" required="" value="<?php echo $User[0]->DOB; ?>">
									</div>
									<div class="form-group">
										<select class="form-control" name="txtCity">
											<option value="-1">
												Select City
											</option>
				                            <?php
				                            	foreach ($City as $c) 
				                            	{
				                            ?>
				                            		<option value="<?= $c->CityId ?>" <?php if($c->CityId==$User[0]->CityId) { ?> selected <?php } ?> ><?= $c->CityName ?></option>
				                            <?php  
				                            	}
				                            ?>
				                        </select>
									</div>
									<div class="form-group">
										<input name="txtMobile" type="text" placeholder="Enter Mobile No." value="<?php echo $User[0]->MobileNo; ?>" required="" pattern="[0-9]{10}" title="Only 10 Digits Allowed">
									</div>
									<!-- <div class="form-group">
										<input name="fup" type="file" title="Select Image" required="">
									</div> -->
									
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn primary" id="btnupdate">
												Update Basic Info
											</button>
										</div>
									</div>
									<!-- <div class="form-group">
										<div class="button">
			                                <a href="<?php echo site_url("user/User"); ?>" class=""><i class="fa fa-pencil"></i>Already have an Account ? Login</a>
			                            </div>
			                        </div> -->
								</form>
								<!--/ End Form -->
								<br>
								<br>
								<form class="form" action="<?php echo site_url('user/Profile/editPassword/'.$_SESSION['uid']); ?>" method="post" enctype="multipart/form-data">
									
									<div class="form-group">
										<input name="txtoldpassword" type="text" placeholder="Enter old Password" required="">
									</div>
									
									<div class="form-group">
										<input name="txtNewPwd" type="text" placeholder="Enter New Password" required="">
									</div>
									<div class="form-group">
										<input name="txtConPwd" type="text" placeholder="Confirm Password" required="">
									</div>
									<div class="form-group">
										<p style="color: red;">
											<?php 
												if (isset($Err)) 
												{
											?>
													<?php echo $Err; ?>
											<?php
												}
											?>
											<?php 
												if (isset($Msg)) 
												{
											?>
													<?php echo $Msg; ?>
											<?php
												}
											?>
										</p>
									</div>
									
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn primary" id="btnupdatepwd">
												Update Password
											</button>
										</div>
									</div>
									<!-- <div class="form-group">
										<div class="button">
			                                <a href="<?php echo site_url("user/User"); ?>" class=""><i class="fa fa-pencil"></i>Already have an Account ? Login</a>
			                            </div>
			                        </div> -->
								</form>
								<br>
								<br>
								<form class="form" action="<?php echo site_url('user/Profile/editImage/'.$_SESSION['uid']); ?>" method="post" enctype="multipart/form-data">
									
									<div class="form-group">
										<input name="fup" type="file" title="Select Image" required="">
									</div>
									
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn primary" id="btnupdateimg">
												Update Image
											</button>
										</div>
									</div>
									<!-- <div class="form-group">
										<div class="button">
			                                <a href="<?php echo site_url("user/User"); ?>" class=""><i class="fa fa-pencil"></i>Already have an Account ? Login</a>
			                            </div>
			                        </div> -->
								</form>
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