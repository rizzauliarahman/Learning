<!DOCTYPE html>
<html lang="en" xmlns:background-color="http://www.w3.org/1999/xhtml">

<head>

    <link rel="stylesheet" href="<?php echo base_url('assets/ext/bootstrap/css/bootstrap.css')?> ">
    <script src="<?php echo base_url('assets/ext/bootstrap/js/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/ext/js/jquery.min.js')?>"></script>

    <meta charset = "utf-8">
    <title>CodeIgniter View Example</title>
</head>

<body>

<div class="wrapper">
<div class="bg-primary">
<div class="container" >

    <div class="row">
        <div style="text-align: center;">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <div class="form_bg">
                    <form>
                        <h2 class="text-center">Login Page</h2>
                        <br/>
                        <div class="form-group">
                            <input type="email" class="form-control" id="userid" placeholder="User id">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd" placeholder="Password">

                        </div>
                        <br/>
                        <div class="align-center">
                            <button type="submit" class="btn btn-default" id="login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>

    </div>

</div>
</body>



</html>