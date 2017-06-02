<!--
<html>
<head>
    <title>ADMIN</title>
</head>
<body>
<h1>Login berhasil !</h1>
<h2>Hai, <?php //echo $this->session->userdata("nama"); ?></h2>
<a href="<?php //echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>
-->

<?php
$this->load->view('layout/head');
?>
<title>Admin Dashboard</title>
<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />

<?php
$this->load->view('layout/topbar');
$this->load->view('layout/sidebar');
?>

<!-- Content Header (Page header) -->
<!-- Main content -->
<div class="nav-tabs-custom">
    <div class="tab-content">
        <div class="tab-pane active" id="">
            <?php
            $this->load->view('section/sec-admin');
            ?>
        </div>
        
        <div class="tab-pane" id="tambah-student">
            <?php
            $this->load->view('section/sec-tambah-student');
            ?>
        </div>
        
        <div class="tab-pane" id="view-student">
            <?php
            $this->load->view('section/sec-view-student');
            ?>
        </div>
        
        <div class="tab-pane" id="view-instructor">
            <?php
            $this->load->view('section/sec-view-instructor');
            ?>
        </div>
        
        <div class="tab-pane" id="tambah-instructor">
            <?php
            $this->load->view('section/sec-tambah-instructor');
            ?>
        </div>

        <div class="tab-pane" id="tambah-pelajaran">
            <?php
            $this->load->view('section/sec-tambah-pelajaran');
            ?>
        </div>
    </div>
</div>
<?php
$this->load->view('layout/js');
?>

<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/ext/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/ext/js/raphael-min.js') ?>"></script>
<script src="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/ext/ext/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/ext/ext/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/ext/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/ext/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/ext/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/ext/AdminLTE-2.0.5/dist/js/app.min.js') ?>" type="text/javascript"></script>
<?php
$this->load->view('layout/foot');
?>