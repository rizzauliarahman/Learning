<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/ext/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><a href="<?php echo base_url('admin')?>"> <?php echo $this->session->userdata("nama"); ?></a></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Manage Student</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#tambah-student" data-toggle="tab"><i class="fa fa-circle-o"></i>Add Student</a></li>
                    <li><a href="#view-student" data-toggle="tab"><i class="fa fa-circle-o"></i>View Student</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Manage Instructor</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#tambah-instructor" data-toggle="tab"><i class="fa fa-circle-o"></i>Add Instructor</a></li>
                    <li><a href="#view-instructor" data-toggle="tab"><i class="fa fa-circle-o"></i>View Instructor</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Pelajaran</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#tambah-pelajaran" data-toggle="tab"><i class="fa fa-circle-o"></i> Data Pelajaran</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Data Task</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Data Jawaban</a></li>
                </ul>
            </li>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">