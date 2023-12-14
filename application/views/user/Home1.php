<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<title>Disaster Preventer</title>
		<?php include_once("topscripts.php"); ?>	
    </head>
    <body>
	
		<!-- Header -->
		<?php include_once("header2.php"); ?>
		<!-- End Header -->
		
		<!-- Slider Area -->
		<section class="home-slider">
			<div class="slider-active">
				<!-- Single Slider -->
				<div class="single-slider overlay" style="background-image:url(<?php echo base_url('resources/shared/images/'.$News[0]->CoverImage); ?>)">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-12">
								<div class="slider-text">
									<h1><?php echo $News[0]->Topic; ?>
									<br>
									<span><?php echo $News[0]->CreatedDt; ?></span> </h1>
									<p><?php echo $News[0]->Description; ?></p>
									<div class="button">
										<a href="<?php echo site_url('user/EmpNews/loadNewsById/'.$News[0]->NewsId); ?>" class="btn primary">View More</a>
										<!-- <a href="about.html" class="btn">About Learnedu</a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider overlay" style="background-image:url(<?php echo base_url('resources/shared/images/'.$News[1]->CoverImage); ?>)">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
								<div class="slider-text text-center">
									<h1> <?php echo $News[1]->Topic; ?>
									<br>	
									<span><?php echo $News[1]->CreatedDt; ?></span></h1>
									<p><?php echo $News[1]->Description; ?></p>
									<div class="button">
										<a href="<?php echo site_url('user/EmpNews/loadNewsById/'.$News[1]->NewsId); ?>" class="btn primary">View More</a>
										<!-- <a href="about.html" class="btn">About Learnedu</a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider overlay" style="background-image:url(<?php echo base_url('resources/shared/images/'.$News[2]->CoverImage); ?>)">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-4 col-md-8 offset-md-4 col-12">
								<div class="slider-text text-right">
									<h1> <?php echo $News[2]->Topic; ?>
									<br>
									<span><?php echo $News[2]->CreatedDt; ?></span></h1>
									<p><?php echo $News[2]->Description; ?></p>
									<div class="button">
										<a href="<?php echo site_url('user/EmpNews/loadNewsById/'.$News[2]->NewsId); ?>" class="btn primary">View More</a>
										<!-- <a href="about.html" class="btn">About Learnedu</a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		<br>
		
		
		<!-- Enroll -->
		<!-- <section class="enroll overlay section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="row">
							<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
								
								<div class="enroll-form">
									<div class="form-title">
										<h2>Enroll Today</h2>
										<p>Before you miss the chance to get your seat!</p>
									</div>
									
									<form class="form" action="#">
										<div class="form-group">
											<label>Enter Your name</label>
											<input name="name" type="text" placeholder="John Mathew">
										</div>
										<div class="form-group">
											<label>Enter Your Email</label>
											<input name="email" type="email" placeholder="john@youremail.com">
										</div>
										<div class="form-group">
											<label>Type your messages</label>
											<textarea name="message" placeholder="i would like to talking..."></textarea>
										</div>
										<div class="form-group button">
											<button type="submit" class="btn">Register Now</button>
										</div>
									</form>
									
								</div>
								
							</div>
							<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
								<div class="enroll-right">
									<div class="section-title">
										<h2>We Have More than 28,690+ Student With online Join!</h2>
										<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis.</p>
									</div>
								</div>
								
								<div class="skill-main">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="0.8s">
											
											<div class="single-skill">
												<div class="circle" data-value="0.7" data-size="130">
													<strong>28K+</strong>
												</div>
												<h4>Students</h4>
											</div>
											
										</div>
										<div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1s">
											
											<div class="single-skill">
												<div class="circle" data-value="0.9" data-size="130">
													<strong>50+</strong>
												</div>
												<h4>Courses</h4>
											</div>
											
										</div>
										<div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1.2s">
											
											<div class="single-skill">
												<div class="circle" data-value="0.8" data-size="130">
													<strong>33+</strong>
												</div>
												<h4>Teachers</h4>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!--/ End Enroll -->

		<!-- Courses -->
		<section class="courses section-bg section">
			<div class="container">
				<div class="row">
					<div class="col-12 wow zoomIn">
						<div class="section-title">
							<h2>Popular <span>Communities</span> & Data</h2>
							<p>There are so many Communities in our site.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="course-slider">
							<!-- Single Course -->
							<?php
								foreach ($Community as $c) 
								{
							?>
									<div class="single-course">
										<div class="course-head overlay">
											<img src="<?php echo base_url('resources/shared/images/'.$c->CoverPic); ?>" alt="">
											<a href="" class="btn"><i class="fa fa-link"></i></a>
										</div>
										<div class="single-content">
											<h4><a href="<?php echo site_url('user/EmpCommunity/loadCommunityById/'.$c->CommunityId); ?>"><span>Title:-</span> <?php echo $c->Title; ?> </a></h4>
											<p><?php echo $c->Description; ?> </p>
										</div>
										<div class="course-meta">
											<div class="meta-left">
												<span><i class="fa fa-users"></i><?php echo $c->EmployeeName; ?></span>
												<span><i class="fa fa-clock-o"></i><?php echo $c->CreatedDt; ?></span>
											</div>
											<!-- <span class="price">$350</span> -->
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
		<!--/ End Courses -->	
		
		<!-- Team -->
		<section class="team section">
			<div class="container">
				<div class="row">
					<div class="col-12 wow zoomIn">
						<div class="section-title">
							<h2>Our Awesome <span>Employees</span></h2>
							<p>We have some best Employees Who serve us from beginning and their work is supercalifragilisticexpialidocious.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
						foreach ($Employee as $e) 
						{
					?>
							<div class="col-lg-3 col-md-6 col-12">
								<!-- Single Team -->
								<div class="single-team">
									<img src="<?php echo base_url('resources/shared/images/'.$e->CoverImage); ?>">
									<div class="team-hover">
										<h4><?php echo $e->EmployeeName; ?><span><?php echo $e->CategoryName; ?></span></h4>
										<p style="color: yellow;">
											<?php echo $e->Email; ?>
											<!-- <b><i><?php echo $e->CityName; ?></i></b> -->
										</p>
										<p style="color: red;">
											<b><i><?php echo $e->CityName; ?></i></b>
										</p>
										
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
					<?php
						}
					?>
				</div>
			</div>
		</section>
		<!--/ End Team -->
		
		<!-- Testimonials -->
		<section class="testimonials overlay section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="testimonial-slider">
							<!-- Single Testimonial -->
							<?php
								foreach ($News as $n) 
								{
							?>
									<div class="single-testimonial">
										<img src="<?php echo base_url('resources/shared/images/'.$n->CoverImage); ?>" alt="">
										<div class="main-content">
											<h4 class="name">
												<a href="<?php echo site_url('user/EmpNews/loadNewsById/'.$n->NewsId); ?>">
													<?php echo $n->Topic; ?>
												</a>
											</h4>
											<p><?php echo $n->Description; ?></p>
										</div>
									</div>
							<?php		
								}
							?>
							<!--/ End Single Testimonial -->
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Testimonials -->
		
		<!-- Events -->
		<section class="events section">
			<div class="container">
				<div class="row">
					<div class="col-12 wow zoomIn">
						<div class="section-title">
							<h2>News <span>Feeds</span></h2>
							<p>All News About Disaster in our Country </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="event-slider">
							<!-- Single Event -->
							<?php
								foreach ($News as $n) 
								{
							?>
									<div class="single-event">
										<div class="head overlay">
											<img src="<?php echo base_url('resources/shared/images/'.$n->CoverImage); ?>" alt="">
											<a href="<?php echo base_url('resources/shared/images/'.$n->CoverImage); ?>" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
										</div>
										<div class="event-content">
											<div class="meta"> 
												<span><i class="fa fa-calendar"></i>
													<?php echo $n->CreatedDt; ?>
													<i class="fa fa-clock-o"></i>
												</span>
												
											</div>
											<h4>
												<a href="">
													<?php echo $n->Topic; ?>
												</a>
											</h4>
											<p><?php echo $n->Description; ?></p>
											<div class="button">
												<a href="<?php echo site_url('user/EmpNews/loadNewsById/'.$n->NewsId); ?>" class="btn">View More</a>
											</div>
										</div>
									</div>
							<?php
								}
							?>
							<!--/ End Single Event -->
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Events -->
		
		<!-- Fun Facts -->
		<div class="fun-facts overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.4s">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-institution"></i>
							<div class="number"><span class="counter"><?php echo count($Community); ?></span>+</div>
							<p>Active Communities</p>
						</div>
						<!--/ End Single Fact -->
					</div>
					<div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.6s">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-graduation-cap"></i>
							<div class="number"><span class="counter"><?php echo count($User); ?></span>+</div>
							<p>Active Users</p>
						</div>
						<!--/ End Single Fact -->
					</div>
					<div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.8s">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-video-camera"></i>
							<div class="number"><span class="counter"><?php echo count($Forum); ?></span>+</div>
							<p>Forums</p>
						</div>
						<!--/ End Single Fact -->
					</div>
					<div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="1s">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-trophy"></i>
							<div class="number"><span class="counter"><?php echo count($News); ?></span>+</div>
							<p>News</p>
						</div>
						<!--/ End Single Fact -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun Facts -->
		
		<!-- Blogs -->
		<section class="blog section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Communities <span>Forums</span></h2>
							<p>There are so many Communities which have different types of Forums but here you can see all Forums</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="blog-slider">
							<!-- Single Blog -->
							<?php
								foreach ($Forum as $f) 
								{
							?>							
									<div class="single-blog">
										<div class="blog-head overlay">
											<div class="date">
												<h4 style="text-align: center;margin-top: 13px;">
														<span style="font-size: 12px">
														<?php echo $n->CreatedDt; ?>	
														</span>
													</h4>
											</div>
											<img src="<?php echo base_url('resources/shared/images/'.$f->PostImage) ?>" alt="">
										</div>
										<div class="blog-content">
											<h4 class="blog-title"><a href=""><?php echo $f->Title; ?></a></h4>
											<div class="blog-info">
												<a href=""><i class="fa fa-user"></i>By: <?php echo $f->Username; ?></a>
												<!-- <a href=""><i class="fa fa-list"></i></a> -->
												<a href=""><i class="fa fa-heart-o"></i>20</a>
											</div>
											<p><?php echo $f->Description; ?></p>
											<div class="button">
												<a href="<?php echo site_url('user/EmpCommunity/loadForumById/'.$f->ForumId); ?>" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>
									</div>
							<!-- End Single Blog -->
							<?php
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blogs -->
		
		<!-- Footer -->
		<?php include_once("footer.php"); ?>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <?php include_once("bottomscripts.php"); ?>
    </body>
</html>