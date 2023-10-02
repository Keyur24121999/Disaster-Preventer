<?php
    $title="Update Profile";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title;?></title>
    <?php include_once("top-scripts.php");?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '<?php echo base_url('resources/admin/')?>www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
    <!-- End Google Tag Manager -->
    </head>

    <body>
      <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="<?php echo base_url('resources/admin/')?>assets/img/sidebar-5.jpg">
        <!--Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        Tip 2: you can also add an image using data-image tag-->
        <?php include_once("nav.php"); ?>     
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include_once("header.php");?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card stacked-form">
                                            <div class="card-header ">
                                                <h4 class="card-title">Upadte Admin Basic Details Form</h4>
                                            </div>
                                            <div class="card-body ">
                                                <form method="post" action="<?php echo site_url('admin/Profile/editBasicProfile/'.$Admin[0]->AdminId) ?>">
                                                    <div class="form-group">
                                                        <label>Admin Name</label>
                                                        <input type="text" class="form-control" name="txtAname" value="<?php echo $Admin[0]->Username?>">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" name="txtEmail" value="<?php echo $Admin[0]->Email?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Contact No</label>
                                                        <input type="text" pattern="[0-9]{10}" title="Only 10 Digits Allowed" class="form-control" name="txtContact" value="<?php echo $Admin[0]->ContactNo?>">
                                                    </div>

                                                    <div class="card-footer ">
                                                        <button type="submit" class="btn btn-fill btn-info">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>

                                        <div class="card stacked-form">
                                            <div class="card-header ">
                                                <h4 class="card-title">Upadte Admin Password Form</h4>
                                            </div>
                                            <div class="card-body ">
                                                <form method="post" action="<?php echo site_url('admin/Profile/editPassword/'.$Admin[0]->AdminId) ?>">
                                                    <div class="form-group">
                                                        <label>Old Password</label>
                                                        <input type="text" class="form-control" name="txtOldPwd" value="" placeholder="Enter Old Password">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <input type="text" class="form-control" name="txtNewPwd" placeholder="Enter New Password">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Confirm Password</label>
                                                        <input type="password" class="form-control" name="txtConPwd" placeholder="Confirm Your Password">
                                                    </div>
                                                    
                                                    <?php
                                                        if (isset($Msg)) 
                                                        {
                                                    ?>
                                                            <div class="form-group">
                                                                <p style="color: red">
                                                                    <?php
                                                                        echo $Msg;
                                                                    ?>
                                                                </p>
                                                            </div>
                                                    <?php
                                                        }
                                                    ?>

                                                    <?php
                                                        if (isset($Err)) 
                                                        {
                                                    ?>
                                                            <div class="form-group">
                                                                <p style="color: red">
                                                                    <?php
                                                                        echo $Err;
                                                                    ?>
                                                                </p>
                                                            </div>
                                                    <?php
                                                        }
                                                    ?>

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-fill btn-info">Change Password</button>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>

                                        <div class="card stacked-form">
                                            <div class="card-header ">
                                                <h4 class="card-title">Upadte Admin Profile Image Form</h4>
                                            </div>
                                            <div class="card-body ">
                                                <form method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/Profile/editImage/'.$Admin[0]->AdminId) ?>">
                                                    <div class="form-group">
                                                        <label>Select Image</label>
                                                        <input type="file" class="form-control" name="fup" title="Select Image" >
                                                    </div>
                                                    
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-fill btn-info">Change Image</button>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            
                        </div>                  
                    </div>
                </div>
            </div>
            <?php include_once("footer.php"); ?>
        </div>
    </div>                        
                                        
</body>
<!--   Core JS Files   -->
<?php include_once("bottom-scripts.php");?>
</html>