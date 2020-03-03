<?php include_once ('../Includes/databaseclass.php');?>
<?php include_once ('../function.php');?>
<?php include_once ('header.php');?>

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
                            <br><br>

                            <div class="row">
                                <h1 class="page-header">
                                    Add Product

                                </h1>
                            </div>
                            <?php
echo Message();
echo SuccessMessage();
?>

     


                            <div id="wrap">
                                <div class="container">
                                    <div class="row">
                                        <div class="span3 hidden-phone"></div>
                                        <div class="span6" id="form-login">
                                            <form class="form-horizontal well" action="import.php" method="post"
                                                name="upload_excel" enctype="multipart/form-data">
                                                <fieldset>
                                                    <legend>Import CSV/Excel file</legend>
                                                    <div class="control-group">
                                                        <div class="control-label">
                                                            <label>CSV/Excel File:</label>
                                                        </div>
                                                        <div class="controls">
                                                            <input type="file" name="file" id="file"
                                                                class="input-large">
                                                        </div>
                                                    </div>
<br>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button type="submit" id="submit" name="Import"
                                                                class="btn btn-primary button-loading"
                                                                data-loading-text="Loading...">Upload</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="span3 hidden-phone"></div>
                                    </div>


                                </div>

                            </div>








                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- /#page-wrapper -->

                </div>
                <!-- /#wrapper -->

                <!-- jQuery -->
                <!--    <script src="js/jquery.js"></script>-->
                <!---->
                <!--    <!-- Bootstrap Core JavaScript -->
                <!--    <script src="js/bootstrap.min.js"></script>-->

                <!-- Morris Charts JavaScript -->
                <script src="js/plugins/morris/raphael.min.js"></script>
                <script src="js/plugins/morris/morris.min.js"></script>
                <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>