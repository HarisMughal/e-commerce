
<?php include_once("function.php"); ?>
<?php include_once ("Includes/sessions.php"); ?>
<?php
if(isset($_GET["add"])){

    $sql="SELECT * from product where pid=". $database->escape_string($_GET["add"]) ." ";
    $result1=$database->query($sql);
    while ($row=fetch_array($result1)){
        if($row['quantity'] != $_SESSION['product_'. $_GET["add"]]){
            $_SESSION['product_'. $_GET["add"]]+=1;
            Redirect_to("checkout.php");
        }
        else{
            $_SESSION["ErrorMessage"]="We only have ". $row['quantity'] . " "." {$row['pname']} ". "Available!" ;
            Redirect_to("checkout.php");
        }
    }

//        $_SESSION['product_'. $_GET['add']]+=1;
//        Redirect_to("index.php");


    }
    if(isset($_GET['remove'])){
        $_SESSION['product_'. $_GET["remove"]]--;
        if($_SESSION['product_'. $_GET["remove"]]<1){
            unset($_SESSION['item_total']);
            unset($_SESSION['item_quantity']);
           unset($_SESSION['discount']);
            Redirect_to("checkout.php");
        }
        else{
            Redirect_to("checkout.php");
        }
    }
    if(isset($_GET['delete'])){
        $_SESSION['product_'. $_GET["delete"]]='0';
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);
        unset($_SESSION['discount']);
        Redirect_to("checkout.php");

    }

    function cart(){

        $total=0;
        $item_quantity=0;

        foreach ($_SESSION as $name => $value){
            if($value>0){
                if(substr($name,0,8)=="product_"){

                    $length=strlen((int)$name - 8);
                    $id=substr($name,8 , $length);


                    global $database;
                    $sql="SELECT * FROM product where pid=". $database->escape_string($id) ." ";
                    $result=$database->query($sql);
                    while ($row=fetch_array($result)){
                        $sub=$row['sell_price'] * $value;
                        $item_quantity += $value;
                        $_SESSION['pname']=$row['pname'];
                        $_SESSION['sell_price']=$row['sell_price'];
                        $_SESSION['pro_quantity']=$value;

                        $product=<<<DELIMETER
            <tr>
                    <td>{$row['pname']}<br>
                    <img width="100px" height="100px" src="uploads/{$row['picture']}"
                    </td>
                    <td>&#8360;{$row['sell_price']}</td>
                    <td>{$value}</td>
                    <td>&#8360;{$sub}</td>
                    <td><a class="btn btn-warning" style="box-shadow: 2px 3px #0014a8" href="cart.php?remove={$row['pid']}"><span class="glyphicon glyphicon-minus"></span></a> <a class="btn btn-success" style="box-shadow: 2px 3px #0014a8" href="cart.php?add={$row['pid']}"><span class="glyphicon glyphicon-plus"></span></a> <a class="btn btn-danger" style="box-shadow: 2px 3px #0014a8" href="cart.php?delete={$row['pid']}"><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>


DELIMETER;
                        echo $product;


                    }
                    $_SESSION['item_total']=$total+=$sub;
                    $_SESSION['item_quantity']=$item_quantity;

                }








            }

        }
    }



function report(){

    $last_id=$_SESSION['last_id'];

    $total=0;
    $item_quantity=0;

    foreach ($_SESSION as $name => $value){
        if($value>0){
            if(substr($name,0,8)=="product_"){

                $length=strlen((int)$name - 8);
                $id=substr($name,8 , $length);


                global $database;
                $sql="SELECT * FROM product where pid=". $database->escape_string($id) ." ";
                $result=$database->query($sql);
                while ($row=fetch_array($result)){
                    $sub=$row['sell_price'] * $value;
                    $item_quantity += $value;
                    $product_price=$row['sell_price'];
                    $sql="INSERT INTO reports (product_id,order_id,product_price,product_quantity) VALUES ('$id','$last_id','$product_price','$value')";
                    $result2=$database->query($sql);
                    $quantity_updated=$row['quantity']-$value;
                    $sql2="UPDATE product SET ";
                    $sql2.= "quantity        = '{$quantity_updated}'          ";
                    $sql2.= "WHERE pid    =".$id;
                    $result3=$database->query($sql2);

//                    $_SESSION['pname']=$row['pname'];
//                    $_SESSION['sell_price']=$row['sell_price'];
//                    $_SESSION['pro_quantity']=$value;
//
//                    $product=<<<DELIMETER
//            <tr>
//                    <td>{$row['pname']}<br>
//                    <img width="100px" height="100px" src="uploads/{$row['picture']}"
//                    </td>
//                    <td>&#8360;{$row['sell_price']}</td>
//                    <td>{$value}</td>
//                    <td>&#8360;{$sub}</td>
//                    <td><a class="btn btn-warning" style="box-shadow: 2px 3px #0014a8" href="cart.php?remove={$row['pid']}"><span class="glyphicon glyphicon-minus"></span></a> <a class="btn btn-success" style="box-shadow: 2px 3px #0014a8" href="cart.php?add={$row['pid']}"><span class="glyphicon glyphicon-plus"></span></a> <a class="btn btn-danger" style="box-shadow: 2px 3px #0014a8" href="cart.php?delete={$row['pid']}"><span class="glyphicon glyphicon-remove"></span></a></td>
//                </tr>
//
//
//DELIMETER;
//                    echo $product;


                }
                $total+=$sub;
                $item_quantity;


            }








        }

    }
}

?>
<html>
<head>
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js" ></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php
        include_once 'includes/header.php';

        ?>


    </div>
<!--    <div class="row">-->
<!---->
<!--        --><?php
//        include_once 'includes/navbar.php';
//        ?>
<!---->
<!---->
<!--    </div>-->

<!--    <div class="row">-->
<!---->
<!--        --><?php
//        include_once 'includes/footer.php';
//
//        ?>
<!---->
<!--    </div>-->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
