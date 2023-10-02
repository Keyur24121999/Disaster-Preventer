<?php
    $af="All Forum";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $af;?></title>
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
                <?php echo $af;?>
                <br>
                <!-- <a href="<?php echo site_url('admin/Category/loadAddCat')?>" class="btn btn-primary">Add Category</a> -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Forum ID</th>
                                  <th>Title of Forum</th>
                                  <th>Description of Forum</th>
                                  <th>Post Image</th>
                                  <th>User Name</th>
                                  <th>Created Date</th>
                                  <th>Community</th>
                                  <th>Messages</th>
                                  <th>Likes</th>
                                  <th>Delete</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                foreach ($forum as $f) 
                                {
                                ?>
                                <tr>
                                  <td><?php echo $f->ForumId?></td>
                                  <td><?php echo $f->Title?></td>
                                  <td><?php echo $f->Description?></td>
                                  <td><img style="width: 100px" src="<?php echo base_url("resources/shared/images/$f->PostImage")?>" height="150px"></td>
                                  <!-- <td><?php echo $f->ctl?></td> -->
                                  <td><?php echo $f->Username?></td>
                                  <td><?php echo $f->CreatedDt?></td>
                                  <td><a href="<?php echo site_url("admin/Forum/loadCommunity/".$f->ForumId)?>">Details</a></td>
                                  <td><a href="<?php echo site_url("admin/Forum/loadComments/".$f->ForumId)?>">Comments</a></td>
                                  <td><a href="<?php echo site_url("admin/Forum/loadLikes/".$f->ForumId)?>">Likes</a></td>
                                  <td><a href="<?php echo site_url("admin/Forum/removeForum/".$f->ForumId)?>">Delete</a></td>
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