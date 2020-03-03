<?php include_once ('../Includes/databaseclass.php');?>
<?php include_once ('../function.php');?>
<?php include_once ('header.php');?>
<?php
if(isset($_GET['id'])){
    $sql="Select * from product INNER JOIN product_category ON product.category_no=product_category.cno WHERE pid=".$database->escape_string($_GET['id'])." ";
    $result=$database->query($sql);
    while ($row=fetch_array($result)){
        $product_title=$database->escape_string($row['pname']);
        $product_category_id=$database->escape_string($row['category_no']);
        $product_company=$database->escape_string($row['company']);
        $product_model=$database->escape_string($row['model']);
        $product_buyingprice=$database->escape_string($row['buying_price']);
        $product_sellprice=$database->escape_string($row['sell_price']);
        $product_description=$database->escape_string($row['pro_desc']);
        $short_desc=$database->escape_string($row['short_desc']);
        $product_quantity=$database->escape_string($row['quantity']);
        $product_image=$database->escape_string($row['picture']);
        $category_name=$database->escape_string($row['category_name']);
    }
    update_product();
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
        include_once ('navbar.php');

        ?>

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
                                Edit Product

                            </h1>
                        </div>



                        <form action="" method="post" enctype="multipart/form-data">


                            <div class="col-md-8">

                                <div class="form-group">
                                    <label for="product-title">Product Title </label>
                                    <input type="text" name="product_title" class="form-control" value="<?php echo $product_title; ?>">

                                </div>


                                <div class="form-group">
                                    <label for="product-title">Product Description</label>
                                    <textarea name="product_description" id="" cols="30" rows="10" class="form-control"><?php echo $product_description; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="product-title">Product Short Description</label>
                                    <textarea name="short_desc" id="" cols="30" rows="3" class="form-control"><?php echo $short_desc; ?></textarea>
                                </div>


                                <div class="form-group row">

                                    <div class="col-xs-3">
                                        <label for="product-price">Buying Price</label>
                                        <input type="number" name="product_buyingprice" class="form-control" size="60" value="<?php echo $product_buyingprice; ?>">
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="product-price">Selling Price</label>
                                        <input type="number" name="product_sellprice" class="form-control" size="60" value="<?php echo $product_sellprice; ?>">
                                    </div>
                                </div>







                            </div><!--Main Content-->


                            <!-- SIDEBAR-->


                            <aside id="admin_sidebar" class="col-md-4">


                                <div class="form-group">
                                    <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
                                    <input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
                                </div>


                                <!-- Product Categories-->

                                <div class="form-group">
                                    <label for="product-title">Product Category</label>
                                    <select name="product_category_id" id="" class="form-control">
                                        <option value="<?php echo $product_category_id; ?>"><?php echo $category_name; ?></option>
                                        <?php show_categories_in_add_products(); ?>
                                    </select>


                                </div>





                                <!-- Product Brands-->


                                <div class="form-group">
                                    <label for="product-title">Product Quantity</label>
                                    <input type="number" name="product_quantity" class="form-control" value="<?php echo $product_quantity; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="product-title">Product Company</label>
                                    <input type="text" name="product_company" class="form-control" value="<?php echo $product_company; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="product-title">Product Model</label>
                                    <input type="text" name="product_model" class="form-control" value="<?php echo $product_model; ?>">
                                </div>


                                <!-- Product Tags -->


                                <!-- Product Image -->
                                <div class="form-group">
                                    <label for="product-title">Product Image</label>
                                    <input type="file" name="pimage">
<!--                                    <img width="100" src="../uploads/$product_image">-->

                                </div>



                            </aside><!--SIDEBAR-->



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
