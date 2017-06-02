<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 31/05/2017
 * Time: 9:55
 */
?>

<?php
$this->load->view('layout/head');
?>

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

<script>
    $(function () {
        $('#datepicker').datepicker({
            autoclose: true
        });
    })
</script>

<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="#"><b>E</b>-learning</a>
    </div>

    <div class="row">
        <div class="col-md-12">


            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Student</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Instructor</a></li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="register-box-body">
                            <p class="login-box-msg">Register a new student</p>

                            <form action="<?php echo base_url('registrasi/regis'); ?>" method="post">
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
                                    <span class="glyphicon glyphicon-edit form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" name="username" placeholder="Usename">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" name="cpassword" placeholder="Retype password">
                                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                </div>
                                <div class="row">
                                    <!--
                                    <div class="col-xs-8">
                                        <div class="checkbox icheck">
                                            <label>
                                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                                            </label>
                                        </div>
                                    </div>
                                    -->
                                    <!-- /.col -->
                                    <div class="col-xs-8"><a href="<?php echo base_url('login'); ?>" class="text-center">I already have a membership</a></div>
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        <div class="register-box-body">
                            <p class="login-box-msg">Register a new instructor</p>

                            <form action="<?php echo base_url('registrasi/regis_instructor'); ?>" method="post">
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Nama" name="nama">
                                    <span class="glyphicon glyphicon-edit form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="Retype password" name="cpassword">
                                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                </div>

                                <div class="form-group has-feedback date">
                                    <input type="text" class="form-control" placeholder="Tanggal Lahir" name="date" id="datepicker">
                                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                </div>


                                <div class="form-group has-feedback">

                                    <textarea class="form-control" rows="3" name="exp" placeholder="Work Experience"></textarea>
                                </div>

                                <div class="row">
                                    <!--
                                        <div class="col-xs-8">
                                            <div class="checkbox icheck">
                                                <label>
                                                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                                                </label>
                                            </div>
                                        </div>
                                    -->
                                    <!-- /.col -->
                                    <div class="col-xs-8"><a href="<?php echo base_url('login'); ?>" class="text-center">I already have a membership</a></div>
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.tab-pane -->

                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
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
