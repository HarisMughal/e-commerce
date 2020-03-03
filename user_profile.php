<?php include("function.php"); ?>
<?php include ("Includes/sessions.php")?>
<?php update_profile(); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=59811d50-5410-45ae-b2e6-9639041fbf9e">
    </script>

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <?php
            require 'includes/header.php';
            
            ?>


        </div>



    </div>

    <div class="row">
        <div class="col-12">
            <?php
                include_once 'includes/loginnav.php';
                


            ?>
        </div>
    </div>

    <div class="main-content p-5  mt-5 mb-5">
        <div class="container-fluid p-5  mt-5 mb-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Profile</h4>
                        </div>
                        <div class="content">
                            <?php
                            global $database;
                            $sql = "select * from customer where   username = '{$_SESSION['user']}'";
                            $result = $database->query($sql);
                            // echo $sql;
                            while ($row = fetch_array ($result))
                            {
                        ?>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="text" class="form-control" required placeholder="Company"
                                                value="<?php echo $row['email'];?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" required disabled
                                                placeholder="Username" value="<?php echo $row['username'];?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Date of Birth</label>
                                            <input type="date" name="dob" required
                                                pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))"
                                                class="form-control" placeholder="Date of Birth"
                                                value="<?php echo $row['dob']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="fname" required class="form-control"
                                                placeholder="First Name" value="<?php echo $row['fname']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="lname" required class="form-control"
                                                placeholder="Last Name" value="<?php echo $row['lname']?>">
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                    </div>
                                </div>
                            </div> -->
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Please enter Uppercase,lowercase and number in password</label>
                                                <input type="password" id="pass" name="password" title=""
                                                    pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"
                                                    class="form-control" placeholder="Paasword" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                <div class="col-md-3">
                                    <label for=""><b>Phone Number</b></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="phone" id="phone"  placeholder="e.g 0321456987" required="required"/>
                                    </div>
                                </div>
                                
                            </div> -->
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Please enter Uppercase,lowercase and number in password</label>
                                                <input type="text" id="rePass" name="rePass" class="form-control"
                                                    pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"
                                                    placeholder="Re-type Password" value="">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <script language='javascript' type='text/javascript'>
                                    var password = document.getElementById("pass");
                                    var confirm_password = document.getElementById("rePass");

                                    function validatePassword() {

                                        if (password.value != confirm_password.value) {
                                            confirm_password.setCustomValidity("Password must be matching");
                                        } else {
                                            confirm_password.setCustomValidity('');
                                        }
                                    }
                                    console.log("asd");
                                    password.onchange = validatePassword;
                                    confirm_password.onkeyup = validatePassword;
                                </script>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Billing Address</label>
                                            <?php 
                                            $sql2 =  "select * from address where AID = {$row['addressID']} "; 
                                            $_SESSION['addressID_Profile'] = $row['addressID'];
                                            // echo $sql2;
                                            $result1 = $database->query($sql2);
                                            $row1 = fetch_array ($result1);
                                            // echo $row1['billing_address'];
                                        ?>
                                            <textarea rows="3" required name="bAddress" class="form-control"
                                                placeholder="Billing Address"><?php echo $row1['billing_address']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Shipping Address</label>
                                            <textarea rows="3" required name="sAddress" class="form-control"
                                                placeholder="Here can be your description"><?php echo $row1['shipping_address']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Province</label>
                                            <input type="text" required name="province" class="form-control"
                                                placeholder="Company" value="<?php echo $row1['province'];?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" required name="city" class="form-control"
                                                placeholder="Username" value="<?php echo $row1['city'];?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="text" required name="pNum" class="form-control"
                                                placeholder="Phone Number" value="<?php echo $row1['phonenum']?>">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="update_profile" style= "box-shadow: 2px 3px #21421e;"
                                    class="btn btn-success btn-fill pull-left mb-5">Update Profile</button>
                                <input style= "box-shadow: 2px 3px #21421e;" type="file" accept="image/*" id="upload_image" name="upload_image"
                                    class="btn btn-info btn-fill pull-right ml-5" value = "Upload Image">
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ml-5">
                    <div class="card card-user">
                        <div class="image">

                            <img class="image-fluid " style="height: 50rem; width: 42rem;"
                                src="<?php echo "uploads/".$row['picture'] ?> "
                                alt="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" />
                        </div>
                    </div>
                    <?php
                            
                    }
                ?>
                </div>
            </div>
        </div>
    </div>












    <div style="margin-top: 5%;">
        <?php
        require 'includes/footer.php';
    
    ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            var image_name = $('#upload_image').val();
            if(){

            }
        })
    </script>
</body>

</html>