<?php
    $title="Home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php echo $title;?>
    </title>
    <?php include_once("top-scripts.php");?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '<?php echo base_url('resources/admin/'); ?>www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
    <!-- End Google Tag Manager -->
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
        }
        section{
            /*height: 100vh;*/
            /*background: #000;*/
            margin-left: 0px;
        }
        video{
            object-fit: cover;
            height: 500px;
            width: 700px;
            text-align: center;
        }
        h1{
            margin: 0;
            padding: 0;
            position: absolute;
            top: 50%;
            transform: translate(-50%);
            width: 100%;
            text-align: center;
            color: #ddd;
            font-size: 5em;
            font-family: sans-serif;
            letter-spacing: 0.2em;
        }
        h1 span{
            opacity: 0;
            display: inline-block;
            animation: animate 1s linear forwards;
            /*margin-left: 10px;*/
        }
        @keyframes animate{
            0%{
                opacity: 0;
                transform: rotateY(90deg);
                filter: blur(10px);
            }
            100%{
                opacity: 1;
                transform: rotateY(0deg);
                filter: blur(0px);
            }
        }
        h1 span:nth-child(1){
            animation-delay: 1s;
            margin-left: 200px;
            /*margin-bottom: 500PX;*/
            text-align: center;
        }
    </style>
    </head>
    
    <body>
      <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="<?php echo base_url('resources/admin/assets/img/sidebar-4.jpg'); ?>">
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
                        <div class="col-lg-3 col-sm-6">
                            <section>
                               <video autoplay loop muted>
                                   <source src="<?php echo base_url('resources/shared/videos/smoke.mp4');?>" type="video/mp4">
                               </video>
                               <h1>
                                   <span>
                                       <?php echo $_SESSION['aname']; ?>
                                   </span>
                               </h1>
                           </section>
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