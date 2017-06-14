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


    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/main.css')?>">

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
<?php
    if ($this->session->userdata("nama") != ""){
        echo ""
        ?>
<!-- INI setelah login-->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.html"><font size="6%" color="#f8f8ff"><b>E-Learning</b></font></a>
                    </div>
                    <div class="col-xs-6 signin text-right navbar-nav">

                        <?php
                        if ($this->session->userdata("nama") != "") {
                            ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $this->session->userdata("nama"); ?></a>
                            <a href="<?php echo base_url('login/logout') ?>" class="btn btn-primary">logout</a>

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

<!-- End setelah login -->
        <?php
        ;
    }
    else {
        echo ""

        ?>

<!-- INI sebelum login-->
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
                            <a href="#" class="dropdown-toggle"
                               data-toggle="dropdown">| <?php echo $this->session->userdata("nama"); ?></a>
                            <a href="login/logout" class="btn btn-primary">logout</a>

                            <?php
                        } else {
                            ?>
                            <a href="<?php echo base_url('login') ?>">Sign in</a>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="row header-info">
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <h1 class="wow fadeIn">E-Learning</h1>
                        <br/>
                        <p class="lead wow fadeIn" data-wow-delay="0.5s">From Zero to Hero</p>
                        <br/>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="row">
                                    <div class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                                        <a href="#be-the-first" class="btn btn-secondary btn-lg scroll">Learn More</a>
                                    </div>
                                    <div class="col-xs-6 text-left wow fadeInUp" data-wow-delay="1.4s">
                                        <a href="<?php echo base_url('registrasi') ?>" class="btn btn-primary btn-lg">SignUp
                                            Now</a>
                                    </div>
                                </div><!--End Button Row-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <div class="mouse-icon hidden-xs">
            <div class="scroll"></div>
        </div>

        <section id="be-the-first" class="pad-xl">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center margin-30 wow fadeIn" data-wow-delay="0.6s">
                        <h2>Be the first</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipis.</p>
                    </div>
                </div>

                <div class="book wow fadeInUp" data-wow-delay="1s">
                    <img src="<?php echo base_url('assets/img/book.png') ?>">
                </div>
            </div>
        </section>

        <section id="main-info" class="pad-xl">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.4s">
                        <hr class="line purple">
                        <h3>Instructor Bersertifikat</h3>
                        <p>Semua Instructor sudah melewati tahap seleksi dan proses peningkatan setiap saat.</p>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.8s">
                        <hr class="line blue">
                        <h3>Pelajaran Berkualitas</h3>
                        <p>Semua materi pelajaran diawasi keaslian dan kualitasnya.</p>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="1.2s">
                        <hr class="line yellow">
                        <h3>Latihan Soal</h3>
                        <p>Terdapat task latihan di setiap pelajaran untuk menambah pemahaman pengguna. </p>
                    </div>
                </div>
            </div>
        </section>


        <!--Pricing-->
        <section id="about" class="pad-lg">
            <div class="container">
                <div class="row margin-40">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <h2 class="white">About Us</h2>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci
                            ut.</p>
                    </div>
                </div>

                <div class="row margin-50">
                    <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1s">
                        <br/>
                        <ul class="list-unstyled about-table text-center">
                            <li class="headline"><h5 class="white">FrontEnd Programmer</h5></li>
                            <li class="about">
                                <div class="amount">
                                    <img width="40%" height="40%" src="<?php echo base_url('assets/ext/img/a3.png') ?>">
                                    <br>
                                    Friendly Halomoan
                                </div>
                            </li>
                            <li class="features last btn btn-secondary btn-wide">Other info</li>
                        </ul>
                    </div>

                    <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="0.4s">
                        <br/>
                        <ul class="list-unstyled about-table text-center">
                            <li class="headline"><h5 class="white">Project Leader</h5></li>
                            <li class="about">
                                <div class="amount">
                                    <img width="40%" height="40%" src="<?php echo base_url('assets/ext/img/a3.png') ?>">
                                    <br>
                                    Rana Rennes
                                </div>
                            </li>
                            <li class="features last btn btn-secondary btn-wide">Other info</li>
                        </ul>
                    </div>

                    <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1s">
                        <br/>
                        <ul class="list-unstyled about-table text-center">
                            <li class="headline"><h5 class="white">BackEnd Programmer</h5></li>
                            <li class="about">
                                <div class="amount">
                                    <img width="40%" height="40%" src="<?php echo base_url('assets/ext/img/a3.png') ?>">
                                    <br>
                                    Rizza Aulia
                                </div>
                            </li>
                            <li class="features last btn btn-secondary btn-wide">Other info</li>
                        </ul>
                    </div>


                </div>

            </div>
        </section>


        <section id="invite" class="pad-lg light-gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <i class="fa fa-envelope-o margin-40"></i>
                        <h2 class="black">Get the invite</h2>
                        <br/>
                        <p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci
                            ut.</p>
                        <br/>

                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               placeholder="Enter Email">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Request Invite</button>
                                </form>
                            </div>
                        </div><!--End Form row-->

                    </div>
                </div>
            </div>
        </section>


        <?php
        ;
    }
?>
<!--
<section id="press" class="pad-sm">
    <div class="container">

        <div class="row margin-30 news-container">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="0.8s">
                <a href="#" target="_blank">
                    <img class="news-img pull-left" src="img/press-01.jpg" alt="Tech Crunch">
                    <p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut.<br />
                        <small><em>Tech Crunch - January 15, 2015</em></small></p>
                </a>
            </div>
        </div>

        <div class="row margin-30 news-container">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="1.2s">
                <a href="#" target="_blank">
                    <img class="news-img pull-left" src="img/press-02.jpg" alt="Forbes">
                    <p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut. <br />
                        <small><em>Forbes - Feb 25, 2015</em></small></p>
                </a>
            </div>
        </div>

    </div>
</section>
-->

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


</body>
</html>