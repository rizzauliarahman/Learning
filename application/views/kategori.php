
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15/06/2017
 * Time: 11:31
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
    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/main2.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/kategori.css')?>">

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
            <ul class="nav navbar-nav">


            </ul>
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
        </div>
    </div>
</div>

<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-right">
                <a href="#"><h2><b>Kategori </b></h2></a>
                <h4>Lorem Ipsum Dolor Sit Amet</h4>
                <div class="col-sm-offset-8 col-sm-4 ">
                    <form class="form" role="search" method="get" >
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search . . . . . . . " name="search" value="">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</header>

<div class="container pad-xs">

    <div class="row">
        <div class="col-lg-offset-8 col-lg-3">

        </div>
    </div>
    <div class="row">

        <div class="col-md-3">
            <p class="lead">Shop Name</p>
            <div class="list-group">
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>
        </div>

        <div class="col-md-9">

            <div class="row carousel-holder">
                <div class="col-md-12">
                    <!-- #####################Slidder########################
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    #########################End Slider#########################-->
                </div>

            </div>

            <div class="row">
                <div class="section-title">
                    <h6 class="black" align="left">
                        Recent
                    </h6>
                    <div class="divider"></div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4">

                    <div class="thumbnail">
                        <img height="320px" width="150px" src="https://cdn-images-1.medium.com/max/600/1*bqt8t5vPveFWPWc_1FZaRA.jpeg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">First Product</a>
                            </h4>
                            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">15 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img height="320px" width="150px" src="https://cdn-images-1.medium.com/max/600/1*bqt8t5vPveFWPWc_1FZaRA.jpeg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$64.99</h4>
                            <h4><a href="#">Second Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">12 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img height="320px" width="150px" src="https://cdn-images-1.medium.com/max/600/1*bqt8t5vPveFWPWc_1FZaRA.jpeg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$74.99</h4>
                            <h4><a href="#">Third Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">31 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img height="320px" width="150px" src="https://cdn-images-1.medium.com/max/600/1*bqt8t5vPveFWPWc_1FZaRA.jpeg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$84.99</h4>
                            <h4><a href="#">Fourth Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">6 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img height="320px" width="150px" src="https://cdn-images-1.medium.com/max/600/1*bqt8t5vPveFWPWc_1FZaRA.jpeg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$94.99</h4>
                            <h4><a href="#">Fifth Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">18 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                    </div>
                </div>



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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('assets/ext/js/jquery-1.11.0.min.js')?>"><\/script>')</script>
<script src="<?php echo base_url('assets/ext/js/wow.min.js')?>"></script>
<script src="<?php echo base_url('assets/ext/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/ext/js/main.js')?>"></script>

