<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<title>News More Information</title>
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
						<h2>News Feed</h2>
						<ul class="bread-list">
							<li><a href="<?php echo site_url("user/UserDemo"); ?>">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="<?php echo site_url("user/News"); ?>">News</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Events -->
		<section class="events single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="single-event">
							<div class="event-gallery">
								<div class="single-gallery">
									<img src="<?php echo base_url('resources/shared/images/'.$News[0]->CoverImage); ?>" alt="">
								</div>
								<?php
									foreach ($NewsImages as $ni) 
									{
								?>
										<div class="single-gallery">
											<img src="<?php echo base_url('resources/shared/images/'.$ni->ImageURL); ?>" alt="">
										</div>
								<?php
									}
								?>
							</div>
							<div class="event-content">
								<div class="meta"> 
									
									<span><i class="fa fa-clock-o"></i><?php echo $News[0]->CreatedDt; ?></span>
								</div>
								<h2><a href=""><?php echo $News[0]->Topic; ?></a></h2>
								<p><?php echo $News[0]->Description; ?></p>
								<h4>Category Name : <?php echo $News[0]->CategoryName; ?></h4>
								<!-- <img src="<?php echo base_url('resources/user/'); ?>images/events/event3.jpg" alt="">
								
								<div class="book-now">
									<div class="button">
										<a href="" class="btn">Book Now</a>
									</div>
									<ul class="social">
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus "></i></a></li>
										<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div> -->
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="learnedu-sidebar">
							<!-- <div class="search">
								<div class="form">
									<input type="email" placeholder="Search ...">
									<button class="button" href=""><i class="fa fa-search"></i></button>
								</div>
							</div> -->
							<!-- Categories -->
							
							<!--/ End Categories -->
							
							<!-- <div class="single-widget tags">
								<h3>Recent <span>Tags</span></h3>
								<ul>
									<li><a href="#">Course</a></li>
									<li><a href="#">University</a></li>
									<li><a href="#">Scholarship</a></li>
									<li><a href="#">Free</a></li>
									<li><a href="#">Standard</a></li>
									<li><a href="#">Standard</a></li>
								</ul>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Events -->
		
		<!-- Footer -->
		<?php include_once("footer.php"); ?>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <?php include_once("bottomscripts.php"); ?>
    </body>
</html>