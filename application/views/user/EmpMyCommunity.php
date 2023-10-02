<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<title>My Communities</title>
		<?php include_once('topscripts.php'); ?>	
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
	
		<!-- Header -->
		<?php include_once('header2.php'); ?>
		<!-- End Header -->
		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>My Communities</h2>
						<ul class="bread-list">
							<li><a href="<?php echo site_url('user/EmpDemo'); ?>">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="<?php echo site_url('user/EmpCommunity/loadCommunityByEmployeeId'); ?>">Communities</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		
		<!-- Courses -->
		<section class="courses archives section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>My <span>Communities</span></h2>
							<p>There are so many Communities of different types of Disasters & We Provide all news about Disaster in Community..</p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
						foreach ($Community as $c) 
						{
					?>

							<div class="col-lg-4 col-md-6 col-12">
								<div class="single-course">
									<div class="course-head overlay">
										<img src="<?php echo base_url('resources/shared/images/'.$c->CoverPic); ?>" alt="">
										<a href="" class="btn"><i class="fa fa-link"></i></a>
									</div>
									<div class="single-content">
										<h4><a href=""><span>Title:</span><?php echo $c->Title; ?></a></h4>
										<!-- <p><?php echo $c->Description; ?> </p> -->
									</div>
									<div class="course-meta">
										<div class="meta-left">
											<span><i class="fa fa-users"></i><?php echo $c->UserName; ?></span>
											<span><i class="fa fa-clock-o"></i><?php echo $c->CreatedDt;; ?></span>
										</div>
										
										<div class="button">
											<a href="<?php echo site_url('user/EmpCommunity/loadCommunityById/'.$c->CommunityId); ?>" class="btn" style="color: blue;">View More</a>
										</div>
									</div>
								</div>
							</div>
					<?php		
						}
					?>

					<?php
						foreach ($CommEmp as $ce) 
						{
					?>

							<div class="col-lg-4 col-md-6 col-12">
								<div class="single-course">
									<div class="course-head overlay">
										<img src="<?php echo base_url('resources/shared/images/'.$ce->CoverPic); ?>" alt="">
										<a href="" class="btn"><i class="fa fa-link"></i></a>
									</div>
									<div class="single-content">
										<h4><a href=""><span>Title:</span><?php echo $ce->Title; ?></a></h4>
										<!-- <p><?php echo $c->Description; ?> </p> -->
									</div>
									<div class="course-meta">
										<div class="meta-left">
											<span><i class="fa fa-users"></i><?php echo $ce->UserName; ?></span>
											<span><i class="fa fa-clock-o"></i><?php echo $ce->CreatedDt;; ?></span>
										</div>
										
										<div class="button">
											<a href="<?php echo site_url('user/EmpCommunity/loadCommunityById/'.$ce->CommunityId); ?>" class="btn" style="color: blue;">View More</a>
										</div>
									</div>
								</div>
							</div>
					<?php		
						}
					?>
					<!-- <div class="col-lg-4 col-md-6 col-12">
						<div class="single-course">
							<div class="course-head overlay">
								<img src="images/course/course2.jpg" alt="#">
								<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course-single.html"><span>Science</span>Software Engineer</a></h4>
								<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
							</div>
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-users"></i>20 Seat</span>
									<span><i class="fa fa-clock-o"></i>1 Years</span>
								</div>
								<span class="price">$590</span>
							</div>
						</div>
						
					</div> -->
					<!-- <div class="col-lg-4 col-md-6 col-12">
						<div class="single-course">
							<div class="course-head overlay">
								<img src="images/course/course3.jpg" alt="#">
								<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course-single.html"><span>Science</span>Electrical Management</a></h4>
								<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
							</div>
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-users"></i>49 Seat</span>
									<span><i class="fa fa-clock-o"></i>2 Years</span>
								</div>
								<span class="price">$140</span>
							</div>
						</div>
					</div> -->	
					<!-- <div class="col-lg-4 col-md-6 col-12">
						<div class="single-course">
							<div class="course-head overlay">
								<img src="images/course/course1.jpg" alt="#">
								<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course-single.html"><span>Commerce</span>Business Management</a></h4>
								<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consecteturadipiscing elit aenean </p>
							</div>
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-users"></i>36 Seat</span>
									<span><i class="fa fa-clock-o"></i>2 Years</span>
								</div>
								<span class="price">$350</span>
							</div>
						</div>
					</div> -->
					<!-- <div class="col-lg-4 col-md-6 col-12">
						<div class="single-course">
							<div class="course-head overlay">
								<img src="images/course/course2.jpg" alt="#">
								<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course-single.html"><span>Science</span>Software Engineer</a></h4>
								<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
							</div>
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-users"></i>20 Seat</span>
									<span><i class="fa fa-clock-o"></i>1 Years</span>
								</div>
								<span class="price">$590</span>
							</div>
						</div>
					</div> -->
					<!-- <div class="col-lg-4 col-md-6 col-12">
						<div class="single-course">
							<div class="course-head overlay">
								<img src="images/course/course3.jpg" alt="#">
								<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course-single.html"><span>Science</span>Electrical Management</a></h4>
								<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
							</div>
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-users"></i>49 Seat</span>
									<span><i class="fa fa-clock-o"></i>2 Years</span>
								</div>
								<span class="price">$140</span>
							</div>
						</div>
					</div> -->	
				</div>
				<!-- <div class="row">
					<div class="col-12">
						<div class="pagination-main">
							<ul class="pagination">
								<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
								<li><a href="">1</a></li>
								<li class="active"><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li class="next"><a href=""><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div> -->
			</div>
		</section>
		<!--/ End Courses -->	
		
		<!-- Footer -->
		<?php include_once('footer.php'); ?>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <?php include_once('bottomscripts.php'); ?>
    </body>
</html>