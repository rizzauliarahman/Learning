<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Sign Up</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/ext/bootstrap/css/bootstrap.css')?> ">
    <script src="<?php echo base_url('assets/ext/bootstrap/js/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/ext/js/jquery.min.js')?>"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">E-Learning</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if ($this->session->userdata('login')){ ?>
                    <li><p class="navbar-text">Hello <?php echo $this->session->userdata('nama'); ?></p></li>
                    <li><a href="<?php echo base_url(); ?>login/logout">Log Out</a></li>
                <?php } else { ?>
                    <li><a href="<?php echo base_url(); ?>login">Login</a></li>
                    <li><a href="<?php echo base_url(); ?>registrasi">Signup</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">

        <div class="col-md-4 col-md-offset-4 well">
            <form action="<?php echo base_url('registrasi/regis'); ?>" method="post">
            <legend>Signup</legend>

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input class="form-control" name="nama" placeholder="Nama" type="text"  >
                <span class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="name">Username</label>
                <input class="form-control" name="username" placeholder="Username" type="text"  >
                <span class="text-danger"></span>
            </div>
            
            <!--
            <div class="form-group">
                <label for="email">Email ID</label>
                <input class="form-control" name="email" placeholder="Email-ID" type="text" />
                <span class="text-danger"> <?php //echo form_error('email'); ?></span>
            </div>
            -->
            
            <div class="form-group">
                <label for="subject">Password</label>
                <input class="form-control" name="password" placeholder="Password" type="password" />
                <span class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="subject">Confirm Password</label>
                <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
                <span class="text-danger"></span>
            </div>

            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-info">Signup</button>
                <!--<button name="cancel" type="reset" class="btn btn-info">Cancel</button>-->
            </div>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            Already Registered? <a href="<?php echo base_url(); ?>login">Login Here</a>
        </div>
    </div>
</div>

</body>
</html>