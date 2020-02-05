<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Event Track | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo_et.jpeg" type="jpeg" sizes="50x50" style="width: 50px;height: 50px">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-color: #ffffff" class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
       <img style="width: 180px;height: 180px" class="center" src="<?php echo base_url(); ?>assets/img/logo_et.jpeg">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <br>

      <form class="login100-form validate-form" action="<?php echo base_url(); ?>login/login_validation"  method="post">

            <?php if ($this->session->flashdata('error')): ?>
              <div class="alert alert-danger" style="padding:4px">
                <span>Gagal Login, cek identitas anda kembali </span>
              </div>
            <?php endif; ?>

        <div class="input-group mb-3 validate-input">
          <input style="background-color: #e9ecef" type="email" class="form-control input100" name="email" placeholder="Email">

          <div class="input-group-append">  
            <div style="background-color: #e9ecef" class="input-group-text">  
              <span  class="fas fa-envelope"></span>
            </div>
          </div>  
                 
        </div>
         <span class="text-danger"><?php echo form_error('email'); ?></span>  
    <!--     <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="username">
            <span class="focus-input100"></span>
            <span class="label-input100">Username</span>
            <span class="text-danger"><?php echo form_error('username'); ?></span>
          </div> -->

        <div class="input-group mb-3 validate-input">
          <input style="background-color: #e9ecef" type="password" class="form-control input100" name="password" placeholder="Password">
          <div class="input-group-append">
            <div style="background-color: #e9ecef"  class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            
        </div>
        <span class="text-danger"><?php echo form_error('password'); ?></span>


        <div class="row">
          <div class="col-7">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" style="background:  #4475BA">
              <label style="font-size: 14px" for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-5">
          	<a href="forgot-password.html" style="font-size: 14px">Forgot Password?</a>
            <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
          </div>
          <!-- /.col -->
        </div>
    

    <br><br>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <!-- <a href="forgot-password.html">I forgot my password</a> -->
        <button style="background-color:  #4475BA;border-radius: 10px"  type="submit" class="btn btn-primary btn-block">LOGIN</button>
      </p>
      <br>
      <p class="mb-0" > <center>
        Don't have an account ?<a href="<?php echo site_url("Daftar");?>" class="text-center">Register now</a>
        </center>
      </p>
    </div>

  </form>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
