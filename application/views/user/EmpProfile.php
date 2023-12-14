<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
	<title>My Profile</title>
		<?php include_once("topscripts.php"); ?>	
    </head>
    <body>
	
		<!-- Header -->
		<?php include_once("header2.php"); ?>
		<!-- End Header -->
		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>My Profile</h2>
						<ul class="bread-list">
							<li><a href="<?php echo site_url('user/EmpDemo'); ?>">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="<?php echo site_url('user/Profile/loadEmp/'.$_SESSION['eid']); ?>">Profile</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Start Team Detail Area-->
		<section class="team-details section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="member-detail">
							<div class="image">
								<img src="<?php echo base_url('resources/shared/images/'.$Employee[0]->CoverImage); ?>" alt="">
							</div>
							<div class="contact">
								
								<ul class="address">
									<li><a href="mailto:<?php echo $Employee[0]->Email; ?>"><i class="fa fa-envelope"></i><?php echo $Employee[0]->Email; ?></a></li>
									<li><i class="fa fa-phone"></i>+91-<?php echo $Employee[0]->Contact; ?></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="detail-content">
							<h2><?php echo $Employee[0]->UserName; ?></h2>
							<p class="title"></p>
							<p style="font-size: 30px;color: #12A3EC;">
								Gender:- <?php echo $Employee[0]->Gender; ?>
								<br>
								<br>
								Date of Birth:--<?php echo $Employee[0]->DOB; ?>
								<br>
								<br>
								Address:- <?php echo $Employee[0]->Address; ?>
								<br>
								<br>
								City Name:--<?php echo $Employee[0]->CityName; ?>
								<br>
								<br>
								State Name:--<?php echo $Employee[0]->StateName; ?>
							</p>
							<div class="skill-main">
								<!-- Single Skill -->
								<div class="single-progress">
									<h4>Communication</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent">78%</span></div>
									</div>
								</div>
								<!--/ End Single Skill -->
								<!-- Single Skill -->
								<div class="single-progress">
									<h4>Relationship</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent">80%</span></div>
									</div>
								</div>
								<!--/ End Single Skill -->
								<!-- Single Skill -->
								<div class="single-progress">
									<h4>Creative Work</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent">90%</span></div>
									</div>
								</div>
								<!--/ End Single Skill -->
								<!-- Single Skill -->
								<div class="single-progress">
									<h4>Achivements</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent">95%</span></div>
									</div>
								</div>
								<!--/ End Single Skill -->
							</div>
							<!-- <div class="signature">
								<img src="<?php echo base_url(''); ?>resources/user/images/signature.png" alt="">
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Team Detail Area-->
		
		<!-- Footer -->
		<?php include_once("footer.php"); ?>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <?php include_once("bottomscripts.php"); ?>
    </body>
</html>