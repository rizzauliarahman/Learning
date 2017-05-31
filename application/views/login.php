<!DOCTYPE html>
<html lang="en" xmlns:background-color="http://www.w3.org/1999/xhtml">

<head>

    <link rel="stylesheet" href="<?php echo base_url('assets/ext/bootstrap/css/bootstrap.css')?> ">
    <script src="<?php echo base_url('assets/ext/bootstrap/js/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/ext/js/jquery.min.js')?>"></script>

    <meta charset = "utf-8">
    <title>Login</title>
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
            <a class="navbar-brand" href="<?php echo base_url(); ?>/home">E-Learning</a>
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

                        <div class="form_bg">
                            <form action="<?php echo base_url('login/login'); ?>" method="post">
                                <h2 class="text-center">Login Page</h2>
                                <br/>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">

                                </div>
                                <br/>
                                <center>
                                <div class="align-center">
                                    <button type="submit" class="btn btn-info" id="login">Login</button>
                                </div>
                                </center>
                            </form>
                        </div>


        </div>

    </div>
</body>



</html>