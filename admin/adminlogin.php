<?php include("../function.php"); ?>
<?php include ("../Includes/sessions.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


</head>

<body>

    <div class="container-fluid">
        <!--    <div class="row">-->
        <!--        --><?php
//        require ('../Includes/header.php')
//
//        ?>
        <!---->
        <!---->
        <!--    </div>-->
        <!--    <div class="row">-->
        <!---->
        <!--        --><?php
//        require '../includes/navbar.php';
//        ?>
        <!---->
        <!---->
        <!--    </div>-->

        <div class="row" style="background:url(../Images/bg2.jpg); background-size:100% 100%; opacity: 0.9;">

            <div class="page-header  text-center">
                <h1 style="font-size: 50px; font-weight: 400;"><b>Admin Login Desk</b></h1>
            </div>
            <div class="row">
                <?php echo Message();
            echo SuccessMessage();
            ?>
            </div>


            <div class="col-md-4">

            </div>

            <div class="col-md-4" style="border:3px solid; border-radius: 30px;">


                <form action="" method="POST" role="form">
                    <?php login_admin();  ?>

                    <div class="form-group">

                        <br>
                        <label for="" style="font-size:20px; "><b>User Name</b></label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-2x" aria-hidden="true"></i></span>
                            <input type="text" class="form-control input-lg" name="username" id="username"
                                placeholder="e.g aliraza123" />
                        </div>


                        <br>
                        <label for="" style="font-size:20px; "><b>Password</b></label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-2x" aria-hidden="true"></i></span>
                            <input type="password" class="form-control input-lg" name="password" id="password"
                                placeholder="Enter your password" />
                        </div>

                    </div>



                    <button type="submit" name="submit" class="btn btn-success btn-block ">Submit</button>
                    <br>

                </form>



            </div>


            <div class="col-md-4 ">

            </div>
            <br>
            <br>
            <br>
            <br>

            <br>


        </div>
        <!--          <br>-->


    </div>

    <?php
//require '../includes/footer.php';
//
//?>

</body>

</html>