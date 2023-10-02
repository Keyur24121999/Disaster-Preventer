<?php
  $add="All Donation Details";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $add;?></title>
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
              <!-- <a href="<?php echo site_url('admin/Employees/loadAddEmp')?>" class="btn btn-primary">Add Empoloyees</a> -->
                <div class="container-fluid">
                    <div class="row">
                      <?php echo $add;?>
                        <div class="col-lg-12 col-sm-12">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Donate Details ID</th>
                                  <th>User Name</th>
                                  <th>Currency</th>
                                  <th>GateWay Name</th>
                                  <th>Bank Name</th>
                                  <th>Category</th>
                                  <th>Transaction ID</th>
                                  <th>Amount</th>
                                  <th>Status</th>
                                  <th>Bank Transaction ID</th>
                                  <th>Date</th>
                                  <!-- <th>Resp. Code</th> -->
                                  <th>City</th>
                                  <!-- <th>Delete</th> -->
                                  <!-- <th>Update</th> -->
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                foreach ($DonateDetails as $dd) 
                                {
                                ?>
                                <tr>
                                  <td><?php echo $dd->DonateDetailId?></td>
                                  <td><?php echo $dd->Username?></td>
                                  <td><?php echo $dd->CURRENCY?></td>
                                  <td><?php echo $dd->GATEWAYNAME?></td>
                                  <td><?php echo $dd->BANKNAME?></td>
                                  <td><?php echo $dd->CategoryName?></td>
                                  <td><?php echo $dd->TXNID?></td>
                                  <td><?php echo $dd->TXNAMOUNT?></td>
                                  <td>
                                    <?php
                                      if ($dd->STATUS==0) 
                                      {
                                    ?>
                                        <p style="color: green"> 
                                    <?php
                                        echo "Successful";
                                    ?>
                                        </p>
                                    <?php    
                                      }
                                      else 
                                      {
                                    ?>
                                        <p style="color: red"> 
                                    <?php  
                                        echo "Unsuccessful";
                                    ?>
                                        </p>
                                    <?php 
                                      }
                                    ?>
                                  </td>
                                  <td><?php echo $dd->BANKTXNID?></td>
                                  <td><?php echo $dd->TXNDATE?></td>
                                  <!-- <td><?php echo $dd->RESPCODE?></td> -->
                                  <td><?php echo $dd->CityName?></td>
                                  <!-- <td><img style="width: 100px" src="<?php echo base_url("resources/shared/images/$e->CoverImage")?>" height="150px"></td> -->
                                  <!-- <td><a href="<?php echo site_url("admin/DonateDetails/removeDonateDetails/".$dd->DonateDetailId)?>">Delete</a></td> -->
                                  
                                </tr>
                                <?php
                                }
                                ?>
                              </tbody>
                            </table>
                        </div>
                        <!-- <div class="col-lg-3 col-sm-6">
                            
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            
                        </div> -->                  
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