<?php include("function.php"); ?>
<?php include ("Includes/sessions.php"); ?>
<?php
if(isset($_POST["submit"])){
    $ver=rand(10000,99999);
    $phone = $database->escape_string($_POST["phone"]);
    $check=0;
    $_SESSION['ver']=$ver;
   // send_sms($phone,$ver);
    echo $ver;
    $fname = $database->escape_string($_POST["fname"]);
    $lname = $database->escape_string($_POST["lname"]);
    $email = $database->escape_string($_POST["email"]);
    $dob = $database->escape_string($_POST["dob"]);
    $username = $database->escape_string($_POST["username"]);
    $password = $database->escape_string($_POST["password"]);
    $repassword = $database->escape_string($_POST["repassword"]);
    $pic = $database->escape_string($_FILES["pic"]["name"]);
    $badd = $database->escape_string($_POST["badd"]);
    $sadd = $database->escape_string($_POST["sadd"]);
    $prov = $database->escape_string($_POST["prov"]);
    $city = $database->escape_string($_POST["city"]);
    $phone = $database->escape_string($_POST["phone"]);
    $target="uploads/" . basename($_FILES['pic']['name']);
    $temp=$_FILES['pic']['tmp_name'];
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['email']=$email;
    $_SESSION['dob']=$dob;
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['repassword']=$repassword;
    $_SESSION['pic']=$pic;
    $_SESSION['badd']=$badd;
    $_SESSION['sadd']=$sadd;
    $_SESSION['prov']=$prov;
    $_SESSION['city']=$city;
    $_SESSION['phone']=$phone;
    $_SESSION['target']=$target;
    $_SESSION['temp']=$temp;
}
if(isset($_POST["confirm"])){
    $ver1=$_SESSION['ver'];
    $otp= $database->escape_string($_POST["otp"]);
    $flag=false;
    echo $otp;
    if($ver1==$otp){
        $flag=true;
    }
    if($flag){
        global $database;

        $fname=$_SESSION['fname'];
        $lname=$_SESSION['lname'];
        $email=$_SESSION['email'];
        $dob=$_SESSION['dob'];
        $username=$_SESSION['username'];
        $password=$_SESSION['password'];
        $password=md5($password);
        $repassword=$_SESSION['repassword'];
        $pic=$_SESSION['pic'];
        $badd=$_SESSION['sadd'];
        $sadd=$_SESSION['sadd'];
        $prov=$_SESSION['prov'];
        $city=$_SESSION['city'];
        $phone=$_SESSION['phone'];
        $target=$_SESSION['target'];
        $temp=$_SESSION['temp'];
        $sql1="INSERT INTO address (billing_address,shipping_address,province,city,phonenum) VALUES ('{$badd}','{$sadd}','{$prov}','{$city}','{$phone}')";
        $result1=$database->query($sql1);
        $sql2="Select AID from address where billing_address='$badd' AND shipping_address='$sadd' AND province='$prov' AND city='$city' AND phonenum='$phone'";
        $addressID=$database->query($sql2);
        while($row=fetch_array($addressID)){
            $adress=$row['AID'];
        }
        global $adress;
        require_once ("includes/datetime.php");
        $sql3="INSERT INTO customer (fname,lname,email,dob,username,password,addressID,picture,createdate)
          VALUES ('$fname','$lname','$email','$dob','$username','$password','$adress','$pic','$datetime')";
        $result3=$database->query($sql3);
        move_uploaded_file($temp,$target);
        $_SESSION["SuccessMessage"]="Custumer ID created Successfully! ";
    }
    else{
        $_SESSION["ErrorMessage"]="Invalid OTP! ";
    }
}



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

<div class="container-fluid">
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
            <h1 style="font-size: 50px; font-weight: 400;"><b>OTP confirmation</b></h1>
        </div>
        <div class="row">
            <?php echo Message();
            echo SuccessMessage();
            ?>
        </div>


        <div class="col-md-4">

        </div>

        <div class="col-md-4"  style="border:3px solid; border-radius: 30px;" >


            <form action="" method="POST" role="form">
<!--                --><?php //login_user(); ?>

                <div class="form-group">

                    <br>
                    <label for="" style="font-size:20px; "><b>OTP</b></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa-2x" aria-hidden="true"></i></span>
                        <input type="text" class="form-control input-lg" name="otp" id="otp"  placeholder="12345"/>
                    </div>


                    <br>
                </div>



                <button type="submit" name="confirm" class="btn btn-success btn-block ">Confirm</button>
                <br>

            </form>



        </div>


        <div class="col-md-4 ">

        </div>
        <br>

        <br>


    </div>
    <!--          <br>-->


</div>

<?php
require 'includes/footer.php';

?>

</body>
</html>
