<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Forget Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('resources/admin/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('resources/admin/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('resources/admin/'); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('resources/admin/'); ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('resources/admin/'); ?>plugins/iCheck/square/blue.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo site_url('admin/login'); ?>"><b>Password</b>Change</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <form action="<?php echo site_url("admin/Login/ChangePassword"); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Enter Registered Email" name="txtEmail" id="txtEmail" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback" align="center">
        <button type="button" id="btnotp">Get OTP</button>
      </div>

      <div class="form-group has-feedback">
        <!-- <input type="text" id="txtOTP" name="txtOTP" disabled=""> -->
        <label class="form-control" id="txtOTP" hidden=""></label>
      </div>  

      <!-- <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Enter OTP" id="OTP" name="OTP" value="<?php echo $OTP; ?>" required="">
        <span class="fa fa-hand-o-up form-control-feedback"></span>
      </div>  -->   

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Enter OTP" id="OTP" name="OTP" required="">
        <span class="fa fa-hand-o-up form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Enter New Password" name="txtNewPwd" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder=" Confirm Password" name="txtConPwd" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <!-- <?php
        if (isset($loginErr)) 
        {
      ?>
          <div class="form-group has-feedback">
            <p style="color: red">
              <?php echo $loginErr; ?>
            </p>
          </div>
      <?php    
        }
      ?> -->
      

      <div class="form-group has-feedback" align="center">
        <input type="submit" class="btn btn-primary" value="Change" id="btnsubmit">
      </div>

    </form>

    <center>
      <a href="<?php echo site_url('admin/Login'); ?>"><u>
        Login</u>
      </a>
    </center>
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('resources/admin/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('resources/admin/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url('resources/admin/'); ?>plugins/iCheck/icheck.min.js"></script>
<script>
    
  $(document).ready(function() {
    $('#btnsubmit').click(function(){
      $ck=$('#txtOTP').html();
      $ot=$('#OTP').val();
      if($ck == $ot)
      {
        return true;
      }
      else{
        return false;
      }
      });
    $('#btnotp').click(function() {
      var e=$('#txtEmail').val();
      $.ajax({
            url: "<?php echo site_url('admin/Login/send/')?>",
            method: "post",
            data:{e:e},
            success: function(result)
            {
              document.getElementById("txtOTP").innerHTML=result;
            }
            });
    })
  })
</script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>