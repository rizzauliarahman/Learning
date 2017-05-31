<?php
$this->load->view('layout/head');
?>
    <title>Landing Page</title>


    <link href="<?php base_url('assets/ext/css/home.css')?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="#"><b>E</b>-learning</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#services">Services</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
                <li>
                    <a href="<?php base_url('login') ?>">Login</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<!-- Header -->
<a name="about"></a>
<div class="intro-header">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>Landing Page</h1>
                    <h3><b>E</b>-learning</h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">

                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>


<!-- jQuery -->
<script src="<?php echo base_url('assets/ext/js/jquery.min.js')?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/ext/bootstrap/js/bootstrap.min.js')?>"></script>

</body>

<?php
$this->load->view('layout/foot');
?>

</html>