<?php
    $an="All News";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $an;?></title>
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
                <?php echo $an;?>
                <br>
                <a href="<?php echo site_url('admin/News/loadAddNews')?>" class="btn btn-primary">Add News Feed</a>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Topic</th>
                                  <th>Status</th>
                                  <th>Date</th>
                                  <th>Cover Image</th>
                                  <th>Description</th>
                                  <th>City Name</th>
                                  <th>Category Name</th>
                                  <th>View More</th>
                                  <th>Update</th>
                                  <th>Add Images</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                foreach ($News as $n) 
                                {
                                ?>
                                <tr>
                                  <td><?php echo $n->Topic?></td>
                                  <td>
                                    <?php
                                      if ($n->Status==1) 
                                      {
                                    ?>
                                        <p style="color: green"> 
                                    <?php
                                        echo "Active";
                                    ?>
                                        </p>
                                    <?php    
                                      }
                                      else 
                                      {
                                    ?>
                                        <p style="color: red"> 
                                    <?php  
                                        echo "Deactive";
                                    ?>
                                        </p>
                                    <?php 
                                      }
                                    ?>
                                  </td>
                                  <td><?php echo $n->CreatedDt?></td>
                                  <td><img src="<?php echo base_url('resources/shared/images/'.$n->CoverImage); ?>" height="250px" width="300px"></td>
                                  <td><?php echo $n->Description?></td>
                                  <td><?php echo $n->CityName?></td>
                                  <td><?php echo $n->CategoryName?></td>
                                  <td><a href="<?php echo site_url("admin/News/loadNewsImagesByNewsId/".$n->NewsId)?>">View</a></td>
                                  <td><a href="<?php echo site_url("admin/News/loadeditNews/".$n->NewsId)?>">Update</a></td>
                                  <td><a href="<?php echo site_url("admin/News/loadaddImages/".$n->NewsId)?>">Add</a></td>
                                </tr>
                                <?php
                                }
                                ?>
                              </tbody>
                            </table>
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