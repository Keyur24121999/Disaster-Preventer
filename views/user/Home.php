<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
	<title>Disaster Preventer</title>
	<?php include_once("topscripts.php"); ?>		
</head>
<body>
	
		<!-- Book Preloader -->
        <!-- <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div> -->
		<!--/ End Book Preloader -->
	
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
	
		<?php include_once("header1.php"); ?>
		
		
		<!-- Slider Area -->
		<section class="home-slider">
			<div class="slider-active">
				<!-- Single Slider -->
				<div class="single-slider overlay" style="background-image:url(<?php echo base_url('resources/shared/images/'.$News[0]->CoverImage); ?>)">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-12">
								<div class="slider-text">
									<h1><?php echo $News[0]->Topic; ?></h1>
									<p><?php echo $News[0]->Description; ?></p>
									<div class="button">
										<a href="<?php echo site_url('user/News/loadNewsById/'.$News[0]->NewsId); ?>" class="btn primary">View More</a>
										<!-- <a href="" class="btn">About Learnedu</a> -->
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
							<div class="col-lg-8 col-md-8 col-12">
								<div class="slider-text">
									<h1><?php echo $News[1]->Topic; ?></h1>
									<p><?php echo $News[1]->Description; ?></p>
									<div class="button">
										<a href="<?php echo site_url('user/News/loadNewsById/'.$News[1]->NewsId); ?>" class="btn primary">View More</a>
										<!-- <a href="" class="btn">About Learnedu</a> -->
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
							<div class="col-lg-8 col-md-8 col-12">
								<div class="slider-text">
									<h1><?php echo $News[2]->Topic; ?></h1>
									<p><?php echo $News[2]->Description; ?></p>
									<div class="button">
										<a href="<?php echo site_url('user/News/loadNewsById/'.$News[2]->NewsId); ?>" class="btn primary">View More</a>
										<!-- <a href="" class="btn">About Learnedu</a> -->
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
		
		<!-- Features -->
		<!-- <section class="our-features section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>News <span>Feed</span> Images</h2>
							<p>Here, All Disaster Images & Description Available </p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
						foreach ($News as $n) 
						{
					?>

							<div class="col-lg-4 col-md-4 col-12">
								Single Feature
								<div class="single-feature">
									<div class="feature-head" style="height: 200px;width: 300px;">
										<img src="<?php echo base_url('resources/shared/images/'.$n->CoverImage); ?>">
									</div>
									<h2><?php echo $n->Topic; ?></h2>
									<p><?php echo $n->Description; ?></p>	
								</div>
								
							</div>
					<?php		
						}
					?>
					
				</div>
			</div>
		</section> -->
		<!-- End Features -->
		<!-- <section class="our-features section">
			
		</section> -->
		<br>
		<!-- Enroll -->
		<section class="enroll overlay section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="row">
							<div class="col-lg-6 col-12">
								
								<div class="enroll-form">
									<div class="form-title">
										<h2>Donate Today</h2>
										<p>Before you miss the chance to get your seat!</p>
									</div>
									
									<form class="form" method="post" action="<?php echo site_url('user/UserDemo/PaytmTransaction'); ?>">
										<div class="form-group">
											<label>Enter Amount of Donation</label>
											<input name="txtAmount" id="txtAmount" type="text" placeholder="Enter Amount">
										</div>
										<div class="form-group">
											<label>Select City Where you want to donate</label>
											<select class="form-control" name="txtCity">
												<option value="-1">
													Select City
												</option>
					                            <?php
					                            	foreach ($City as $c) 
					                            	{
					                            ?>
					                            		<option value="<?= $c->CityId; ?>">
					                            			<?= $c->CityName; ?></option>
					                            <?php  
					                            	}
					                            ?>
					                        </select>
										</div>
										<div class="form-group">
											<label>TSelect Category In Which you want to donate</label>
											<select class="form-control" name="txtCategory">
												<option value="-1">
													Select Category
												</option>
					                            <?php
					                            	foreach ($Category as $c) 
					                            	{
					                            ?>
					                            		<option value="<?= $c->CategoryId; ?>">
					                            			<?= $c->CategoryName; ?></option>
					                            <?php  
					                            	}
					                            ?>
					                        </select>
										</div>
										<div class="form-group button">
											<button type="submit" class="btn">Donate</button>
										</div>
									</form>
									
								</div>
								
							</div>
							<div class="col-lg-6 col-12">
								<div class="enroll-right">
									<div class="section-title">
										<h2>We Have More than  Donation Amount</h2>
										<p>You can also Donate here whatever amount you want to..If you want to anything else just go to Donation Requests and make a request our employees will be in touched..</p>
									</div>
								</div>
								<!-- Skill Main -->
								<div class="skill-main">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="0.8s">
											<!-- Single Skill -->
											<div class="single-skill">
												<div class="circle" data-value="0.7" data-size="130">
													<strong><?php echo count($News); ?>+</strong>
												</div>
												<h4>News</h4>
											</div>
											<!--/ End Single Skill -->
										</div>
										<div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1s">
											<!-- Single Skill -->
											<div class="single-skill">
												<div class="circle" data-value="0.9" data-size="130">
													<strong><?php echo count($Community); ?>+</strong>
												</div>
												<h4>Community</h4>
											</div>
											<!--/ End Single Skill -->
										</div>
										<div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1.2s">
											<!-- Single Skill -->
											<div class="single-skill">
												<div class="circle" data-value="0.8" data-size="130">
													<strong><?php echo count($User); ?>+</strong>
												</div>
												<h4>User</h4>
											</div>
											<!--/ End Single Skill -->
										</div>
									</div>
								</div>
								<!--/ End Skill Main -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Enroll -->

		<!-- Courses -->
		<section class="courses section-bg section">
			<div class="container">
				<div class="row">
					<div class="col-12">
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
											<a href="<?php echo site_url('user/Community/loadCommunityById/'.$c->CommunityId); ?>" class="btn"><i class="fa fa-link"></i></a>
										</div>
										<div class="single-content">
											<h4><a href=""><span>Title:-</span> <?php echo $c->Title; ?> </a></h4>
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
							<!--/ End Single Course -->
							<!-- Single Course -->
							<!-- <div class="single-course">
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
							</div> -->
							<!--/ End Single Course -->
							<!-- Single Course -->
							<!-- <div class="single-course">
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
							</div> -->
							<!--/ End Single Course -->
							<!-- Single Course -->
							<!-- <div class="single-course">
								<div class="course-head overlay">
									<img src="images/course/course1.jpg" alt="#">
									<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
								</div>
								<div class="single-content">
									<h4><a href="course-single.html"><span>Commerce</span>Business Management</a></h4>
									<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
								</div>
								<div class="course-meta">
									<div class="meta-left">
										<span><i class="fa fa-users"></i>36 Seat</span>
										<span><i class="fa fa-clock-o"></i>2 Years</span>
									</div>
									<span class="price">$350</span>
								</div>
							</div> -->
							<!--/ End Single Course -->
							<!-- Single Course -->
							<!-- <div class="single-course">
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
							</div> -->
							<!--/ End Single Course -->
							<!-- Single Course -->
							<!-- <div class="single-course">
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
							</div> -->
							<!--/ End Single Course -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Courses -->	
		
		<!-- Call To Action -->
		<!-- <section class="cta" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 offset-lg-6 col-12">
						<div class="cta-inner overlay">
							<div class="text-content">
								<h2>We Focus On Brands, Products & Campaigns</h2>
								<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore cum. Coluta nobis est eligendi optio cumque nihil impedit quo minusd quod maxime placeat facere possimus, omnis voluptas assumenda est. Our friendly support team is standing by to help you every step of the way.</p>
								<div class="button">
									<a class="btn primary" href="contact.html" >Register Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!--/ End Call To Action -->
		
		<!-- Team -->
		<section class="team section">
			<div class="container">
				<div class="row">
					<div class="col-12">
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
					<!-- <div class="col-lg-3 col-md-6 col-12">
						
						<div class="single-team">
							<img src="<?php echo base_url('resources/user/images/team/team2.jpg'); ?>" alt="#">
							<div class="team-hover">
								<h4 class="name">Ian Harvey<span class="work">Web Programmer</span></h4>
								<p>cumque nihil impedit quo minusid quod maxime placeat facere possimus</p>
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
						
					</div> -->
					<!-- <div class="col-lg-3 col-md-6 col-12">
						
						<div class="single-team">
							<img src="<?php echo base_url('resources/user/images/team/team3.jpg'); ?>" alt="#">
							<div class="team-hover">
								<h4 class="name">Lusfat Roman<span class="work">Software Engineer</span></h4>
								<p>cumque nihil impedit quo minusid quod maxime placeat facere possimus</p>
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
						
					</div> -->
					<!-- <div class="col-lg-3 col-md-6 col-12">
						
						<div class="single-team">
							<img src="<?php echo base_url('resources/user/images/team/team4.jpg'); ?>" alt="#">
							<div class="team-hover">
								<h4 class="name">Nalpamb Bold<span class="work">JS Developer</span></h4>
								<p>cumque nihil impedit quo minusid quod maxime placeat facere possimus</p>
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
						
					</div> -->
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
												<a href="<?php echo site_url('user/News/loadNewsById/'.$n->NewsId); ?>">
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
							<!-- Single Testimonial -->
							<!-- <div class="single-testimonial">
								<img src="images/testimonial2.jpg" alt="#">
								<div class="main-content">
									<h4 class="name">Jansan Kate</h4>
									<p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
								</div>
							</div> -->
							<!--/ End Single Testimonial -->
							<!-- Single Testimonial -->
							<!-- <div class="single-testimonial">
								<img src="images/testimonial3.jpg" alt="#">
								<div class="main-content">
									<h4 class="name">Sanavce Faglane</h4>
									<p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
								</div>
							</div> -->
							<!--/ End Single Testimonial -->
							<!-- Single Testimonial -->
							<!-- <div class="single-testimonial">
								<img src="images/testimonial4.jpg" alt="#">
								<div class="main-content">
									<h4 class="name">Jansan Kate</h4>
									<p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
								</div>
							</div> -->
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
					<div class="col-12">
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
												<a href="<?php echo site_url('user/News/loadNewsById/'.$n->NewsId); ?>" class="btn">View More</a>
											</div>
										</div>
									</div>
							<?php
								}
							?>
							<!--/ End Single Event -->
							<!-- Single Event -->
							<!-- <div class="single-event">
								<div class="head overlay">
									<img src="<?php echo base_url('resources/user/'); ?>images/events/event2.jpg" alt="#">
									<a href="<?php echo base_url('resources/user/'); ?>images/events/event2.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
								</div>
								<div class="event-content">
									<div class="meta">
										<span><i class="fa fa-calendar"></i>03 July 2018</span>
										<span><i class="fa fa-clock-o"></i>03.20-5.20PM</span>
									</div>
									<h4><a href="event-single.html">Best Student Award 2018</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
									<div class="button">
										<a href="event-single.html" class="btn">Join Event</a>
									</div>
								</div>
							</div> -->
							<!--/ End Single Event -->
							<!-- Single Event -->
							<!-- <div class="single-event">
								<div class="head overlay">
									<img src="<?php echo base_url('resources/user/'); ?>images/events/event3.jpg" alt="#">
									<a href="<?php echo base_url('resources/user/'); ?>images/events/event3.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
								</div>
								<div class="event-content">
									<div class="meta">
										<span><i class="fa fa-calendar"></i>15 Dec 2018</span>
										<span><i class="fa fa-clock-o"></i>12.30-5.30PM</span>
									</div>
									<div class="title">
										<h4><a href="event-single.html">Student Workshop</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
									</div>
									<div class="button">
										<a href="event-single.html" class="btn">Join Event</a>
									</div>
								</div>
							</div> -->
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
												<a href="<?php echo site_url('user/Community/loadForumById/'.$f->ForumId); ?>" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
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
		
		<?php include_once("footer.php"); ?>
		
		<?php include_once("bottomscripts.php"); ?>
</body>
</html>