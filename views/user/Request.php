<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<title>Community Requests</title>
		<?php include_once('topscripts.php'); ?>	
    </head>
    <body>
	
		<!-- Header -->
		<?php include_once('header2.php'); ?>
		<!-- End Header -->
		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Community Requests</h2>
						<ul class="bread-list">
							<li><a href="<?php echo site_url('user/EmpDemo'); ?>">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="<?php echo site_url('user/EmpCommunity/loadAllRequest/'.$CommunityId); ?>">Requests</a></li>
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
							<h2>Community <span>Requests</span></h2>
							<p>All Community Requests Will Appear Here...If you will Accept the Request than User will be the member of the Community otherwise Request will be deleted...</p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
						foreach ($Request as $r) 
						{
					?>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Event -->
								<div class="single-event">
									<div class="head overlay">
										<img src="<?php echo base_url('resources/shared/images/'.$r->ProfileImage) ?>" alt="">
										<a href="" class="btn"><i class="fa fa-search"></i></a>
									</div>
									<div class="event-content">
										<div class="meta"> 
											<span><i class="fa fa-phone"></i><?php echo $r->MobileNo; ?></span>
											<span><i class="fa fa-envelope-o"></i><?php echo $r->Email; ?></span>
										</div>
										<h4><a href=""><?php echo $r->Username; ?></a></h4>
										<p></p>
										<div class="button">
											<a href="<?php echo site_url('user/EmpCommunity/addCommunityMember/'.$CommunityId."/".$r->UserId); ?>" class="btn">Accept</a>
											<a href="<?php echo site_url('user/EmpCommunity/removeCommunityRequest/'.$CommunityId."/".$r->UserId); ?>" class="btn">Decline</a>
										</div>
									</div>
								</div>
								<!--/ End Single Event -->
							</div>
					<?php
						}
					?>
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
		<?php include_once('footer.php'); ?>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <?php include_once('bottomscripts.php'); ?>
    </body>
</html>