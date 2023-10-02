<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<title></title>
		<?php include_once("topscripts.php"); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
	
		<?php include_once("header1.php"); ?>
		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Add Request of Donation</h2>
						<ul class="bread-list">
							<li><a href="<?php echo site_url('user/UserDemo'); ?>">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="<?php echo site_url('user/Donation/loadAddDonationRequest'); ?>">Request of Donation</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Contact Us -->
		<section id="contact" class="contact section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2><span>donation</span> Information</h2>
							<p></p>
						</div>
					</div>
				</div>
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="">
								<!-- Map -->
								<img src="<?php echo base_url('resources/shared/images/best-ways-to-donate-to-charity.jpg'); ?>">
								<!--/ End Map -->
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-head">
								<!-- Form -->
								<form class="form" action="<?php echo site_url('user/Donation/addDonationRequest'); ?>" method="post" enctype="multipart/form-data">
									
									<div class="form-group">
										<input name="txtDesc" type="text" placeholder="Enter Description" required="">
									</div>
									<div class="form-group">
										<select class="form-control" name="txtCategory">
											<option value="-1">
												Select Category
											</option>
				                            <?php
				                            	foreach ($cats as $c) 
				                            	{
				                            ?>
				                            		<option value="<?php echo $c->CategoryId; ?>"><?php echo $c->CategoryName; ?></option>
				                            <?php  
				                            	}
				                            ?>
				                        </select>
									</div>
									
									<div class="form-group">
										<select class="form-control" name="txtCity">
											<option value="-1">
												Select City
											</option>
				                            <?php
				                            	foreach ($cities as $c) 
				                            	{
				                            ?>
				                            		<option value="<?php echo $c->CityId; ?>"><?php echo $c->CityName; ?></option>
				                            <?php  
				                            	}
				                            ?>
				                        </select>
									</div>
									
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn primary" id="btnsubmit" name="btnsubmit">
												Add Request
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
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<!--/ End Contact Us -->
		
		<?php include_once("footer.php"); ?>
		
		<?php include_once("bottomscripts.php"); ?>
<!-- <script>
    
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
</script> -->
<script>    
  $(document).ready(function() {
    $('#btnsubmit').click(function()
    {
      $ck=$('#txtOTP').html();
      $ot=$('#OTP').val();
      if($ck == $ot)
      {
        return true;
      }
      else
      {
        return false;
      }
    }
    );

    $('#btnotp').click(function() 
    {
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