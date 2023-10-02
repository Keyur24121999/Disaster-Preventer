<?php
    $uni="Update News Image";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $uni;?></title>
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
                        <?php echo $uni;?>
                        <div class="col-lg-12 col-sm-12">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card stacked-form">
                                            <div class="card-header ">
                                                <h4 class="card-title">Edit News Images Form</h4>
                                            </div>
                                            <div class="card-body ">
                                                <form method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/News/editNewsImage/'.$NewsImageId."/"."$NewsId") ?>">
                                                    <div class="form-group">
                                                        <label>News Image</label>
                                                        <input type="file" class="form-control" name="fup" required="" title="Select Image">
                                                    </div>
                                                    
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