<?php include ('Includes/init.php');?>
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js" ></script>
</head>
<body>
<div class="container">


    <div class="page-header">
        <h1 class="h2">Add New Product <a class="btn btn-default" href="index.php"> <span class="glyphicon glyphicon-eye-open"></span> View All Products</a></h1>
    </div>
    <form method="post" enctype="multipart/form-data" class="form-horizontal">

        <table class="table table-bordered table-responsive">

            <tr>
                <td><label class="control-label">Category</label></td>
                <td><select name="cateID" class="form-control">
                        <option>Select</option>
                        <?php $stmt = $database->query('SELECT cno, category_name FROM product_category ORDER BY cno ASC');
                         if($stmt->rowCount() > 0)
                        {
                            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                            {
                                extract($row);
                                ?>
                                <option value="<?php echo $cateID; ?>"><?php echo $cateName; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label class="control-label">Product Name</label></td>
                <td><input class="form-control" type="text" name="productName" placeholder="Enter Product Name" value="<?php echo $productName; ?>" /></td>
            </tr>

            <tr>
                <td><label class="control-label">Company</label></td>
                <td><input class="form-control" type="text" name="productComp" placeholder="Product Company" value="<?php echo $productComp; ?>" /></td>
            </tr>

            <tr>
                <td><label class="control-label">Model</label></td>
                <td><input class="form-control" type="text" name="productModel" placeholder="Product Model" value="<?php echo $productModel; ?>" /></td>
            </tr>

            <tr>
                <td><label class="control-label">Price</label></td>
                <td><input class="form-control" type="text" name="productPrice" placeholder="Product Price" value="<?php echo $productPrice; ?>" /></td>
            </tr>

            <tr>
                <td><label class="control-label">Product Image</label></td>
                <td><input class="input-group" type="file" name="product_image" accept="image/*" /></td>
            </tr>

            <tr>
                <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
                        <span class="glyphicon glyphicon-save"></span> Save
                    </button>
                    <a href="index.php" class="btn btn-default">
                        <span class="glyphicon glyphicon-remove"></span> Canel
                        </button>
                </td>
            </tr>

        </table>

    </form>

</div>


</body>
</html>