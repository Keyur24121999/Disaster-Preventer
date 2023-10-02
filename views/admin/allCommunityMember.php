<?php
    $acm="All Community Member";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $acm;?></title>
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
                <?php echo $acm;?>
                <br>
                <!-- <a href="<?php echo site_url('admin/State/loadAddState')?>" class="btn btn-primary">Add State</a> -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Community Member ID</th>
                                  <th>Community Name</th>
                                  <th>User Name</th>
                                  <th>Status</th>
                                  <th>Delete</th>
                                  <th>Block</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                foreach ($commem as $cm) 
                                {
                                ?>
                                <tr>
                                  <td><?php echo $cm->CommunityMemberId?></td>
                                  <td><?php echo $cm->Title?></td>
                                  <td><?php echo $cm->Username?></td>
                                  <td>
                                    <?php 
                                      if ($cm->Status == 0)
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
                                          echo "Blocked";
                                        ?>
                                      </p>
                                    <?php  
                                      }

                                    ?>
                                    
                                  </td>
                                  <td><a href="<?php echo site_url("admin/CommunityMember/removeCommunityMember/".$cm->CommunityMemberId)?>">Delete</a></td>
                                  <td>
                                    <?php 
                                      if ($cm->Status == 1) 
                                      {
                                    ?> 
                                          <a href="<?php echo site_url("admin/CommunityMember/UnblockMember/".$cm->CommunityMemberId)?>">Unblock</a>
                                    <?php
                                      }
                                      else
                                      {
                                    ?>
                                          <a href="<?php echo site_url("admin/CommunityMember/BlockMember/".$cm->CommunityMemberId)?>">Block</a>
                                    <?php
                                      }
                                    ?>
                                    
                                  </td>
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