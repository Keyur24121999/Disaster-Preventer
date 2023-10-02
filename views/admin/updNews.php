<?php
    $un="Update News";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $un;?></title>
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
                        <?php echo $un;?>
                        <div class="col-lg-12 col-sm-12">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card stacked-form">
                                            <div class="card-header ">
                                                <h4 class="card-title">Update News Form</h4>
                                            </div>
                                            <div class="card-body ">
                                                <form method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/News/editNews/'.$NewsId) ?>">
                                                    <div class="form-group">
                                                        <label>Topic</label>
                                                        <input type="text" value="<?php echo $News[0]->Topic; ?>" class="form-control" name="txtTopic" placeholder="Enter News Topic" required="" pattern="[A-Za-z]{0,50}" title="Only Alphabets Allowed">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>City Name</label>
                                                        <br>
                                                        <select class="form-control" name="txtCity">
                                                            <option value="-1">Select City</option>
                                                            <?php
                                                                foreach ($City as $c) {
                                                            ?>
                                                                <option value="<?= $c->CityId ?>" 
                                                                    <?php 
                                                                        if($c->CityId==$News[0]->CityId) 
                                                                        { 
                                                                    ?> selected 
                                                                    <?php 
                                                                        } 
                                                                    ?> >
                                                                    <?php echo $c->CityName ?>
                                                                    
                                                                </option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <input type="text" value="<?php echo $News[0]->Description; ?>" class="form-control" name="txtDes" placeholder="Enter Description" required="">
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
                                                                foreach ($Cat as $c) {
                                                            ?>
                                                                <option value="<?= $c->CategoryId ?>" 
                                                                    <?php 
                                                                        if($c->CategoryId==$News[0]->CategoryId) 
                                                                        { 
                                                                    ?> selected 
                                                                    <?php 
                                                                        } 
                                                                    ?> >
                                                                    <?php echo $c->CategoryName ?>
                                                                    
                                                                </option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
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
                                                        <button type="submit" class="btn btn-fill btn-info">Update</button>
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