<?php include_once ('../Includes/databaseclass.php');?>
<?php include_once ('header.php');?>
<?php include_once ('../function.php');?>
<?php add_admin(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>AdminPanel</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/adminpanelstyle.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
    <link href="../css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

</head>

<body>
    <div class="Line" style="height: 1px; background: #27aae1;"></div>
    <div class="container-fluid">
        <div class="row" style="background:url(bg2.jpg); background-size:100% 100%; opacity: 0.9;">

            <!-- Navbar Start -->
            <?php
                include ('navbar.php');

            ?>
            <!-- Navbar End -->

            <div class="col-sm-10">
                <!--            <br><br>-->
                <!--            <br><br>-->
                <!---->
                <!---->

                <div id="page-wrapper">

                    <div class="container-fluid">

                        <br>
                        <br>


                        <h1 class="page-header">
                            Add User
                            <small>Page</small>
                        </h1>
                        <div>
                            <?php
                        echo Message();
                        echo SuccessMessage();
                        ?>
                        </div>
                        <div class="col-md-6 user_image_box">

                            <span id="user_admin" class='fa fa-user fa-4x'></span>

                        </div>


                        <form action="" method="post" enctype="multipart/form-data">




                            <div class="col-md-6">

                                <div class="form-group">

                                    <input type="file" name="file">

                                </div>


                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="username">First Name</label>
                                    <input type="text" name="fname" class="form-control">

                                </div>

                                <div class="form-group">
                                    <label for="username">Last name</label>
                                    <input type="text" name="lname" class="form-control">

                                </div>



                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control">

                                </div>

                                <!--
              <div class="form-group">
                  <label for="first name">First Name</label>
              <input type="text" name="first_name" class="form-control"   >

             </div> -->
                                <!--
              <div class="form-group">
                  <label for="last name">Last Name</label>
              <input type="text" name="last_name" class="form-control"   >

             </div> -->


                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control">

                                </div>

                                <div class="form-group">

                                    <!--            <a id="user-id" class="btn btn-danger" href="">Delete</a>-->

                                    <input type="submit" name="add_user" class="btn btn-primary pull-right"
                                        value="Add User">

                                </div>




                            </div>



                        </form>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->

            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!-- Morris Charts JavaScript -->
            <script src="js/plugins/morris/raphael.min.js"></script>
            <script src="js/plugins/morris/morris.min.js"></script>
            <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>