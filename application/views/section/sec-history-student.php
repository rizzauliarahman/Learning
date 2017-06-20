<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08/06/2017
 * Time: 14:06
 */?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        History Pelajaran
        <small> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Pelajaran</a></li>
        <li class="active">History</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="box-body">
                <ul class="todo-list"> <!--apa ya classnya selain to do list-->
                    <li>
                        <span class="text"><a href="<?php echo base_url('pelajaran') ?>">Cara Hidup Sehat</a></span>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="text"><a href="<?php echo base_url('pelajaran') ?>">Jangan Buang Sampah Sembarangan</a></span>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="text"><a href="<?php echo base_url('pelajaran') ?>">Grounding: Jalan-jalan Sore</a></span>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="text"><a href="<?php echo base_url('pelajaran') ?>">Biologi Kedokteran 1</a></span>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="text"><a href="<?php echo base_url('pelajaran') ?>">Menu Sehat Buka Puasa</a></span>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                </ul>
            </div><!-- /.box-body -->
        </section><!-- /.Left col -->
    </div><!-- /.row (main row) -->
</section><!-- /.content -->

<section class="container-fluid">
    <div class="col-lg-12">
        <div class="box-tools pull-right">
            <ul class="pagination pagination-sm inline">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
</section>