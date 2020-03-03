<?php include('../Includes/databaseclass.php');

include_once ('../Includes/sessions.php');
include_once ('../function.php');

if(isset($_GET['id'])){


    $sql="Delete from rider where rider_ID=". $database->escape_string($_GET['id']) ." ";
    $result=$database->query($sql);
    $_SESSION["SuccessMessage"]="Rider Deleted Successfully! ";
    Redirect_to("riders.php");
}
else{
    Redirect_to("riders.php");

}

?>