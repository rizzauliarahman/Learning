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
            <div class="box box-primary">
                <form action="sec-account-settings.php" method="post">
                    <div class="form-group-lg has-feedback">
                        <label for="name">Nama lengkap</label>
                        <input type="text" class="form-control" maxlength="50" placeholder="Nama Lengkap" value="Budi">
                    </div>
                    <div class="form-group-lg has-feedback">
                        <label for="address">Alamat</label>
                        <input type="text" class="form-control" maxlength="250" placeholder="Alamat" value="Jalan La La Land 20">
                    </div>
                    <div class="form-group-lg has-feedback">
                        <label for="birthday">Tanggal lahir</label>
                        <input type="date" class="form-control"  placeholder="Tanggal Lahir" value="1996-03-13">
                    </div>
                </form>
                <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="col-lg-12">
            <div class="box box-primary">
                <form action="sec-account-settings.php" method="post">
                    <label for="email">Email</label>
                    <div class="form-group-lg has-feedback">
                        <input type="text" class="form-control" maxlength="200" placeholder="Email" value="budi@blabla.com">
                    </div>
                    <div class="form-group has-feedback">
                        <label for="username">Edit username</label>
                        <input type="text" class="form-control" placeholder="Username" maxlength="40" value="budiblabla">
                    </div>
                    <div class="form-group has-feedback">
                        <label for="cpassword">Current password</label>
                        <input type="password" class="form-control" placeholder="Type current password" maxlength="50">
                    </div>
                    <div class="form-group has-feedback">
                        <label for="npassword">New password</label>
                        <input type="password" class="form-control" placeholder="Enter new password" maxlength="50">
                    </div>
                    <div class="form-group has-feedback">
                        <label for="npassword">Re-type new password</label>
                        <input type="password" class="form-control" placeholder="re-type new password" maxlength="50">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                </form>
            </div>
        </section>
    </div>
</section>
