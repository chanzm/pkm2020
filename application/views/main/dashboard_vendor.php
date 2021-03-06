<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ITSRent | Vendor</title>
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
  <script src="<?php echo base_url(); ?>asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url("main/dashboard"); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="<?php echo base_url(); ?>assets/img/favicon_fix.png"></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ITS </b>Multi Rent</span>
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
          <a href="#">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
              <span class="hidden-xs">Hi, <?php echo $this->session->userdata('username'); ?></span>
              <span class="hidden-xs"> [  <?php echo $this->session->userdata('role'); ?> ] </span>
          </a>
          </li>
          <li>
            <a href="<?php echo site_url("login/logout"); ?>"><i class="glyphicon glyphicon-log-out"></i> Log Out</a>
          </li>
        </ul>
      </div>
      
    </nav>
  </header>

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li>
          <a href="<?php echo site_url("main/dashboard_ven"); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url("main/barang"); ?>">
            <i class="fa fa-laptop"></i>
            <span>Barang</span>
          </a>
        </li>

        <li>
          <a href="<?php echo site_url("main/dashboard_ven/data_profil_vendor"); ?>"><i class="fa fa-user-plus" aria-hidden="true"></i> <span>Profil</span>
          </a>
        </li>

        <li>
          <a href="<?php echo site_url("main/dashboard_ven/cek_status_upload"); ?>"><i class="fa fa-upload" aria-hidden="true"></i> <span>Upload</span>
          </a>
          </li>
        <li>
          <a href="<?php echo site_url("main/dashboard_ven/penyewaan"); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Penyewaan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url("main/dashboard_ven/aktifasi_akun"); ?>"><i class="fa fa-toggle-on" aria-hidden="true"></i> <span>Aktifasi Akun</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url("main/calendar/calendar"); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> <span>Lihat Kalender</span>
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
    <center><strong>Copyright &copy; 2019 <a href="http://its.ac.id/">ITS</a>.</strong> All rights
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
