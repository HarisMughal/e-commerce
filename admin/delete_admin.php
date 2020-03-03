<?php include('../Includes/databaseclass.php');

include_once ('../Includes/sessions.php');
include_once ('../function.php');

if(isset($_GET['id'])){


    $sql="Delete from admin where ID=". $database->escape_string($_GET['id']) ." ";
    $result=$database->query($sql);
    $_SESSION["SuccessMessage"]="Admin Deleted Successfully! ";
    Redirect_to("users.php");
}
else{
    Redirect_to("users.php");

}

?>

