<?php include_once ('Includes/init.php');
include_once ('Includes/accountclass.php');
include_once ('Includes/constantsclass.php');
include_once ('function.php');
include_once ('Includes/sessions.php');

$account = new Account($database->connection);



//if(isset($_POST["verify"])){
//    $ver=rand(10000,99999);
//    $phone = $database->escape_string($_POST["phone"]);
//    $check=0;
//    //send_sms($phone,$ver);
//
//
//
//
//}
//if(isset($_POST["confirm"])){
//    global $ver;
//    $otp= $database->escape_string($_POST["otp"]);
//    $check=0;
//    if($ver==$otp){
//        $check=1;
//    }
//    else{
//        $check=0;
//        $_SESSION["ErrorMessage"]="Invalid OTP! ";
//    }
//}
//
//global $check;
//if(isset($_POST["submit"]) && $check==1) {
//
//
//
//
//    $fname = $database->escape_string($_POST["fname"]);
//    $lname = $database->escape_string($_POST["lname"]);
//    $email = $database->escape_string($_POST["email"]);
//    $dob = $database->escape_string($_POST["dob"]);
//    $username = $database->escape_string($_POST["username"]);
//    $password = $database->escape_string($_POST["password"]);
//    $repassword = $database->escape_string($_POST["repassword"]);
//    $password=md5($password);
//    $pic = $database->escape_string($_FILES["pic"]["name"]);
//    $badd = $database->escape_string($_POST["badd"]);
//    $sadd = $database->escape_string($_POST["sadd"]);
//    $prov = $database->escape_string($_POST["prov"]);
//    $city = $database->escape_string($_POST["city"]);
//    $phone = $database->escape_string($_POST["phone"]);
//    $target="uploads/" . basename($_FILES['pic']['name']);
////    $account->register($username,$fname,$lname,$email,$password,$dob,$pic,$badd,$sadd,$prov,$city,$phone);
//    $sql1="INSERT INTO address (billing_address,shipping_address,province,city,phonenum) VALUES ('{$badd}','{$sadd}','{$prov}','{$city}','{$phone}')";
//    $result1=$database->query($sql1);
//    $sql2="Select AID from address where billing_address='$badd' AND shipping_address='$sadd' AND province='$prov' AND city='$city' AND phonenum='$phone'";
//    $addressID=$database->query($sql2);
//    while($row=fetch_array($addressID)){
//        $adress=$row['AID'];
//    }
//    global $adress;
//    require_once ("includes/datetime.php");
//    $sql3="INSERT INTO customer (fname,lname,email,dob,username,password,addressID,picture,createdate)
//          VALUES ('$fname','$lname','$email','$dob','$username','$password','$adress','$pic','$datetime')";
//    $result3=$database->query($sql3);
//    move_uploaded_file($_FILES['pic']['tmp_name'],$target);
//    $_SESSION["SuccessMessage"]="Custumer ID created Successfully! ";
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=59811d50-5410-45ae-b2e6-9639041fbf9e"> </script>
    <!-- End of  Zendesk Widget script -->

</head>
<body>


    <div class="container-fluid" >
        <div class="row">
            <?php
            require 'includes/header.php';

            ?>


        </div>
        <div class="row">

            <?php
            require 'includes/navbar.php';
            ?>


        </div>


        <div class="row" style="background:url(Images/bg2.jpg); background-size:100% 100%; opacity: 0.9;">

            <div class="page-header  text-center">
                <h1 style="font-size: 50px; font-weight: 400;"><b>Registration Form</b></h1>
            </div>
            <?php
            echo Message();
            echo SuccessMessage();
            ?>





            <div class="col-md-2">
             
         </div>
            
        
        
        <div class="col-md-8">
        
            
            <div class="container">               
            
                
                <div class="row">
                    
                
                
            <form action="otp.php" method="POST" enctype="multipart/form-data">
                
                   <!-- First Side of form -->
                <div class="col-md-5">
                    
                
                
            
                        <div class="form-group col-md-10">
                            
                            <br>
                            <label for=""><b>First Name</b></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="fname" id="fname"  placeholder="e.g Ali" pattern="[a-zA-Z]+" title="Name should have only Uppercase/lowercase letters" required="required"/>
                            </div>
                            
                            <br>
                            <label for="">Last Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="lname" id="lname"  placeholder="e.g Raza" pattern="[a-zA-Z]+" title="Name should have only Uppercase/lowercase letters" required="required"/>
                            </div>

                            <br>
                            <label for="">Email</label>                    
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="email" class="form-control" name="email" id="email"  placeholder="e.g ali@gmail.com" required="required"/>
                            </div>

                            <br>
                            <label for="">Date Of Birth</label>                    
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                                <input type="date" class="form-control" name="dob" id="dob" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" placeholder="" title="Please Enter A valid Date"/>
                            </div>

                            <br>
                            <label for=""><b>User Name</b></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="username" id="username"  placeholder="e.g aliraza123" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" title="Username should have only lower case letters" required="required"/>
                            </div>

                            <br>
                            <label for=""><b>Password</b></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"  placeholder="Enter any unique password" title="Please enter Uppercase,lowercase and number in password" required="required"/>
                            </div>

                            <br>
                            <label for=""><b> Re-Enter Password</b></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="repassword" id="repassword" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"  placeholder="Repeat your password" title="Please enter Uppercase,lowercase and number in password" required="required"/>
                            </div>

                                                       

                        </div>    
        </div>


        <!-- Second Side of form -->
        <div class="col-md-5">
                    
                
                
            
                <div class="form-group col-md-10">

                    <br>
                    <label for=""><b>Picture</b></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-image fa" aria-hidden="true"></i></span>
                        <input type="file" class="form-control" name="pic" id="pic"  placeholder=""/>
                    </div>
                    
                    <br>
                    <label for=""><b>Billing Adress</b></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-book fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="badd" id="badd"  placeholder="e.g plot#,flat#,area etc" required="required"/>
                    </div>
                    
                    <br>
                    <label for="">Shipping Adress</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-book fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="sadd" id="sadd"  placeholder="e.g plot#,flat#,area etc" required="required"/>
                    </div>

                    <br>
                    <label for="">Province</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-flag fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="prov" id="prov"  placeholder="e.g Sindh" required="required"/>
                    </div>

                    <br>
                    <label for="">City</label>                    
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-flag fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="city" id="city"  placeholder="e.g Karachi" required="required"/>
                    </div>

                    <br>
                    <label for=""><b>Phone Number</b></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="phone" id="phone"  placeholder="e.g 0321456987" required="required"/>
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success btn-lg btn-block" style="box-shadow: 2px 3px #21421e" name="submit">Submit</button>


                </div>
               

        </div>
               
               <br>
               <br>
                    
                      </form>
                  </div>
            </div>


            </div>
          

        
       
                
            
            
   
        

        <div class="col-md-2">
             
            </div>

        </div> 
    
    </div>
    <?php
    require 'includes/footer.php';

    ?>

</body>
</html>