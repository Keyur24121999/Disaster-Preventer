<?php
    $ae="Add Employees";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $ae;?></title>
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
                        <?php echo $ae;?>
                        <div class="col-lg-12 col-sm-12">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card stacked-form">
                                            <div class="card-header ">
                                                <h4 class="card-title">Add Employees Form</h4>
                                            </div>
                                            <div class="card-body ">
                                                <form method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/Employees/addEmp') ?>">
                                                    <div class="form-group">
                                                        <label>Employee Name</label>
                                                        <input type="text" class="form-control" name="txtEname" placeholder="Enter Employee Name" required="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>User Name</label>
                                                        <input type="text" class="form-control" name="txtUname" placeholder="Enter Username" required="" pattern="[A-Za-z]{0,50}" title="Only Alphabets Allowed">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" name="txtpass" placeholder="Enter Password" required="" pattern="[A-Za-z0-9]{0,50}" title="Only Alphabets Allowed">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" name="txtEmail" placeholder="Enter Email" required="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <input type="text" class="form-control" name="txtGender" placeholder="Enter Gender" required="" pattern="[A-Za-z]{0,6}" title="Only Alphabets Allowed">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>City Name</label>
                                                        <br>
                                                        <select class="form-control" name="txtCity">
                                                            <option value="-1">Select City</option>
                                                            <?php
                                                                foreach ($City as $c) 
                                                                {
                                                            ?>
                                                                    <option value="<?php echo $c->CityId; ?>">
                                                                        <?php
                                                                            echo $c->CityName;
                                                                        ?>
                                                                    </option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <input type="text" class="form-control" name="txtContact" placeholder="Enter Contact" required="" pattern="[0-9]{10}" title="Only Digits Allowed">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Cover Image</label>
                                                        <input type="file" class="form-control" name="fup" placeholder="Select Image" required="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Category Name</label>
                                                        <br>
                                                        <select class="form-control" name="txtCategory">
                                                            <option value="-1">Select Category</option>
                                                            <?php
                                                                foreach ($Cat as $c) 
                                                                {
                                                            ?>
                                                                    <option value="<?php echo $c->CategoryId ?>">
                                                                        <?php
                                                                            echo $c->CategoryName;
                                                                        ?>
                                                                    </option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" class="form-control" name="txtAddress" placeholder="Enter Address" required="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <input type="date" class="form-control" name="DOB" required="">
                                                    </div>

                                                    <!-- <?php
                                                        if (isset($Msg)) 
                                                        {
                                                    ?>
                                                            <div class="form-group">
                                                               <p style="color: red;">
                                                                   <?php echo $Msg; ?>
                                                               </p>
                                                            </div>
                                                    <?php        
                                                        }
                                                    ?> -->

                                                    <div class="card-footer ">
                                                        <button type="submit" class="btn btn-fill btn-info">Add Employee</button>
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