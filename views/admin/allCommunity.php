<?php
    $allc="All Communities";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $allc;?></title>
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
              <?php echo $allc;?>
                <!-- <a href="<?php echo site_url('admin/Category/loadAddCat')?>" class="btn btn-primary">Add Category</a> -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Community ID</th>
                                  <th>Title</th>
                                  <th>Status</th>
                                  <th>Created Date</th>
                                  <th>Employee Name</th>
                                  <th>Cover Image</th>
                                  <th>Description</th>
                                  <th>Category Name</th>
                                  <th>Address</th>
                                  <th>City Name</th>
                                  <th>Delete</th>
                                  <!-- <th>Update</th> -->
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                foreach ($comm as $c) 
                                {
                                ?>
                                <tr>
                                  <td><?php echo $c->CommunityId?></td>
                                  <td><?php echo $c->Title?></td>
                                  <td>
                                    <?php 
                                      if ($c->Status == 1) 
                                      {
                                    ?>
                                        <p style="color: green;">
                                        <?php
                                          echo "Active";
                                        ?>
                                      </p>
                                    <?php
                                      }
                                      else
                                      {
                                    ?>
                                        <p style="color: red;">
                                        <?php
                                          echo "Deactive";
                                        ?>
                                      </p>
                                    <?php  
                                      }

                                    ?>
                                    
                                  </td>
                                  <td><?php echo $c->CreatedDt?></td>
                                  <td><?php echo $c->EmployeeName?></td>
                                  <td><img src="<?php echo base_url("resources/shared/images/$c->CoverPic")?>" height="100px" ></td>
                                  <td><?php echo $c->Description?></td>
                                  <td><?php echo $c->CategoryName?></td>
                                  <td><?php echo $c->Address?></td>
                                  <td><?php echo $c->CityName?></td>
                                  <td><a href="<?php echo site_url("admin/Community/removeCommunity/".$c->CommunityId)?>">Delete</a></td>
                                  <!-- <td><a href="<?php echo site_url("admin/Community/loadEditCummunity/".$c->CategoryId)?>">Update</a></td> -->
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