<div class="sidebar-wrapper">
    <div class="logo">
        <a href="<?php echo site_url('admin/Demo');?>" class="simple-text logo-mini">
            DP
        </a>
        <!-- <div class="photo">
            <img style="height: 100px;width: 100px;" src="<?php echo base_url('resources/shared/images/Logo/onlinelogomaker-57.jpg')?>" />
        </div> -->
        <br>
        <br>
        <a style="text-align: left; margin-left: 26px;" href="<?php echo site_url('admin/Demo');?>" class="simple-text logo-normal">
            Disaster Preventer
        </a>
    </div>
    <div class="user">
        <div class="photo">
            <img src="<?php echo base_url('resources/shared/images/'.$_SESSION['propic'])?>" />
        </div>
        <div class="info ">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                <span><?php echo $_SESSION['aname']; ?>
                    <b class="caret"></b>
                </span>
            </a>
            <div class="collapse" id="collapseExample">
                <ul class="nav">
                    <li>
                        <a class="profile-dropdown" href="<?php echo site_url('admin/Profile');?>">
                            <span class="sidebar-mini">MP</span>
                            <span class="sidebar-normal">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="profile-dropdown" href="<?php echo site_url('admin/Profile/loadEditProfile/'.$_SESSION['aid']);?>">
                            <span class="sidebar-mini">EP</span>
                            <span class="sidebar-normal">Edit Profile</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a class="profile-dropdown" href="#pablo">
                            <span class="sidebar-mini">S</span>
                            <span class="sidebar-normal">Settings</span>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/Demo')?>">
                <i class="nc-icon nc-bank"></i>
                <p>Home</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/User')?>">
                <i class="nc-icon nc-single-02"></i>
                <p>User</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/Category')?>">
                <i class="nc-icon nc-cart-simple"></i>
                <p>Categories</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/Community')?>">
                <i class="nc-icon nc-planet"></i>
                <p>Community</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/Forum')?>">
                <i class="nc-icon nc-single-copy-04"></i>
                <p>Forum</p>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/News')?>">
                <i class="nc-icon nc-badge"></i>
                <p>News Feed</p>
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/Employees')?>">
                <i class="nc-icon nc-circle-09"></i>
                <p>Employees</p>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/CommunityMember')?>">
                <i class="nc-icon nc-single-02"></i>
                <p>Community Member</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/DonateDetails')?>">
                <i class="nc-icon nc-paper-2"></i>
                <p>Donate Details</p>
            </a>
        </li> -->
        <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/DonationRequest')?>">
                <i class="nc-icon nc-money-coins"></i>
                <p>Donate Request</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/CommunityMember')?>">
                <i class="nc-icon nc-single-02"></i>
                <p>Community Member</p>
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/State')?>">
                <i class="nc-icon nc-square-pin"></i>
                <p>State</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/City')?>">
                <i class="nc-icon nc-square-pin"></i>
                <p>City</p>
            </a>
        </li>
    </ul>
</div>