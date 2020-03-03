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





                        <div class="col-md-12">
                            <div class="row">
                                <h1 class="page-header">
                                    All Orders

                                </h1>
                            </div>
                            <div>
                                <?php
                echo Message();
                echo SuccessMessage();
                ?>
                            </div>
                            <div class="row">
                                <table class="table table-hover">
                                    <thead>

                                        <tr>
                                            <th>ID</th>
                                            <th>Customer ID</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Rider ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php display_order(); ?>

                                    </tbody>
                                </table>
                            </div>











                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- /#page-wrapper -->

                </div>
                <!-- Morris Charts JavaScript -->
                <script src="js/plugins/morris/raphael.min.js"></script>
                <script src="js/plugins/morris/morris.min.js"></script>
                <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>