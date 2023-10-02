<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
		<title>Donation Request</title>
		<?php include_once("topscripts.php"); ?>	
    </head>
    <body>
	
		<!-- Header -->
		<?php include_once("header1.php"); ?>
		<!-- End Header -->
		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Donation Requests</h2>
						<ul class="bread-list">
							<li><a href="<?php echo site_url('user/EmpDemo'); ?>">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="<?php echo site_url('user/Donation/loadDonationRequestByUserId'); ?>">Requests</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<div class="button" style="margin-top: 30px;margin-left: 500px;font-size: 30px;">
			<a href="<?php echo site_url('user/Donation/loadAddDonationRequest'); ?>" class="active">
				Add Donation Request
			</a>
		</div>

		<!-- Testimonials -->
		<section class="testimonials no-bg overlay section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="testimonial-slider">
							<!-- Single Testimonial -->
							<?php
								foreach ($DonationRequest as $dr) 
								{
							?>
									<div class="single-testimonial">
										<img src="<?php echo base_url('resources/shared/images/'.$dr->ProfileImage) ?>" alt="">
										<div class="main-content">
											<h4 class="name"><?php echo $dr->Username; ?></h4>
											<p><?php echo $dr->Description; ?></p>
											<p style="color: red;">Category:-- <?php echo $dr->CategoryName; ?></p>
											<p style="color: blue">City:-- <?php echo $dr->CityName; ?></p>
											<p style="color: orange;">State:-- <?php echo $dr->StateName; ?></p>
										</div>
									</div>
							<?php
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Testimonials -->
			
		<!-- Footer -->
		<?php include_once("footer.php"); ?>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <?php include_once("bottomscripts.php"); ?>
    </body>
</html>