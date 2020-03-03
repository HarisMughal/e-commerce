<?php include_once ('../Includes/databaseclass.php');?>
<?php include_once ('../function.php');?>
<?php include_once ('header.php');?>
<?php add_promo(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>AdminPanel</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/adminpanelstyle.css">
    
    <link href="../css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

    <script>
        $(document).ready(function(){
            // var $input =  document.getElementById
            $('input.typeahead').typeahead({
                
                name: 'product_title',
                remote:'http://localhost/Dukan.pk(finalHCI)/admin/search.php?key=%QUERY' ,
                limit : 10,
            });
            
            
        });
    </script>

</head>
<body>
<div class="Line" style="height: 1px; background: #27aae1;"></div>
<div class="container-fluid">
    <div class="row">

        <!-- Navbar Start -->
<?php include('navbar.php') ?>
       <!-- Navbar End -->

        <div class="col-sm-10">
            <!--            <br><br>-->
            <!--            <br><br>-->
            <!---->
            <!---->

            <div id="page-wrapper">

            <div class="container-fluid">






<div class="col-md-12">
    <br><br>

<div class="row">
<h1 class="page-header">
   Add Promo

</h1>
</div>
<?php
    echo Message();
    echo SuccessMessage();
?>
               


<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group needs-validation" novalidate>
    <div>
        <label for="product_title">Product Title </label>
        <input type="text"  name="product_title" class="form-control " placeholder="Add Product Name"  >
    </div>
    <div>
        <label for="promo_code">Promo Code </label>
        <input type="text" name="promo_code" class="form-control" placeholder="Add Promo Code"  required> 
       
    </div>
    


    <div class="form-group">
        <label for="promo_location">Promo Location</label>
        <textarea name="promo_location" id="" cols="30" rows="5" class="form-control"placeholder="Add Location"></textarea>
    </div>






    
    

</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4 needs-validation" novalidate>

     


     <!-- Product Categories-->






    <!-- Product Brands-->



    <div class="form-group mb-5">
        <label for="promo_discount">Discount percentage %</label>
        <input type="number" min = "1" max="100" name="promo_discount" class="form-control"placeholder="Add Discount percentage"  required>
    </div>


    
    <div class="form-group">
        <!--       <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">-->
        <input type="submit" name="publish" class="btn btn-success btn-block btn-lg" value="Publish">
    </div>
    


</aside><!--SIDEBAR-->


    
</form>



                



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
<!--    <script src="js/jquery.js"></script>-->
<!---->
<!--    Bootstrap Core JavaScript -->
<!--    <script src="js/bootstrap.min.js"></script>-->

    <!-- Morris Charts JavaScript -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js" ></script>

</body>

</html>
<!-- 
<script>
    $(document).ready(function(){
 
        $('input.product_title').typeahead({
            source: function(query, result)
            {
                $.ajax({
                        url:"search.php",
                        method:"GET ",
                        data:{query:query},
                        dataType:"json",
                        success:function(data)
                        {
                        result($.map(data, function(item){
                            return item;
                        }));
                        }
                    })
                }
            });
    
    });
</script> -->
