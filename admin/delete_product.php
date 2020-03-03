<?php include('../Includes/databaseclass.php');

include_once ('../Includes/sessions.php');
include_once ('../function.php');

if(isset($_GET['id'])){


    $sql="Delete from product where pid=". $database->escape_string($_GET['id']) ." ";
    $result=$database->query($sql);
    $_SESSION["SuccessMessage"]="Product deleted Successfully! ";
    Redirect_to("products.php");
}
else{
    Redirect_to("products.php");

}

?>

