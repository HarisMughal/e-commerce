<?php include_once ('../Includes/databaseclass.php');?>
<?php include_once ('header.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>AdminPanel</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/adminpanelstyle.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js" ></script>
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


                        <h1 class="page-header">
                            Add Users

                        </h1>
                        <p class="bg-success">

                        </p>

                        <a href="add_user.php" class="btn btn-primary">Add User</a>


                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <?php show_admins_in_admin(); ?>
                                </tr>
                                </thead>
                            </table> <!--End of Table-->


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
