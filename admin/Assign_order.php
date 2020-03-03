<?php include_once ('../Includes/databaseclass.php');?>
<?php include_once ('../function.php');?>
<?php include_once ('header.php');?>
<?php
global $database;
$sql="Select * from dukan_order";
$result=$database->query($sql);
while ($row=fetch_array($result)){
    $order_id=$database->escape_string($row['orderID']);
}
update_order();


?>
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
                                    Assign order to Rider

                                </h1>
                            </div>



                            <form action="" method="post" enctype="multipart/form-data">


                                <div class="col-md-8">

                                    <div class="form-group">
                                        <label for="product-title">Order ID</label>
                                        <select name="order_id" id="" class="form-control">
                                            <option value="">Select Orders</option>
                                            <?php show_order_in_assign_order(); ?>
                                        </select>


                                    </div>
                                    <div class="col-md-8">

                                        <div class="form-group">
                                            <label for="product-title">Riders Name</label>
                                            <select name="rider_id" id="" class="form-control">
                                                <option value="">Select Rider</option>
                                                <?php show_riders_in_assign_order() ?>
                                            </select>


                                        </div>


                                        <!-- SIDEBAR-->
                                        <!--                                <div class="form-group">-->
                                        <!--                                    <label for="product-title">Order ID</label>-->
                                        <!--                                    <select name="order_id" id="" class="form-control">-->
                                        <!--                                        <option value="--><?php //echo $order_id; ?>
                                        <!--">--><?php //echo $order_id; ?>
                                        <!--</option>-->
                                        <!--                                        --><?php //show_order_in_assign_order(); ?>
                                        <!--                                    </select>-->
                                        <!---->
                                        <!---->
                                        <!--                                </div>-->


                                        <!---->
                                        <!--                                <div class="form-group">-->
                                        <!--                                    <label for="product-title">Rider Name</label>-->
                                        <!--                                    <select name="rider_id" id="" class="form-control">-->
                                        <!--                                        <option value="--><?php //echo $product_category_id; ?>
                                        <!--">--><?php //echo $category_name; ?>
                                        <!--</option>-->
                                        <!--                                        --><?php //show_categories_in_add_products(); ?>
                                        <!--                                    </select>-->
                                        <!---->
                                        <!---->
                                        <!--                                </div>-->
                                        <!---->
                                        <!--                                <div class="form-group">-->
                                        <!--                                    <label for="product-title">Status</label>-->
                                        <!--                                    <select name="product_category_id" id="" class="form-control">-->
                                        <!--                                        <option value="--><?php //echo $product_category_id; ?>
                                        <!--">--><?php //echo $category_name; ?>
                                        <!--</option>-->
                                        <!--                                        --><?php //show_categories_in_add_products(); ?>
                                        <!--                                    </select>-->
                                        <!---->
                                        <!---->
                                        <!--                                </div>-->
                                        <br>
                                        <div class="form-group">
                                            <input type="submit" name="update_order" class="btn btn-success btn-lg"
                                                value="Update">
                                        </div>



                            </form>







                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- /#page-wrapper -->

                </div>
                <!-- /#wrapper -->

                <!-- jQuery -->
                <!--    <script src="js/jquery.js"></script>-->
                <!---->
                <!--    <!-- Bootstrap Core JavaScript -->-->
                <!--    <script src="js/bootstrap.min.js"></script>-->

                <!-- Morris Charts JavaScript -->
                <script src="js/plugins/morris/raphael.min.js"></script>
                <script src="js/plugins/morris/morris.min.js"></script>
                <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>