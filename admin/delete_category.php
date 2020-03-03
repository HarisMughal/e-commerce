<?php include('../Includes/databaseclass.php');

include_once ('../Includes/sessions.php');
include_once ('../function.php');

if(isset($_GET['id'])){


    $sql="Delete from product_category where cno=". $database->escape_string($_GET['id']) ." ";
    $result=$database->query($sql);
    $_SESSION["SuccessMessage"]="Category deleted Successfully! ";
    Redirect_to("categories.php");
}
else{
    Redirect_to("categories.php");

}

?>

