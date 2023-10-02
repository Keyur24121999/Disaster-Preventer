<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
	<title>All News Feed</title>
		<?php include_once('topscripts.php');; ?>
    </head>
    <body>
	
	
		<!-- Header -->
		<?php include_once('header1.php');; ?>		
		<!-- End Header -->
		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>News By Title</h2>
						<ul class="bread-list">
							<li><a href="<?php echo site_url("user/UserDemo"); ?>">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="<?php echo site_url("user/News"); ?>">News Feed</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
	
		<!-- Blogs -->
		<section class="blog b-archives section">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-12">
						<div class="learnedu-sidebar left">
							<form method="post" action="<?php echo site_url('user/News/loadNewsByTitle'); ?>">
								<div class="search">
									<div class="form">
										<input type="text" name="txtTopic" placeholder="Search By News Topic">
										<button class="button"><i class="fa fa-search"></i></button>
									</div>
								</div>
							</form>
							<!-- Categories -->
							<div class="single-widget categories">
                                <h3 class="title">Categories</h3>
                                <ul>
                                    <?php
                                    	foreach ($Categories as $c) 
                                    	{
                                    ?>
											<li>
												<a href="<?php echo site_url('user/News/loadNewsByCategoryId/'.$c->CategoryId); ?>"><i class="fa fa-angle-right"></i>	<?php echo $c->CategoryName; ?>
												</a>
											</li>
                                    <?php
                                    	}
                                    ?>
                                </ul>
                            </div>
							<!--/ End Categories -->
							<!-- Posts -->
							<!-- <div class="single-widget posts">
								<h3>Recent <span>Posts</span></h3>
								<div class="single-post">
									<div class="post-img">
										<img src="images/blog/blog1.jpg" alt="">
									</div>
									<div class="post-info">
										<h4><a href="#">Sed libero justo, tempus sit amet efficitur auctor</a></h4>
										<span><i class="fa fa-calendar"></i>May 05, 2018</span>
									</div>
								</div>
								<div class="single-post">
									<div class="post-img">
										<img src="images/blog/blog2.jpg" alt="">
									</div>
									<div class="post-info">
										<h4><a href="#">velit mauris pharetra ligula, luctus suscipit dui dui </a></h4>
										<span><i class="fa fa-calendar"></i>April 10, 2018</span>
									</div>
								</div>
								<div class="single-post">
									<div class="post-img">
										<img src="images/blog/blog3.jpg" alt="">
									</div>
									<div class="post-info">
										<h4><a href="#"> Aenean congue laoreet velit a varius. Nulla facilisi.</a></h4>
										<span><i class="fa fa-calendar"></i>March 15, 2018</span>
									</div>
								</div>
								<div class="single-post">
									<div class="post-img">
										<img src="images/blog/blog1.jpg" alt="">
									</div>
									<div class="post-info">
										<h4><a href="#">Ut malesuada sed lorem sagittis ullamcorper Class </a></h4>
										<span><i class="fa fa-calendar"></i>Feb 29, 2018</span>
									</div>
								</div>
								<div class="single-post">
									<div class="post-img">
										<img src="images/blog/blog2.jpg" alt="">
									</div>
									<div class="post-info">
										<h4><a href="#">Nunc id arcu eros. Proin nec mattis elit. Nulla ut odio</a></h4>
										<span><i class="fa fa-calendar"></i>Jan 11, 2018</span>
									</div>
								</div>
							</div> -->
							<!--/ End Posts -->
							<!-- <div class="single-widget course">
								<h3>Popular <span>Courses</span></h3>
								
								<div class="single-course">
									<img src="images/course/course1.jpg" alt="#">
									<div class="course-content">
										<h4><a href="#">Web Design Course</a></h4>
										<div class="meta">$900.00, <span><i class="fa fa-clock-o"></i>3 Years</span></div>
									</div>
								</div>
								
								<div class="single-course">
									<img src="images/course/course2.jpg" alt="#">
									<div class="course-content">
										<h4><a href="#">Business Management Course</a></h4>
										<div class="meta">$150.00, <span><i class="fa fa-clock-o"></i>1 Year</span></div>
									</div>
								</div>
								<div class="single-course">
									<img src="images/course/course3.jpg" alt="#">
									<div class="course-content">
										<h4><a href="#">Software Engineer Course</a></h4>
										<div class="meta">$500.00, <span><i class="fa fa-clock-o"></i>6 Month</span></div>
									</div>
								</div>
								<div class="single-course">
									<img src="images/course/course4.jpg" alt="#">
									<div class="course-content">
										<h4><a href="#">Master in website Development Course</a></h4>
										<div class="meta">$200.00, <span><i class="fa fa-clock-o"></i>1 Year</span></div>
									</div>
								</div>
									<img src="images/course/course5.jpg" alt="#">
									<div class="course-content">
										<h4><a href="#">Zero to Hero Cources</a></h4>
										<div class="meta">$300.00, <span><i class="fa fa-clock-o"></i>2 Years</span></div>
									</div>
								</div>
								 
							</div> -->
							<!-- <div class="single-widget tags">
								<h3>Recent <span>Tags</span></h3>
								<ul>
									<li><a href="">Course</a></li>
									<li><a href="">University</a></li>
									<li><a href="">Scholarship</a></li>
									<li><a href="">Free</a></li>
									<li><a href="">Standard</a></li>
									<li><a href="">Standard</a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="col-lg-8 col-12">
						<div class="row">
							<?php
								foreach ($News as $n) 
								{
							?>
									<div class="col-lg-6 col-12">
										<!-- Single Blog -->
										<div class="single-blog">
											<div class="blog-head overlay">
												<div class="date">
													<h4 style="text-align: center;margin-top: 13px;">
														<span style="font-size: 12px">
														<?php echo $n->CreatedDt; ?>	
														</span>
													</h4>
												</div>
												<img src="<?php echo base_url('resources/shared/images/'.$n->CoverImage ); ?>" alt="" >
											</div>
											<div class="blog-content">
												<h4 class="blog-title">
													<a href="">
														<?php echo $n->Topic; ?>
													</a>
												</h4>
												<div class="blog-info">
													<a href=""><i class="fa fa-user"></i>By: Admin</a>
												</div>
												<p>
													<?php echo $n->Description; ?>
												</p>
												<div class="button">
													<a href="<?php echo site_url('user/News/loadNewsById/'.$n->NewsId); ?>" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
												</div>
											</div>
										</div>
										<!-- End Single Blog -->
									</div>
							<?php		
								}
							?>
							<!-- <div class="col-lg-6 col-12">
								
								<div class="single-blog">
									<div class="blog-head overlay">
										<div class="date">
											<h4>20<span>Mar</span></h4>
										</div>
										<img src="images/blog/blog2.jpg" alt="#">
									</div>
									<div class="blog-content">
										<h4 class="blog-title"><a href="blog-single.html">Our teachers egestas erat dignissim</a></h4>
										<div class="blog-info">
											<a href="#"><i class="fa fa-user"></i>By: Admin</a>
											<a href="#"><i class="fa fa-list"></i>Academic</a>
											<a href="#"><i class="fa fa-heart-o"></i>33K</a>
										</div>
										<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
										<div class="button">
											<a href="#" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
							</div> -->
							<!-- <div class="col-lg-6 col-12">
								
								<div class="single-blog">
									<div class="blog-head overlay">
										<div class="date">
											<h4>10<span>Mar</span></h4>
										</div>
										<img src="images/blog/blog3.jpg" alt="#">
									</div>
									<div class="blog-content">
										<h4 class="blog-title"><a href="blog-single.html">We are Proffesional Have velit Landon</a></h4>
										<div class="blog-info">
											<a href="#"><i class="fa fa-user"></i>By: Admin</a>
											<a href="#"><i class="fa fa-list"></i>Knowledge</a>
											<a href="#"><i class="fa fa-heart-o"></i>11K</a>
										</div>
										<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
										<div class="button">
											<a href="#" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
							</div> -->
							<!-- <div class="col-lg-6 col-12">
								
								<div class="single-blog">
									<div class="blog-head overlay">
										<div class="date">
											<h4>15<span>Feb</span></h4>
										</div>
										<img src="images/blog/blog4.jpg" alt="#">
									</div>
									<div class="blog-content">
										<h4 class="blog-title"><a href="blog-single.html">Our Student Have sit amet egestas</a></h4>
										<div class="blog-info">
											<a href="#"><i class="fa fa-user"></i>By: Admin</a>
											<a href="#"><i class="fa fa-list"></i>Learning</a>
											<a href="#"><i class="fa fa-heart-o"></i>53K</a>
										</div>
										<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
										<div class="button">
											<a href="#" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
							</div> -->
							<!-- <div class="col-lg-6 col-12">
								<div class="single-blog">
									<div class="blog-head overlay">
										<div class="date">
											<h4>01<span>Feb</span></h4>
										</div>
										<img src="images/blog/blog5.jpg" alt="#">
									</div>
									<div class="blog-content">
										<h4 class="blog-title"><a href="blog-single.html">Our teachers egestas erat dignissim</a></h4>
										<div class="blog-info">
											<a href="#"><i class="fa fa-user"></i>By: Admin</a>
											<a href="#"><i class="fa fa-list"></i>Academic</a>
											<a href="#"><i class="fa fa-heart-o"></i>33K</a>
										</div>
										<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
										<div class="button">
											<a href="#" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
							</div> -->
							<!-- <div class="col-lg-6 col-12">
								<div class="single-blog">
									<div class="blog-head overlay">
										<div class="date">
											<h4>02<span>Jan</span></h4>
										</div>
										<img src="images/blog/blog6.jpg" alt="#">
									</div>
									<div class="blog-content">
										<h4 class="blog-title"><a href="blog-single.html">We are Proffesional Have velit Landon</a></h4>
										<div class="blog-info">
											<a href="#"><i class="fa fa-user"></i>By: Admin</a>
											<a href="#"><i class="fa fa-list"></i>Knowledge</a>
											<a href="#"><i class="fa fa-heart-o"></i>11K</a>
										</div>
										<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
										<div class="button">
											<a href="#" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
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
				</div>
			</div>
		</section>
		<!--/ End Blogs -->
	
		<!-- Footer -->
		<?php include_once('footer.php'); ?>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <?php include_once('bottomscripts.php'); ?>
    </body>
</html>