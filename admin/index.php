<?php include_once ('../Includes/databaseclass.php');?>
<?php include ('header.php');?>
<?php include ('../function.php');?>
<?php include_once ('../Includes/sessions.php');?>
<?php
if(!isset($_SESSION['username'])){
    Redirect_to("../index.php");
}


?>
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
     
<?php
include ('navbar.php');

?>

            <div class="col-sm-10">
                <br><br>
                <br><br>
                <div id="page-wrapper">

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Dashboard <small>Statistics Overview</small>
                                </h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <i class="fa fa-dashboard"></i> Dashboard
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <?php
                            echo Message();
                            echo SuccessMessage();
                            ?>
                        </div>
                        <!-- /.row -->


                        <?php

                        if(isset($_GET['edit_product'])) {

                            include('edit_product.php');
                        }

//                        if(!isset($_GET['edit_product'])){
//
//                            include ('content.php');
//
//
//
//                        }

                        ?>




                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- /#page-wrapper -->


            </div>
        </div>
        <script src="../js/plugins/morris/raphael.min.js"></script>
        <script src="../js/plugins/morris/morris.min.js"></script>
        <script src="../js/plugins/morris/morris-data.js"></script>
</body>
</html>