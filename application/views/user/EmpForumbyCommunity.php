<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<title>Forums</title>
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
						<h2>Forums</h2>
						<ul class="bread-list">
							<li><a href="<?php echo site_url('user/EmpDemo'); ?>">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="<?php echo site_url('user/EmpCommunity/loadForumByCommunityId/'.$CommunityId); ?>">Forums</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Events -->
		<section class="events archives section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Forums <span>of Community</span></h2>
							<p>All Forums that have been Posted in this Community will Appear Here</p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
						if (isset($Post)) 
						{
							
						
							foreach ($Post as $p) 
							{
					?>

								<div class="col-lg-4 col-md-6 col-12">
									
									<div class="single-event">
										<div class="head overlay">
											<img src="<?php echo base_url('resources/shared/images/'.$p->PostImage); ?>" alt="">
											<a href="" class="btn"><i class="fa fa-search"></i></a>
										</div>
										<div class="event-content">
											<div class="meta"> 
												<span><i class="fa fa-calendar"></i><?php echo $p->CreatedDt; ?></span>
												<!-- <span><i class="fa fa-clock-o"></i>12.00-5.00PM</span> -->
											</div>
											<h4><a href="">
												<?php echo $p->Title; ?>
											</a></h4>
											<p>
												<?php echo $p->Description; ?>
											</p>
											<div class="button">
												<a href="<?php echo site_url('user/EmpCommunity/loadForumById/'.$p->ForumId); ?>" class="btn">View More</a>
											</div>
										</div>
									</div>
									
								</div>
					<?php		
							}
						}
					?>
					<?php
						if (isset($Msg)) 
						{
					?>
							<p><?php echo $Msg; ?></p>
					<?php
						}
					?>
					<!-- <div class="col-lg-4 col-md-6 col-12">
						
						<div class="single-event">
							<div class="head overlay">
								<img src="images/events/event2.jpg" alt="#">
								<a href="#" class="btn"><i class="fa fa-search"></i></a>
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
						</div>
						
					</div>	
					<div class="col-lg-4 col-md-6 col-12">
						
						<div class="single-event">
							<div class="head overlay">
								<img src="images/events/event3.jpg" alt="#">
								<a href="#" class="btn"><i class="fa fa-search"></i></a>
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
						</div>
						
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						
						<div class="single-event">
							<div class="head overlay">
								<img src="images/events/event1.jpg" alt="#">
								<a href="#" class="btn"><i class="fa fa-search"></i></a>
							</div>
							<div class="event-content">
								<div class="meta"> 
									<span><i class="fa fa-calendar"></i>05 June 2018</span>
									<span><i class="fa fa-clock-o"></i>12.00-5.00PM</span>
								</div>
								<h4><a href="event-single.html">Opening Day Reception ceremony</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
								<div class="button">
									<a href="event-single.html" class="btn">Join Event</a>
								</div>
							</div>
						</div>
						
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						
						<div class="single-event">
							<div class="head overlay">
								<img src="images/events/event2.jpg" alt="#">
								<a href="#" class="btn"><i class="fa fa-search"></i></a>
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
						</div>
						
					</div>	
					<div class="col-lg-4 col-md-6 col-12">
						
						<div class="single-event">
							<div class="head overlay">
								<img src="images/events/event3.jpg" alt="#">
								<a href="#" class="btn"><i class="fa fa-search"></i></a>
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
						</div>
						
					</div> -->
				</div>
				<!-- <div class="row">
					<div class="col-12">
						
						<div class="pagination-main">
							<ul class="pagination">
								<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
								<li><a href="#">1</a></li>
								<li class="active"><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
						
					</div>
				</div> -->
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