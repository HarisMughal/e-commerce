<?php include ("Includes/init.php"); ?>
<?php include ("Includes/sessions.php"); ?>

<html>
    <head>
        <title>Change Password</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/contactstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js" ></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
            <?php
                require 'includes/header.php';
            ?>
            </div>
            
            <div class="row">
            <?php
            if(!isset($_SESSION['user'])){
                require 'includes/navbar.php';
            }
            else{
                require 'includes/loginnav.php';
            }
            ?>
            </div>

            <div class="row" id="contactheader">
                <center>
                    <br>
                    <h1 class="section-header">Change <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Password</span></h1>
                </center>
                <div>
                    <?php
                    echo Message();
                    echo SuccessMessage();
                    ?>
                </div>
            </div>
            
            <div class="row contact-section" id="contact">
                <div class="col-md-offset-4 col-md-4" >
                    
                <form action="ContactUs.php" method="post" enctype="multipart/form-data">
    <fieldset>
    
    <label for=""><b>User Name</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
        <input type="text" class="form-control" name="username" id="username"  placeholder="e.g aliraza123" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" title="Username should have only lower case letters" required="required"/>
    </div>

    <br>
    <label for=""><b>Old Password</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
        <input type="password" class="form-control" name="opassword" id="opassword" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"  placeholder="Enter any unique password" title="Please enter Uppercase,lowercase and number in password" required="required"/>
    </div>

    <br>
    <label for=""><b>New Password</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
        <input type="password" class="form-control" name="npassword" id="npassword" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"  placeholder="Enter any unique password" title="Please enter Uppercase,lowercase and number in password" required="required"/>
    </div>

    <br>
    <label for=""><b> Re-Enter Password</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
        <input type="password" class="form-control" name="repassword" id="repassword" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"  placeholder="Repeat your password" title="Please enter Uppercase,lowercase and number in password" required="required"/>
    </div>

<br>
<br>
<input class="btn btn-success col-md-offset-5" type="Submit" name="Submit" value="Submit">
    </fieldset>
    <br>
</form>
                    
                </div>
            </div>

            <div class="row">
            <?php

                require 'includes/footer.php';

            ?>
            </div>
            
            
        </div>
        <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js" ></script>
    </body>
</html>