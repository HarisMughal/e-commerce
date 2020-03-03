<?php include ("Includes/init.php"); ?>
<?php include ("Includes/sessions.php"); ?>
<?php
require_once 'mailer/class.phpmailer.php';
$mail = new PHPMailer(true);
    if(isset($_POST["Submit"])){
        $name=$database->escape_string($_POST["name"]);
        $email=$database->escape_string($_POST["email"]);
        $mobileno=$database->escape_string($_POST["mobileno"]);
        $orderno=$database->escape_string($_POST["orderno"]);
        $comment=$database->escape_string($_POST["comment"]);
        $subject    = "Thank You for Contact us";
        $text_message    = "Hello $name,";
        $message  = "<html><body>";
        $message .= "<table class=\"table table-hover \" border=\"5\" height=\"350\" width=\"400\"><thead>
                <tr>
                    <th colspan=\"2\">Contact US</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Name</td>
                    <td>'$name'</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>'$email'</td>
                </tr>
                <tr>
                    <td>Mobile no</td>
                    <td>'$mobileno'</td>
                </tr>
                <tr>
                    <td>Order no</td>
                    <td>'$orderno'</td>
                </tr>
                <tr>
                    <td>Comment/FeedBack</td>
                    <td>'$comment'</td>
                </tr>
            </tbody>";
        $message .= "</table>";

        $message .= "</td></tr>";
        $message .= "</table>";

        $message .= "</body></html>";
        try
        {
            $mail->IsSMTP();
            $mail->isHTML(true);
            $mail->SMTPDebug  = 0;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = "ssl";
            $mail->Host       = "smtp.gmail.com";
            $mail->Port       = 465;
            $mail->AddAddress($email);
            $mail->Username   ="dukan.pk1@gmail.com";
            $mail->Password   ="ooaddb123";
            $mail->SetFrom('dukan.pk1@gmail.com','Dukan.pk');
            $mail->AddReplyTo("dukan.pk1@gmail.com","Dukan.pk");
            $mail->Subject    = $subject;
            $mail->Body 	  = $message;
            $mail->AltBody    = $message;

//            if($mail->Send())
//            {
//
//                $msg = "<div class='alert alert-success'>
//							Hi,<br /> ".$full_name." mail was successfully sent to ".$email." go and check, cheers :)
//							</div>";
//
//            }
        }
        catch(phpmailerException $ex)
        {
            $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
        }

        include ("includes/datetime.php");
        $sql="INSERT INTO contactus(name,email,mobileno,orderno,comment,datetime)
               VALUES('$name','$email','$mobileno','$orderno','$comment','$datetime')";
        $result=$database->query($sql);
         if($result){
            $_SESSION["SuccessMessage"]="Form Submitted Successfully! ";
        }

    }
?>

<html>
    <head>
        <title>Contact Us</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/contactstyle.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js" ></script>
         <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=0d69d2a3-6a9b-4e6e-86ef-28124365a237"> </script>
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
            if(!isset($_SESSION['user'])){
                require 'includes/navbar.php';
            }
            else{
                require 'includes/loginnav.php';
            }
            ?>
                            <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>

            </div>

            <div class="row" id="contactheader">
                <center>
<!--                <h1 class="jumbotron">Contact Us</h1>-->
                    <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
                </center>
                <div>
                    <?php
                    echo Message();
                    echo SuccessMessage();
                    ?>
                </div>
            </div>
            
            <div class="row contact-section" id="contact" >
                <div class="col-md-offset-4 col-md-4" >
                    
                <form action="ContactUs.php" method="post" enctype="multipart/form-data">
    <fieldset>
    <div class="form-group">
    <label for="name"><span class="FieldInfo">Name:</span></label>
    <input class="form-control" type="text" required="required" name="name" id="title" placeholder="eg:Ali" pattern="[a-zA-Z]+" title="Name should have only Uppercase/lowercase letters" required="required">
    </div>
    <div class="form-group">
    <label for="email"><span class="FieldInfo">Email</span></label>
    <input class="form-control" type="email" required="required" name="email" id="title" placeholder="eg:abc@gmail.com" required="required">
    </div>
    <div class="form-group">
    <label for="mobileno"><span class="FieldInfo">Mobile No</span></label>
    <input class="form-control" type="tel" required="required" name="mobileno" id="title" placeholder="eg:032123456789" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$" required="required">
    </div>
    <div class="form-group">
    <label for="orderno"><span class="FieldInfo">Order no</span></label>
    <input class="form-control" type="number" name="orderno" id="title" placeholder="eg:10" required="required">
    </div>
    <div class="form-group">
    <label for="postarea"><span class="FieldInfo">Comment/Feedback:</span></label>
    <textarea class="form-control" required="required" name="comment" id="postarea"></textarea>
    <br>

<input class="btn btn-success col-md-offset-5" style="box-shadow: 2px 3px #21421e" type="Submit" name="Submit" value="Submit">
    </fieldset>
    <br>
</form>
                    
                </div>
            </div>

            <div class="row">
            <?php

                require 'includes/footer.php';

            ?>
            </div>
            
            
        </div>
        <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js" ></script>
    </body>
</html>
<style>

#contact{
    font-family: 'Teko', sans-serif;
    padding-top: 60px;
    width: 100%;
    width: 100vw;
    height: 550px;
    background: #3a6186; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #3a6186 , green); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #3a6186 , green); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;
}
#contactheader{
    font-family: 'Teko', sans-serif;
    width: 100%;
    width: 100vw;
    background: #3a6186; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #3a6186 , green); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #3a6186 , green); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;

}
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

