<?php include_once ('../Includes/databaseclass.php');?>
<?php include_once ('header.php');?>
<?php include_once ('../function.php');?>
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
</head>

<body>
    <div class="Line" style="height: 1px; background: #27aae1;"></div>
    <div class="container-fluid">
        <div class="row">

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



                        <div class="col-lg-12">
                            <br>
                            <br>
                            <br>
                            <br>
                            <div>
                                <?php
                            echo Message();
                            echo SuccessMessage();
                            ?>
                            </div>


                            <h1 class="page-header">
                                Riders

                            </h1>
                            <p class="bg-success">

                            </p>



                            <div class="col-md-12">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <?php show_riders_in_admin(); ?>
                                        </tr>
                                    </thead>
                                </table>
                                <!--End of Table-->
                                <br>
                                <br>
                                <a href="add_rider.php" class="btn btn-success btn-lg">Add Rider</a>

                            </div>











                        </div>













                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- /#page-wrapper -->
            </div>
            <!-- /#wrapper -->
</body>

</html>