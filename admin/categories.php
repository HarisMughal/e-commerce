<?php include_once ('../Includes/databaseclass.php');?>
<?php include_once ('header.php');?>
<?php include ('../function.php');?>

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




                        <?php add_category();?>
                        <br>
                        <br>
                        <h1 class="page-header text-center">
                            Add Product Category

                        </h1>
                        <div>
                            <?php
                    echo Message();
                    echo SuccessMessage();
                    ?>
                        </div>

                        <div class="col-md-4">

                            <form action="" method="post">

                                <div class="form-group">

                                    <label for="" style="font-size:20px; "><b>Enter New Category Here:</b></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-tasks fa-2x"
                                                aria-hidden="true"></i></span>
                                        <input type="text" class="form-control input-lg" name="categoryname"
                                            id="categoryname" placeholder="e.g suzuki" />
                                    </div>
                                </div>

                                <div class="form-group">

                                    <input type="submit" name=add_category class="btn btn-success btn-lg btn-block"
                                        value="Add Category">
                                </div>


                            </form>


                        </div>

                        <div class="col-md-1">
                        </div>

                        <div class="col-md-5">

                            <table class="table" style="border: 1px solid; ">
                                <thead>

                                    <tr style="font-size:20px; ">
                                        <th>ID</th>
                                        <th>Title</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php     show_categories_in_admin(); ?>
                                </tbody>

                            </table>

                        </div>

















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