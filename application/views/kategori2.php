
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15/06/2017
 * Time: 11:31
 */
?>

    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/main2.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/ext/css/kategori.css')?>">
    <script src="<?php echo base_url('assets/ext/js/wow.min.js')?>"></script>

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
            <a class="logo" href="#"><font size="5%" color="#f8f8ff"><b>E-Learning</b></font></a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>  </li>
                <li>
                    <?php
                    if ($this->session->userdata("nama") != "") {
                    ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $this->session->userdata("nama"); ?></a>
                </li>
                <li><a href="<?php echo base_url('login/logout') ?>" class="btn btn-default"><font color="#70cbce">logout</font></a>

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
                <a href="#"><h2><b>Some Text </b></h2></a>
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

                <div class="col-sm-4 col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.5s">

                    <div class="thumbnail">
                        <img height="320px" width="150px" src="https://cdn-images-1.medium.com/max/600/1*bqt8t5vPveFWPWc_1FZaRA.jpeg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">Rp 0</h4>
                            <h4><a href="#">First Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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

                <div class="col-sm-4 col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="thumbnail">
                        <img height="320px" width="150px" src="https://cdn-images-1.medium.com/max/600/1*bqt8t5vPveFWPWc_1FZaRA.jpeg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">Rp 10.000</h4>
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

                <div class="col-sm-4 col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="thumbnail">
                        <img height="320px" width="150px" src="https://cdn-images-1.medium.com/max/600/1*bqt8t5vPveFWPWc_1FZaRA.jpeg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">Rp 5.000</h4>
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

                <div class="col-sm-4 col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="thumbnail">
                        <img height="320px" width="150px" src="https://cdn-images-1.medium.com/max/600/1*bqt8t5vPveFWPWc_1FZaRA.jpeg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">Rp 1.000</h4>
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

                <div class="col-sm-4 col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="thumbnail" >
                        <img height="320px" width="150px" src="https://cdn-images-1.medium.com/max/600/1*bqt8t5vPveFWPWc_1FZaRA.jpeg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">Rp 500</h4>
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

