<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<title>Community Information</title>
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
						<h2>Community </h2>
						<ul class="bread-list">
							<li><a href="<?php echo site_url('user/EmpDemo'); ?>">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href=""><?php echo $Community[0]->Title; ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Courses -->
		<section class="courses single section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="single-main">
							<div class="row">
								<div class="col-lg-8 col-12">
									<!-- Single Course -->
									<div class="single-course">
										<div class="course-head">		
											<img src="<?php echo base_url('resources/shared/images/'.$Community[0]->CoverPic); ?>" alt="">
										</div>			
									</div>
									<!--/ End Single Course -->
								</div>	
								<div class="col-lg-4 col-12">
									<!-- Course Features -->
									<div class="course-feature">
										<div class="feature-main">
											<h4>Community Features</h4>
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-files-o"></i>
												<span class="label">Employees</span>
												<span class="value">
													<?php echo count($CommunityEmp)+1; ?>
														
													</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-puzzle-piece"></i>
												<span class="label">Users</span>
												<span class="value"><?php echo count($CommunityMember); ?></span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-clock-o"></i>
												<span class="label">Duration</span>
												<span class="value"><?php echo $Community[0]->CreatedDt; ?></span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-magic"></i>
												<span class="label">Skill Level</span>
												<span class="value">Beginner</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-user"></i>
												<span class="label">Forums</span>
												<span class="value"><?php echo count($Forum); ?></span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-check-square-o"></i>
												<span class="label">Certificate</span>
												<span class="value">Yes</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-check-square-o"></i>
												<span class="label">
													<a href="<?php echo site_url('user/EmpCommunity/loadAllRequest/'.$Community[0]->CommunityId); ?>" style="color: white;">
														Community Requests
													</a>
												</span>
												<span class="value"><?php echo count($Request); ?></span>
											</div>
											<!--/ End Single Feature -->
										</div>
									</div>
									<!--/ End Course Features -->
								</div>	
							</div>	
							<div class="row">
								<div class="col-12">
									<!-- Course Meta -->
									<div class="course-meta">
										<!-- Course Info -->
										<div class="course-info">
											<div class="single-info author">
												<img src="<?php echo base_url('resources/shared/images/'.$Community[0]->CoverImage); ?>" alt="">
												<h4>Employee:<a href=""><span><?php echo $Community[0]->UserName; ?></span></a></h4>
											</div>
											<div class="single-info category">
												<i class="fa fa-bolt"></i>
												<h4>Category<a href=""><span><?php echo $Community[0]->CategoryName; ?></span></a></h4>
											</div>
											<div class="single-info s-enroll">
												<i class="fa fa-users"></i>
												<h4>forums:
												<a href="<?php echo site_url('user/EmpCommunity/loadForumByCommunityId/'.$Community[0]->CommunityId); ?>">
													<span>View</span></h4>
												</a>	
											</div>
											<!-- <div class="single-info rattings">
												<i class="fa fa-clock-o"></i>
												<h4>Course Time:<span>05 Years</span></h4>
											</div> -->
										</div>
										<!--/ End Course Info -->
										<!-- Course Price -->
										<div class="course-price">
											<!-- <p>$33.50</p> -->
											<?php 
												if (isset($Msg)) 
												{
											?>
													<p style="color: red;">
														<?php echo $Msg; ?>
													</p>
											<?php		
												}
												else 
												{
											?>
													<a href="<?php echo site_url('user/EmpCommunity/addCommunityRequest/'.$Community[0]->CommunityId); ?>" class="btn"><i class="fa fa-users"></i>
														Join Community
													</a>
											<?php		
												}
											?>
											
											</div>
										<!--/ End Course Price -->
									</div>
									<!--/ End Course Meta -->
								</div>
								<div class="col-12">
									<div class="content">
										<h2><a href="">Description</a></h2>
										<p><?php echo $Community[0]->Description; ?></p>
										
									</div>
								</div>
								<div class="col-12">
									<div class="course-required">
										<h4>Employees</h4>
										<ul>
											<?php
												foreach ($CommunityEmp as $ce) 
												{
											?>

													<li><img height="50px" width="50px" src="<?php echo base_url('resources/shared/images/'.$ce->CoverImage); ?>">
														<?php echo $ce->UserName; ?>
													</li>
											<?php
												}
											?>	
											<li><img height="50px" width="50px" src="<?php echo base_url('resources/shared/images/'.$Community[0]->CoverImage); ?>"><?php echo $Community[0]->UserName; ?></li>
										</ul>
										<h4>Users</h4>
										<ul>
											<?php
												foreach ($CommunityMember as $cm) 
												{
											?>

													<li><img height="50px" width="50px" src="<?php echo base_url('resources/shared/images/'.$cm->ProfileImage); ?>">
														<?php echo $cm->Username; ?>
													</li>
											<?php
												}
											?>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Courses -->	
		
		<!-- Footer -->
		<?php include_once("footer.php"); ?>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <?php include_once("bottomscripts.php"); ?>
    </body>
</html>