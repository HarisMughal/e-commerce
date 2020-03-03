<?php include("function.php"); ?>
<?php include ("Includes/sessions.php")?>
<html>

<head>
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
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
                include_once 'includes/navbar.php';
            }
            else{
                include_once 'includes/loginnav.php';
                include_once 'includes/loginnav.php';
            }


            ?>


        </div>
        <div class="row">
            <?php
            require 'Includes/sidenav.php';
            ?>

            <div class="col-md-9">
                <div class="carousel slide" id="myCarousel" data-ride="carousel">
                    <!--ol class="carousel-indicator">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                        <li data-target="#myCarousel" data-slide-to="7"></li>
                    </ol-->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="Images/a1.jpg">
                            <div class="carousel caption">
                                <h2>Men's Clothing</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="Images/a2.jpg">
                            <div class="carousel caption">
                                <h2>Women's Clothing</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="Images/Grocery.jpg">
                            <div class="carousel caption">
                                <h2>Grocery</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="Images/a4.jpg">
                            <div class="carousel caption">
                                <h2>Appliances</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="Images/Accessories.jpg">
                            <div class="carousel caption">
                                <h2>Accessories</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="Images/khadi.jpg">
                            <div class="carousel caption">
                                <h2>Khadi Deals</h2>
                            </div>
                        </div>
                        <!-- <div class="item">
                            <img src="Images/a3.list.jpg">
                            <div class="carousel caption">
                                <h2>Royal Tag deals</h2>
                            </div>
                        </div> -->
                        <div class="item">
                            <img src="Images/Mobiles.jpg">
                            <div class="carousel caption">
                                <h2>Mobiles</h2>
                            </div>
                        </div>
                        <a href="#myCarousel" class="right carousel-control" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                        <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>


                    </div>

                </div>
            </div>

        </div>
        <br>
        <br>
        <div class="row">
            <!-- container fulid many lagya ha -->

                    <?php get_products();  ?>
        </div>



    </div>
    <?php
        require 'includes/footer.php';
    
    ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
</body>


</html>