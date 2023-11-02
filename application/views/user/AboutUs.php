<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<title>About Us</title>
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
						<h2>About Us</h2>
						<ul class="bread-list">
							<li><a href="<?php echo site_url('user/UserDemo'); ?>">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="<?php echo site_url('user/UserDemo/loadAboutUs'); ?>">about</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- About US -->
		<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="single-image overlay">
							<img src="<?php echo base_url('resources/shared/images/Keyur.jpg'); ?>" alt="">
							<a href="https://www.youtube.com/watch?v=V1Pl8CzNzCw" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-text">
							<h2>About Us</h2>
							<p>Disaster Management can be defined as the organization and management of resources and responsibilities for dealing with all humanitarian aspects of emergencies, in particular preparedness, response and recovery in order to lessen the impact of disasters.</p>
							<p></p>
							<div class="button">
								<a href="<?php echo site_url('user/Community'); ?>" class="btn">Our Communities</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End About US -->
		
		<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="single-image overlay">
							<img src="<?php echo base_url('resources/shared/images/Vivek.jpg'); ?>" alt="">
							<a href="https://www.youtube.com/watch?v=RgKAFK5djSk" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-text">
							<h2>About Us</h2>
							<p>Disaster management efforts aim to reduce or avoid the potential losses from hazards, assure prompt and appropriate assistance to the victims of a disaster, and achieve a rapid and effective recovery. It is crucial that hospitals remain safe and functional during and after disasters.</p>
							<p></p>
							<div class="button">
								<a href="<?php echo site_url('user/News'); ?>" class="btn">Our News</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Fun Facts -->
		<div class="fun-facts overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-6">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-institution"></i>
							<div class="number">
								<span class="counter">
									<?php echo count($Users); ?>
								</span>+
							</div>
							<p>Active Users</p>
						</div>
						<!--/ End Single Fact -->
					</div>
					<div class="col-lg-3 col-md-6 col-6">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-graduation-cap"></i>
							<div class="number">
								<span class="counter">
									<?php echo count($Communities); ?>
								</span>+
							</div>
							<p>Active Communities</p>
						</div>
						<!--/ End Single Fact -->
					</div>
					<div class="col-lg-3 col-md-6 col-6">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-video-camera"></i>
							<div class="number">
								<span class="counter">
									<?php echo count($News); ?>
								</span>+
							</div>
							<p>News</p>
						</div>
						<!--/ End Single Fact -->
					</div>
					<div class="col-lg-3 col-md-6 col-6">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-trophy"></i>
							<div class="number">
								<span class="counter">
									<?php echo count($Forums); ?>
								</span>+
							</div>
							<p>Forums</p>
						</div>
						<!--/ End Single Fact -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun Facts -->
		
		<!-- Team -->
		<section class="team section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Our Awesome <span>Employees</span></h2>
							<p>There are So many Employees but our Best Employees are</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Team -->
						<div class="single-team">
							<img src="<?php echo base_url('resources/shared/images/Axay.jpg'); ?>" alt="">
							<div class="team-hover">
								<h4>Axay Nayi<span></span></h4>
								<p>He is a hard working Boy.</p>
								<!-- <ul class="social">
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									<li><a href=""><i class="fa fa-youtube"></i></a></li>
								</ul> -->
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Team -->
						<div class="single-team">
							<img src="<?php echo base_url('resources/shared/images/Keyur.jpg'); ?>" alt="">
							<div class="team-hover">
								<h4 class="name">Keyur Kanani<span class="work">Creator</span></h4>
								<p>He is the creator of this Web-Site</p>
								<!-- <ul class="social">
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									<li><a href=""><i class="fa fa-youtube"></i></a></li>
								</ul> -->
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Team -->
						<div class="single-team">
							<img src="<?php echo base_url('resources/shared/images/Vivek.jpg'); ?>" alt="">
							<div class="team-hover">
								<h4 class="name">Vivek Sakhiya<span class="work">Creator</span></h4>
								<p>He is the creator of this Web-Site</p>
								<!-- <ul class="social">
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									<li><a href=""><i class="fa fa-youtube"></i></a></li>
								</ul> -->
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Team -->
		
		<!-- Footer -->
		<?php include_once("footer.php"); ?>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <?php include_once("bottomscripts.php"); ?>
    </body>
</html>