<?php include_once ('../Includes/sessions.php');?>
<!-- Navigation -->
<div class="container-fluid">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Admin Panel</a>
        <a class="navbar-brand" href="../index.php">Home</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" ><i class="fa fa-user"></i><?php echo " Hi {$_SESSION['username']}";?><b> </b></a>
        </li>
    </ul>
</nav>
</div>