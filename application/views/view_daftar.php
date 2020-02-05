
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Event Track | Sign Up</title>
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
<body  style="background-color: #ffffff" class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
     <img style="width: 180px;height: 180px" class="center" src="<?php echo base_url(); ?>assets/img/logo_et.jpeg">
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p></p>

        <form class="login100-form validate-form" action="<?php echo base_url(); ?>Daftar/daftar_user"  method="post">

        <div class="input-group mb-3">
          <input type="email" style="background-color: #e9ecef" class="form-control" name="email" placeholder="Email">
          <div style="background-color: #e9ecef"class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <input type="text" style="background-color: #e9ecef" class="form-control" name="firstname" placeholder="First Name">
          <div style="background-color: #e9ecef" class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-plus"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <input type="text" style="background-color: #e9ecef" class="form-control" name="lastname" placeholder="Last Name">
          <div style="background-color: #e9ecef" class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" style="background-color: #e9ecef" class="form-control" name="password" placeholder="Password">
          <div style="background-color: #e9ecef" class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" style="background-color: #e9ecef" class="form-control" name="repassword" placeholder="Retype password">
          <div style="background-color: #e9ecef" class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
        
         <button style="background-color:  #4475BA;border-radius: 10px"  type="submit" class="btn btn-primary btn-block">REGISTER</button>
          <!-- /.col -->
        </div>
     
      <br>
      <p class="mb-0" > <center>
        Have an account ?<a href="<?php echo site_url("Login/klik_login");?>" class="text-center">Login now</a>
        </center>
      </p>

    </div>
      </form>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
