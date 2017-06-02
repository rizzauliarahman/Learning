<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02/06/2017
 * Time: 15:47
 */
?>
<section class="content-header">
    <h1>
        Add Student
        <small> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Student</li>
    </ol>
</section>
<section class="content">
    <!-- Small boxes (Stat box) -->

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->

            <!-- TO DO List -->
            <div class="box box-primary">
                <div class="col-lg-12">
                    <p></p>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box-body pad">
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Nama Pelajaran" name="nama">
                                    <span class="glyphicon glyphicon-edit form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Kategori" name="kategori">
                                    <span class="glyphicon glyphicon-edit form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Tags" name="tag">
                                    <span class="glyphicon glyphicon-edit form-control-feedback"></span>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body pad">
                             <textarea class="textarea" placeholder="Place some text here" style="width: 90%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>

                        <div class="col-xs-2">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                        </div>
                            <!-- /.col -->


                    </form>
                </div>

            </div><!-- /.box -->


        </section><!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">


        </section><!-- right col -->
    </div><!-- /.row (main row) -->

</section><!-- /.content -->
