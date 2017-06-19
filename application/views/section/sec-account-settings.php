<?php
/**
 * Created by PhpStorm.
 * User: Renesje
 * Date: 6/15/2017
 * Time: 2:56 PM
 */?>

<!-- Content header -->
<section class="content-header">
    <h1>
        Account Settings
        <small> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Settings</a></li>
        <li class="active">Account</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <section class="col-lg-12">
            <div class="box box-primary"><br>
                <form class="form-horizontal" action="sec-account-settings.php" method="post">
                    <div class="form-group has-feedback">
                        <label for="name" class="col-lg-2 control-label">Nama lengkap</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" maxlength="50" placeholder="Nama Lengkap" value="Budi">
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="address" class="col-lg-2 control-label">Alamat</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" maxlength="250" placeholder="Alamat" value="Jalan La La Land 20">
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="birthday" class="col-lg-2 control-label">Tanggal lahir</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" placeholder="YYYY-MM-DD" value="1996-03-13">
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="work_exp" class="col-lg-2 control-label">Work experience</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="10" placeholder="Add/remove your work experience here"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary btn-flat">Save</button>
                        </div>
                    </div><br>
                </form>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="col-lg-12">
            <div class="box box-primary"><br>
                <form class="form-horizontal" action="sec-account-settings.php" method="post">
                    <div class="form-group has-feedback">
                        <label for="email" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" maxlength="200" placeholder="Email" value="budi@blabla.com">
                        </div>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label for="username" class="col-lg-2 control-label">Username</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" placeholder="Username" maxlength="40" value="budiblabla">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary btn-flat">Save</button>
                        </div>
                    </div><br>
                </form>
            </div>

            <div class="box box-primary"><br>
                <form class="form-horizontal" action="sec-account-settings.php" method="post">
                    <div class="form-group has-feedback">
                        <label for="cpassword" class="col-lg-2 control-label">Current password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" placeholder="Type current password" maxlength="50">
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="npassword" class="col-lg-2 control-label">New password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" placeholder="Enter new password" maxlength="50">
                        </div>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label for="npassword" class="col-lg-2 control-label">Re-type new password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" placeholder="re-type new password" maxlength="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary btn-flat">Change password</button>
                        </div>
                    </div><br>
                </form>
            </div>
        </section>
    </div>
</section>
