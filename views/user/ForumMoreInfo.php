<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<title>Forum</title>
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
						<h2>Forums</h2>
						<ul class="bread-list">
							<li><a href="<?php echo site_url('user/UserDemo'); ?>">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="<?php echo site_url('user/Community/loadForumById/'.$ForumId); ?>">Forums</a></li>
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
									<img src="<?php echo base_url('resources/shared/images/'.$Forum[0]->PostImage); ?>" alt="">
								</div>
								<div class="single-gallery">
									<!-- <img src="" alt=""> -->
								</div>
								<div class="single-gallery">
									<!-- <img src="" alt="	"> -->
								</div>
							</div>
							<div class="event-content">
								<div class="meta"> 
									<span><i class="fa fa-calendar"></i><?php echo $Forum[0]->CreatedDt; ?></span>
									<!-- <span><i class="fa fa-clock-o"></i>12.00-5.00PM</span> -->
								</div>
								<h2><a href=""><?php echo $Forum[0]->Title; ?></a></h2>
								<p><?php echo $Forum[0]->Description; ?></p>
								<p>Community:--</p>
								<img src="<?php echo base_url('resources/shared/images/'.$Forum[0]->CoverPic); ?>" alt="">
								<p> <?php echo $Forum[0]->desc; ?></p>
								<div class="book-now">
									<div class="button">
										<form method="post" action="<?php echo site_url('user/Community/addMessage/'.$ForumId."/".$Forum[0]->CommunityId); ?>">
											
											<input type="textarea" name="txtMsg" placeholder="Enter Comment Here">
											<br>
											<br>
											<input type="submit" class="btn" name="btnComment" value="Comment">
										<form>
									</div>
									
									<!-- <ul class="social">
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus "></i></a></li>
										<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									</ul> -->
								</div>
								<br>
								<br>
								<div class="book-now">
										<div class="button">
											<?php
												if ($likeStatus=="No")
												{
											?>
												<a style="color: blue;" href="<?php echo site_url('user/Community/like/'.$ForumId)?>">
													 ❤ Like
												</a>

											<?php
												}
												else
												{
											?>
												<a style="color: red;" href="<?php echo site_url('user/Community/unlike/'.$ForumId)?>">
													 ❤ UnLike
												</a>
											<?php		
												}
											?>
										</div>
									</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="learnedu-sidebar">
							<div class="search">
								<div class="form">
									<input type="email" placeholder="Search ...">
									<button class="button" href=""><i class="fa fa-search"></i></button>
								</div>
							</div>
							<!-- Categories -->
							<!-- <div class="single-widget categories">
                                <h3 class="title">Categories</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Education Tips<span>16</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>General Knowledge<span>30</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Tips for success<span>80</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Student Life<span>23</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Courses<span>28</span></a></li>
                                </ul>
                            </div> -->
							<!--/ End Categories -->
							<div class="single-widget course">
								<h3>Forums <span>Comments</span></h3>
								<!-- Single Course -->
								<?php
									foreach ($ForumPost as $fp) 
									{
								?>
										<div class="single-course">
											<img src="<?php echo base_url('resources/shared/images/'.$fp->ProfileImage); ?>" alt="">
											<div class="course-content">
												<h4><a href=""><?php echo $fp->Username; ?></a></h4>
												<div class="meta"><?php echo $fp->Messages; ?> <span><i class="fa fa-clock-o"></i><?php echo $fp->dt; ?></span></div>
											</div>
										</div>
								<?php
									}
								?>	
							</div>

							<div class="single-widget course">
								<h3>Forums <span>Likes</span></h3>
								<!-- Single Course -->
								<?php
									foreach ($Like as $l) 
									{
								?>
										<div class="single-course">
											<img src="<?php echo base_url('resources/shared/images/'.$l->ProfileImage); ?>" alt="">
											<div class="course-content">
												<h4><a href=""><?php echo $l->Username; ?></a></h4>
												<div class="meta">
													<?php echo $l->CityName; ?>
												</div>
											</div>
										</div>
								<?php
									}
								?>	
							</div>

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