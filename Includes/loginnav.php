<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#btncollapse"
                aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">Dukan.pk</a>
        </div>
        <div id="btncollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="checkout.php"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a></li>
                <li><a href="ContactUs.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>

            </ul>
            <div class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default" name="searchbutton">
                                <i class="glyphicon glyphicon-search"></i>

                            </button>

                        </div>

                    </div>

                </form>
                <li> <a href="user_profile.php">Hi! <?php echo $_SESSION['user']; ?></a></li>
                <li><a href="logout.php?logout">Sign Out</a></li>
            </div>


        </div>
    </div>
</nav>