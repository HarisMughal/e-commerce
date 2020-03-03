<?php include("function.php"); ?>
<?php include_once ('Includes/sessions.php');?>
<?php include_once ('Includes/databaseclass.php');?>
<?php
global $database;
    $sql="Select * from product_category where cno=" . $database->escape_string($_GET['id']) . " ";
    $result=$database->query($sql);
while($row=fetch_array($result)){
    $category_name=$row['category_name'];
}

?>
<html>
<head>
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
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

    </div>
    <!-- Page Content -->
<div class="row">

    <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php">Category</a></li>
    <li><a href="#"><?php echo $category_name?></a></li>
    
    </ul>


    <h1 class="page-header text-center">Category: <?php echo $category_name?></h1>


    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h2><u>Latest Products:</u></h2>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <br>
    <div class="row text-center">

        <?php get_products_in_category(); ?>

    </div>
    <!-- /.row -->

</div>
    <div class="row">

        <?php
        require 'includes/footer.php';

        ?>

    </div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

<style>
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

</style>