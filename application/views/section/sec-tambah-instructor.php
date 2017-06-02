<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02/06/2017
 * Time: 15:19
 */?>

<section class="content-header">
    <h1>
        Add Instructor
        <small> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Instructor</li>
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
                <div class="col-lg-6">
                    <p></p>
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
                            <div class="col-xs-8"></div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                </div>
            </div><!-- /.box -->


        </section><!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">


        </section><!-- right col -->
    </div><!-- /.row (main row) -->

</section><!-- /.content -->
