<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14/06/2017
 * Time: 12:40
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/main2.css')?>">

    <script src="<?php echo base_url('assets/ext/js/modernizr-2.7.1.js')?>"></script>

</head>

<body>


<div class="navbar navbar-fixed-top">
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
            <div class="col-xs-12 text-right">
                <a href="index.html"><h2><b>Judul Pelajaran</b></h2></a>
                <h4 class="white">Lorem Ipsum Dolor Sit Amet</h4>
            </div>
        </div>
    </div>

</header>

<section id="invite" class="pad-sm light-gray-bg">
    <div class="row">
        <div class="continer-fluid">
            <div class="row-fluid">
                <div class="col-sm-3 col-sm-offset-1 container-fluid" id="sidebar">
                    <h2 class="black">Sub-Pelajaran</h2>
                    <div class="col-lg-10">
                        <button class="btn btn-primary btn-block">Sub 1</button>
                        <button class="btn btn-primary btn-block">Sub 2</button>
                        <button class="btn btn-primary btn-block">Sub 3</button>
                        <button class="btn btn-primary btn-block">Sub 4</button>
                    </div>

                </div>
                <div class="col-sm-7">
                    <section>
                        <p align="justify">
                            Lorem ipsum dolor sit amet, iisque quaeque eos eu, cu vis quod indoctum. In eum quaerendum
                            deterruisset, partem vidisse at per. Te mea zril vocibus postulant. Ignota putant officiis mel
                            at, tale doming vel in. Volumus quaerendum ea vix, facer diceret tractatos sea te. Stet oporteat
                            repudiandae usu ea, ne alii suscipit verterem sea. Eum ex verear alterum. <br><br>

                            Eius tacimates repudiare duo ne. Nostrud ceteros lobortis est ne, postea intellegebat eu per,
                            elitr fastidii vivendum id vel. Nam brute simul accusamus cu, id est mutat iriure veritus. Eu
                            civibus referrentur vix, hinc sadipscing scriptorem ius id.<br><br>
                        </p>
                            <blockquote>
                            No usu soluta gubergren splendide. Sea quis malorum utroque ea, ut his laudem putent, quidam
                            tincidunt persequeris et usu. Noster causae his et. Probo mollis no eam. Omittam sensibus te
                            nec, ei vel wisi munere.</blockquote><br><br>
                        <p align="justify">
                            Viris singulis expetendis cum ne. Vel feugait propriae in. Nam amet vidisse theophrastus eu.
                            Decore postea reprimique ut sea. Sea detraxit sensibus et, at nec quod mucius. Mei id esse
                            eligendi, nominati periculis salutatus nam ea.<br><br>

                            Homero epicuri prodesset nec ad. In veri sanctus eos, at quo alii habemus. In ius iisque
                            voluptaria. Et nam probo oblique labores, quidam periculis mea ei, tollit vidisse aliquando ius
                            ne.<br><br>
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('assets/ext/js/jquery-1.11.0.min.js')?>"><\/script>')</script>
<script src="<?php echo base_url('assets/ext/js/wow.min.js')?>"></script>
<script src="<?php echo base_url('assets/ext/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/ext/js/main.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ext/js/tether.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ext/js/mdb.min.js')?>"></script>