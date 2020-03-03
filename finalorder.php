<?php include ("function.php"); ?>
<?php include ("Includes/sessions.php");?>
<?php include_once ('Includes/datetime.php');?>
<?php include_once ("cart.php");?>
<?php
if(!isset($_SESSION['user'])){
    $_SESSION["ErrorMessage"] = "You need to login first before finalizing the order!";

    Redirect_to('login.php');
}
?>
<html>
<head>
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js" ></script>
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=59811d50-5410-45ae-b2e6-9639041fbf9e"> </script>
    <!-- End of  Zendesk Widget script -->
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php
        include_once 'includes/header.php';

        ?>


    </div>
    <div class="row">

        <?php
        include_once 'includes/navbar.php';
        ?>


    </div>
    <!-- Page Content -->
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="http://localhost/My%20Website/Dukan.pk(finalHCI)/index.php">Home</a></li>
            <li><a href="http://localhost/My%20Website/Dukan.pk(finalHCI)/checkout.php">My Cart</a></li>
            <li><a href="#">Finalize Order</a></li>
        </ul>



        <?php
        report();


        ?>
        <h1 class="text-center">Order Submited Successfully!</h1>
        <h2 class="text-center">We will shortly assign rider and will contact you soon.</h2>


    </div>
    <!-- /.container -->

    <div class="row">

        <?php
        require 'includes/footer.php';

        ?>

    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<style>
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
