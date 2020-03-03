<?php include ("function.php"); ?>
<?php include ("Includes/sessions.php");?>
<?php include_once ('Includes/datetime.php');?>
<?php include_once ("cart.php");?>
<?php

        if (isset($_POST['apply_coupon'])) {

            
    //        if($code==""){
    //
    //        }
    //        else{
            if($_SESSION['discount']==0) 
            {

                $code = $database->escape_string($_POST['code']);
               
                $sql = "Select discount from discount where discount_code = '{$code}'";
                // echo "<h1>".$sql."</h1>";
                $result_discount = $database->query($sql);
                if(mysqli_num_rows($result_discount) == 0){
                    $_SESSION["ErrorMessage"] ="Discount coupon is Invalid!";
                    Redirect_to("checkout.php");
                    return;
                    // exit();
                }
                $result_discount = $database->query($sql);
                if($_POST['promo_location'] != ''){
                    $promo_location = $database->escape_string($_POST['promo_location']);
                    $sql = "Select discount from discount where  location = '{$promo_location}'";
                    $result_discount = $database->query($sql);
                    if(mysqli_num_rows($result_discount) == 0){
                        $_SESSION["ErrorMessage"] ="Discount coupon is Invalid for your location!";
                        Redirect_to("checkout.php");
                        return;
                    }
                    foreach ($_SESSION as $name => $value)
                    {
                        if($value>0){
                            if(substr($name,0,8)=="product_"){
            
                                $length=strlen((int)$name - 8);
                                $id=substr($name,8 , $length);
            
            
                                global $database;
                                $sql="SELECT pname FROM product where pid=".$database->escape_string($id);
                                $result=$database->query($sql);
                                $flag = 0;
                                // echo "asd";
                                while ($row=fetch_array($result)){
                                    $_SESSION['pname']=$row['pname'];
                                    $sql = "Select discount from discount where product_title = '{$row['pname']}' ";
                                    // echo "<h1>".$sql."</h1>";
                                    $result_discount = $database->query($sql);
                                    if(mysqli_num_rows($result_discount) > 0){
                                        $row = fetch_array($result_discount);
                                        $dicountPercentage  =  $row['discount'];
                                        isset($_SESSION['item_total']) ? $total_price = $_SESSION['item_total'] : $total_price = $_SESSION['item_total'] = "0";
                                        $discount = ($total_price / 100) * $dicountPercentage ;
                                        $total_price = $total_price - $discount;
                                        $_SESSION['item_total'] = $total_price;
                                        $_SESSION['discount'] = $discount;
                                        $_SESSION["SuccessMessage"] = "Congratulations! Coupon applied Successfully";
                                    
                                    
                                        Redirect_to("checkout.php");
                                        return;
                                        // $flag = 1;
                                        // break;
                                    }
            
            
                                }
            
                            }
                        }
                    }
                    // return;
                    $_SESSION["ErrorMessage"] ="Discount coupon is Invalid for your products!";
                    }else{
                        // TODO add Welcome20
                        // $sql = "Select discount from discount where product_title = '{$row['pname']}' ";
                                        // echo "<h1>".$sql."</h1>";
                        // $result_discount = $database->query($sql);
                        if(mysqli_num_rows($result_discount) > 0){
                            $row = fetch_array($result_discount);
                            $dicountPercentage  =  $row['discount'];
                            isset($_SESSION['item_total']) ? $total_price = $_SESSION['item_total'] : $total_price = $_SESSION['item_total'] = "0";
                            $discount = ($total_price / 100) * $dicountPercentage ;
                            $total_price = $total_price - $discount;
                            $_SESSION['item_total'] = $total_price;
                            $_SESSION['discount'] = $discount;
                            $_SESSION["SuccessMessage"] = "Congratulations! Coupon applied Successfully";
                        
                        
                            Redirect_to("checkout.php");
                            return;
                            // $flag = 1;
                            // break;
                        }
                        
                    }

                // $sql = "Select discount from discount where dicount_code = {$code} and product_title = {$product_}";
                // $result = $database->query($sql);
                // $check_row = mysqli_num_rows($result);
                // if ($check_row == 1) {
                //     $row = fetch_array($result);
                //     if ($code == $row['discount_code']) {
                //         isset($_SESSION['item_total']) ? $total_price = $_SESSION['item_total'] : $total_price = $_SESSION['item_total'] = "0";
                //         $discount = ($total_price / 100) * 20;
                //         $total_price = $total_price - $discount;
                //         $_SESSION['item_total'] = $total_price;
                //         $_SESSION['discount'] = $discount;
                //         $_SESSION["SuccessMessage"] = "Congratulations! Coupon applied Successfully";
                //     } else {
                //         $_SESSION["ErrorMessage"] = "Invalid Coupon!";
                //     }

                // }
    //            else{
    //                $_SESSION["ErrorMessage"]="Invalid Coupon!";
    //            }
    //        }

            }
            else{
                $_SESSION["ErrorMessage"] ="Discount coupon is already applied!";
            }
    }


?>
<?php
if(isset($_POST['finalize_order'])){
    global $database;
    if(isset($_SESSION['user']) && isset($_POST['radio'])) {
        if ($_POST['radio'] == "Radio 1") {
            $username = $_SESSION['user'];
            global $username;
            $total_ammount = $_SESSION['item_total'];
            $sql = "SELECT ID FROM customer WHERE username='{$username}'";
            $result1 = $database->query($sql);
            while ($row = fetch_array($result1)) {
                $custID = $row['ID'];
            }
            global $custID;
            $status = "RECIEVED";
            $sql2 = "INSERT into dukan_order (custID,grand_total,status) VALUES ('{$custID}','{$total_ammount}','{$status}')";
            $result2 = $database->query($sql2);
            $last_id = mysqli_insert_id($database->connection);
            $_SESSION['last_id'] = $last_id;
            Redirect_to('finalorder.php');
//        $pname = $_SESSION['pname'];
//        $sell_price = $_SESSION['sell_price'];
//        $pro_quantity = $_SESSION['pro_quantity'];
//        $discount=$_SESSION['discount'];
//        $total=$_SESSION['item_total'];
//        if (!defined('DONT_RUN_SAMPLES')) {
//            authorizeCreditCard($total_ammount,$username);
//        }
        }
        if ($_POST['radio'] == "Radio 2") {
          $username = $_SESSION['user'];
            global $username;
            $sql3 = "SELECT * FROM customer WHERE username='{$username}'";
            $result3=$database->query($sql3);
            while($row=fetch_array($result3)) {
                $fname=$row['fname'];
                $lname=$row['lname'];
                $email=$row['email'];
                $aid=$row['addressID'];

            }
            global $fname;
            global $lname;
            global $email;

            global $aid;
            $sql4="select * from address where AID='{$aid}'";
            $result4=$database->query($sql4);
            while($row=fetch_array($result4)) {
                $shipping_address=$row['shipping_address'];
                $city=$row['city'];
                $province=$row['province'];

            }

            global $shipping_address;
            global $city;
            global $province;
            $total_ammount=$_SESSION['item_total'];
            $total_ammount=$total_ammount/138;
            if (!defined('DONT_RUN_SAMPLES')) {
                authorizeCreditCard($total_ammount,$fname,$lname,$email,$shipping_address,$city,$province);
            }
            $_SESSION["SuccessMessage"] = "Your order is Finalized and will be deliever to your Shipping Address!";
            }
        }

    else{
        $_SESSION["ErrorMessage"] = "You need to login first before Finalizing order!";
        Redirect_to('login.php');
    }
//    echo "hello";
//    if(isset($_POST['radio']))
//    {
//        echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
//    }


}

?>
<html>
<head>
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="js/jquery.js" ></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=0d69d2a3-6a9b-4e6e-86ef-28124365a237"> </script>
    <!-- End of  Zendesk Widget script -->
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php
        include_once 'includes/header.php';

        ?>


    </div>
    <div class="row">

        <?php
        if(!isset($_SESSION['user'])){
            include_once 'includes/navbar.php';
        }
        else{
            include_once 'includes/loginnav.php';
        }


        ?>


    </div>
    <!-- Page Content -->
<div class="container">
    <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Cart</a></li>
    </ul>

    <!-- /.row -->
    <div class="row">
        <?php echo Message();
        echo SuccessMessage();
        ?>
    </div>

    <div class="row">

        <h1>Shopping Cart</h1>

        <form action="">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Sub-total</th>

                </tr>
                </thead>
                <tbody>
                <?php cart(); ?>
                </tbody>
            </table>


        </form>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#promoModal" >Add Promo</button>

<div class="modal fade" id="promoModal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="promoModalLabel">Add Promo</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" role="form" class= "needs-validatio">
            <div class="form-group">
                <label>Promo Code:</label>
                <input type="text" name="code" class="form-control" required>
            </div>
          <div class="form-group">
            <label for="promo_location" class="col-form-label">Location:</label>
            <textarea class="form-control" name="promo_location"></textarea>
          </div>
          <div class="">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input class="btn btn-primary" type="submit"  name="apply_coupon" value="Apply Promo Code">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
        <!--  ***********CART TOTALS*************-->

        <div class="col-xs-4 pull-right ">
            <h2>Order Summary</h2>

            <table class="table table-bordered" cellspacing="0">

                <tr class="cart-subtotal">
                    <th>Items:</th>
                    <td><span class="amount"><?php

                            echo isset($_SESSION['item_quantity'])? $_SESSION['item_quantity'] : $_SESSION['item_quantity']="0" ;

                            ?></span></td>
                </tr>
                <tr class="shipping">
                    <th>Shipping and Handling</th>
                    <td>Free Shipping</td>
                </tr>
                <tr>
                    <th>Discount</th>
                    <td><span class="discount"><?php

                            echo isset($_SESSION['discount'])? $_SESSION['discount'] : $_SESSION['discount']="0" ;

                            ?></span></td>
                </tr>

                <tr class="order-total">
                    <th>Order Total</th>
                    <td><strong><span class="amount">&#8360;
                                <?php

                                echo isset($_SESSION['item_total'])? $_SESSION['item_total']=$_SESSION['item_total']-$_SESSION['discount'] : $_SESSION['item_total']="0" ;

                                ?>


                            </span></strong> </td>
                </tr>


                </tbody>


            </table>
<!--            <form class="form-group" method="post">-->
<!--                <label for="product-title">Order ID</label>-->
<!--                <select name="value" id="" class="form-control">-->
<!--                    <option value="">Select Payment Method</option>-->
<!--                    <option value="a">Cash On Delievery</option>-->
<!--                    <option value="b">Credit card Payment</option>-->
<!--                </select>-->
<!---->
<!--            </form>-->
            <form action="" method="post">
                <input type="radio" name="radio" value="Radio 1">Cash on Delievery
                <input type="radio" name="radio" value="Radio 2">Credit Card Payment
<!--            </form>-->
            <br><br>
<!--            <form action="" method="POST" role="form">-->
            <input class="btn btn-success btn-block btn-lg" style="box-shadow: 2px 3px #21421e" type="submit" name="finalize_order" value="Finalize Order">
            </form>

        </div><!-- CART TOTALS-->



    </div><!--Main Content-->


    <hr>

</div>
<!-- /.container -->

    <div class="row">

        <?php
        require 'includes/footer.php';

        ?>

    </div>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
<style>
/* Style the list */
ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: #eee;
}

/* Display list items side by side */
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}

/* Add a slash symbol (/) before/behind each list item */
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}

/* Add a color to all links inside the list */
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}

/* Add a color on mouse-over */
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}

</style>