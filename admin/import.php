<?php include_once ('../Includes/databaseclass.php');?>
<?php
global $database;
if(isset($_POST["Import"])){

    $filename=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileExtension=pathinfo($filename,PATHINFO_EXTENSION);

    //echo $fileExtension;

    $allowedType=array('csv');
    //if(!in_array($filename,$allowedType)){?>
        <!-- <div class="alert alert-danger">
            Invalid File Extension
        </div> -->
    <?php } //else{
        $handle=fopen($fileTmpName,'r');
        while(($emapData=fgetcsv($handle,1000,','))!==False){

            $sql = "INSERT INTO product (pname,category_no,company,model,buying_price,sell_price,quantity,pro_desc,short_desc,picture) 
                 	values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]')";
            $result=$database->query($sql);


        
    //}

    

}



    	 
?>	