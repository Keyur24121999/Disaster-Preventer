<!--Header -->
<header class="header">
	<!-- Topbar -->
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-12">
					<!-- Contact -->
					<ul class="content">
                        <li>
                            <i class="fa fa-phone"></i>
                                +1-(437)-262-2412
                                <br>
                            <i class="fa fa-phone"></i>
                                +1-(437)-265-1345
                                <br>
                            <i class="fa fa-phone"></i>
                                +1-(437)-231-8765
                        </li>
                        <li>
                            <a href="mailto:info@yourdomain.com">
                                <i class="fa fa-envelope-o"></i>
                                kananikeyur26@gmail.com
                            </a>
                            <br>
                            <a href="mailto:info@yourdomain.com">
                                <i class="fa fa-envelope-o"></i>
                                viveksakhiya7777777@gmail.com
                            </a>
                            <br>
                            <a href="mailto:info@yourdomain.com">
                                <i class="fa fa-envelope-o"></i>
                                axaynayi5567@gmail.com
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-clock-o"></i>
                            Opening: 24/7
                            <br>
                            <i class="fa fa-clock-o"></i>
                            Contact Any Time
                            <br>
                            <i class="fa fa-clock-o"></i>
                            Available To Support
                        </li>
                    </ul>
					<!-- End Contact -->
				</div>
				<div class="col-lg-4 col-12">
					<!-- Social -->
					<!-- <ul class="social">
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-google-plus "></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-behance"></i></a></li>
						<li><a href=""><i class="fa fa-dribbble"></i></a></li>
						<li><a href=""><i class="fa fa-youtube"></i></a></li>
					</ul> -->
					<!-- End Social -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Topbar -->
	<!-- Header Inner -->
	<div class="header-inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-12">
					<div class="logo">
						<a href="">
							<img src="<?php echo base_url('resources/shared/images/Logo/onlinelogomaker-50x100.jpg') ?>" alt="">
							<b style="font-family: ariel;font-size: 19px;color: #12A3EC;">Disaster</b> 
							<b style="font-family: ariel;font-size: 19px;color: orange;">Preventor</b>
						</a>
					</div>
					<div class="mobile-menu"></div>
				</div>
				<div class="col-lg-9 col-md-9 col-12">
					<!-- Header Widget -->
					<div class="header-widget">
                        <div class="single-widget">
                            <i class="fa fa-phone"></i>
                            <h4>
                                Call Now
                                <span>+1-(437)-262-2412</span>
                                <span>+1-(437)-265-1345</span>
                                <span>+1-(437)-231-8765</span>
                            </h4>
                        </div>
                        <div class="single-widget">
                            <i class="fa fa-envelope-o"></i>
                            <h4>
                                Send Message
                                <a href="mailto:mailus@mail.com">
                                    <span>kananikeyur26@gmail.com</span>
                                </a>
                                <a href="mailto:mailus@mail.com">
                                    <span>viveksakhiya7777777@gmail.com</span>
                                </a>
                                <a href="mailto:mailus@mail.com">
                                    <span>axaynayi5567@gmail.com</span>
                                </a>
                            </h4>
                        </div>
                        <div class="single-widget">
                            <i class="fa fa-map-marker"></i>
                            <h4>
                                Our Location
                                <span>125-Charlotte Street</span>
                                <span>125-Charlotte Street</span>
                                <span>125-Charlotte Street</span>
                            </h4>
                        </div>
                    </div>
					<!--/ End Header Widget -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Header Inner -->
	<!-- Header Menu -->
	<div class="header-menu">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-default">
						<div class="navbar-collapse">
							<!-- Main Menu -->
							<ul id="nav" class="nav menu navbar-nav">
								<li class="active"><a href="<?php echo site_url('user/EmpDemo'); ?>">Home</a>
									
								</li>
								
								<li><a href="<?php echo site_url('user/EmpCommunity'); ?>">Communities<i class="fa fa-angle-down"></i></a> 
									<ul class="dropdown">
										<li><a href="<?php echo site_url('user/EmpCommunity'); ?>">All Communities</a></li>
										<li><a href="<?php echo site_url('user/EmpCommunity/loadCommunityByEmployeeId'); ?>">My Communities</a></li>
										<!-- <li><a href="">Course Single Video</a></li> -->
									</ul>
								</li>
								
								<li><a href="<?php echo site_url("user/EmpNews"); ?>">News<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown">
										<li><a href="<?php echo site_url("user/EmpNews"); ?>">All News</a></li>
										<!-- <li><a href=""></a></li>
										<li><a href="">Blogs Right Sidebar</a></li>
										<li><a href="">Blogs Single - Left Sidebar</a></li>
										<li><a href="">Blogs Single - Right Sidebar</a></li> -->
									</ul>
								</li>
								<!-- <li><a href="<?php echo site_url('user/EmpDemo/loadAboutUs'); ?>">About Us</a></li> -->
								<li><a href="<?php echo site_url('user/Profile/loadEmp/'.$_SESSION['eid']); ?>">Profile<i class="fa fa-angle-down"></i></a> 
									<ul class="dropdown">
										<li><a href="<?php echo site_url('user/Profile/loadEmp/'.$_SESSION['eid']); ?>">My Profile</a></li>
										<li><a href="<?php echo site_url('user/Profile/loadEmpEditProfile/'.$_SESSION['eid']); ?>">Edit Profile</a></li>
										<!-- <li><a href="">Course Single Video</a></li> -->
									</ul>
								</li>
							</ul>
							<!-- End Main Menu -->
							<!-- button -->
							<div class="button">
								<a href="<?php echo site_url("user/EmpDemo/logout"); ?>" class="btn"><i class="fa fa-pencil"></i>LogOut</a>
							</div>
							<!--/ End Button -->
						</div> 
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Header Menu -->
</header>
<!-- End Header