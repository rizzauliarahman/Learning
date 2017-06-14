<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14/06/2017
 * Time: 10:12
 */
?>

<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>E-Learning</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/animate.css')?>">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/main.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/mdb.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/style.css')?>">
    <script src="<?php echo base_url('assets/ext/js/modernizr-2.7.1.js')?>"></script>

</head>

<body>


<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="logo" href="index.html"><font size="5%" color="#f8f8ff"><b>E-Learning</b></font></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about" class="scroll">About Us</a>&nbsp;</li>
                <li>
                    <?php
                    if ($this->session->userdata("nama") != "") {
                    ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">| <?php echo $this->session->userdata("nama"); ?></a>
                </li>
                <li><a href="login/logout" class="btn btn-default"><font color="#70cbce">logout</font></a>

                    <?php
                    }

                    else {
                        ?>
                        <a href="<?php echo base_url('login') ?>">Sign in</a>
                        <?php
                    }
                    ?>
                </li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>

<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <a href="index.html"><font size="6%" color="#f8f8ff"><b>E-Learning</b></font></a>
            </div>
            <div class="col-xs-6 signin text-right navbar-nav">
                <a href="#about" class="scroll">About Us</a>&nbsp;
                <?php
                if ($this->session->userdata("nama") != "") {
                    ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">| <?php echo $this->session->userdata("nama"); ?></a>
                    <a href="login/logout" class="btn btn-primary">logout</a>

                    <?php
                }

                else {
                    ?>
                    <a href="<?php echo base_url('login') ?>">Sign in</a>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="row header-info">
            <div class="col-sm-10 col-sm-offset-1 text-left">
                <h2 class="wow fadeIn"><u>Kategori</u></h2>


                <div class="row">
                    <div class="col-md-1">
                        <div class="row">
                            <div class="col-xs-6 text-right wow fadeInUp" data-wow-delay="0.7s">
                                <a href="#" class="btn btn-secondary btn-lg">Kategori 1</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pad-xs">
                    <div class="col-md-1">
                        <div class="row">
                            <div class="col-xs-6 text-right wow fadeInUp" data-wow-delay="0.7s">
                                <a href="#" class="btn btn-secondary btn-lg">Kategori 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="row">
                            <div class="col-xs-6 text-right wow fadeInUp" data-wow-delay="0.7s">
                                <a href="#" class="btn btn-secondary btn-lg">Kategori 2</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<div class="mouse-icon hidden-xs">
    <div class="scroll"></div>
</div>
<div class="row pad-lg ">
    <div class="col-lg-4 col-lg-offset-1">
        <div class="card">
            <div class="view overlay hm-white-slight">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                <a href="#">
                    <div class="mask waves-effect waves-light"></div>
                </a>
            </div>

            <div class="card-block">
                <h4 class="card-title">Kategori 1</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Button</a>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">

        <div class="row">
            <div class="col-sm-8 margin-20">
                <ul class="list-inline social">
                    <li>Connect with us on</li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>

            <div class="col-sm-4 text-right">
                <p><small>Copyright &copy; 2017. All rights reserved. <br>
                        Created by <a href="#about" class="scroll">dev</a></small></p>
            </div>
        </div>

    </div>
</footer>


<!-- Javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('assets/ext/js/jquery-1.11.0.min.js')?>"><\/script>')</script>
<script src="<?php echo base_url('assets/ext/js/wow.min.js')?>"></script>
<script src="<?php echo base_url('assets/ext/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/ext/js/main.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ext/js/tether.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ext/js/mdb.min.js')?>"></script>

</body>
</html>
