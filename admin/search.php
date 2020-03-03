<?php 
    include_once ("../Includes/databaseclass.php");
    
    global $database;
    // echo "asdasd";
    $key = ($_GET['key']);
    $sql = "select pname from product where pname LIKE '%{$key}%'";
    $result=$database->query($sql);
    while($row=mysqli_fetch_assoc($result))
    {
      $array[] = $row['pname'];
    }
    echo json_encode($array);
?>