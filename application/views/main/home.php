<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EvenTrack</title>
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon_fix.png" type="png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/skins/_all-skins.min.css">
   <script src="<?php echo base_url();?>/asset/bower_components/jquery/dist/jquery.min.js"></script>
   <script src="<?php echo base_url();?>/asset/bower_components/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url("main/home"); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="<?php echo base_url(); ?>assets/img/favicon_fix.png" type="png"></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Event </b>Track</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li>
            <form action="#" method="get" class="sidebar-form" style="width:150px;height:30px;">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search Events">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form></li>
      <li>
      <a href="#"><i class="glyphicon glyphicon-bell"></i></a>
      </li>
          <li>
          <a href="<?php echo site_url("main/profil"); ?>">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
              <span class="hidden-xs">Hi, <?php echo $this->session->userdata('email'); ?></span>
          </a>
          </li>
         <!--  <li>
            <a href="<?php echo site_url("login/logout"); ?>"><i class="glyphicon glyphicon-log-out"></i> </a>
          </li> -->
        </ul>
      </div>
      
    </nav>
  </header>

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">

 <!--        <li class="header"></li>
 -->
        <li>
          <a href="<?php echo site_url("main/home"); ?>">
          <i class="fa fa-home"></i> 
          <span>Home</span>
          </a>
        </li>

        <li>
          <a href="<?php echo site_url("main/events/cari_event"); ?>">
            <i class="fa fa-search"></i>
            <span>Filter Event</span>
          </a>
        </li>

        <li>
          <a href="<?php echo site_url("main/events/event_terdekat"); ?>">
            <i class="fa fa-map-marker"></i>
            <span>Event Terdekat</span>
          </a>
        </li>

        <li>
          <a href="<?php echo site_url("main/events/event_favorit"); ?>">
          <i class="fa fa-star" aria-hidden="true"></i> 
          <span>Event Favorit</span></a> 
   
        </li>

        <li>
          <a href="<?php echo site_url("main/profil"); ?>">
          <i class="fa fa-user" aria-hidden="true"></i> 
          <span>Akun Saya</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <?php $this->load->view($content);?>
     
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <center><strong>Copyright &copy; 2019 <a href="#">EvenTrack</a>.</strong> All rights
    reserved.</center>
  </footer>
   
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>asset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>asset/bower_components/fastclick/lib/fastclick.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script>
<script>
$.noConflict();
jQuery( document ).ready(function( $ ) {
    $('#example2').DataTable();
  // $(document).ready(function () {
    $('.sidebar-menu').tree();
    // $('#example2').DataTables();
  })
  
</script>
</body>
</html>
