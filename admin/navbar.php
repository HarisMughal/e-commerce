<div class="col-sm-2">
    <br><br>
    <br><br>
    <ul id="Admin_menu" class="nav nav-pills nav-stacked ">
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?>>
            <a href="index.php">
                <span class="glyphicon glyphicon-th"></span>
                &nbsp;Dashboard</a></li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'orders.php') echo 'class="active"' ?>>
            <a href="orders.php">
                <span class="glyphicon glyphicon-th"></span>
                &nbsp;Orders</a></li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'products.php') echo 'class="active"' ?>>
            <a href="products.php">
                <span class="glyphicon glyphicon-th"></span>
                &nbsp;View Products</a></li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'add_product.php') echo 'class="active"' ?> >
                <a href="add_product.php">
                <span class="glyphicon glyphicon-list-alt"></span>
                &nbsp;Add New Product</a></li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'import_data.php') echo 'class="active"' ?> ><a href="import_data.php">
                <span class="glyphicon glyphicon-list-alt"></span>
                &nbsp;Import Products via excel</a></li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'add-promo.php') echo 'class="active"' ?>>
                <a href="add-promo.php">
                <span class="glyphicon glyphicon-th"></span>
                &nbsp;Add promo</a>
        </li>                
        
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'categories.php') echo 'class="active"' ?> ><a href="categories.php">
                <span class="glyphicon glyphicon-tags"></span>
                &nbsp;Categories</a></li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'users.php') echo 'class="active"' ?> ><a href="users.php">
                <span class="glyphicon glyphicon-user"></span>
                &nbsp;Manage Admins</a></li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'riders.php') echo 'class="active"' ?> ><a href="riders.php">
                <span class="glyphicon glyphicon-user"></span>
                &nbsp;Manage Riders</a></li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'Assign_order.php') echo 'class="active"' ?> ><a href="Assign_order.php">
                <span class="glyphicon glyphicon-user"></span>
                &nbsp;Assign Order</a></li>
        <li ><a href="logout.php">
                <span class="glyphicon glyphicon-log-out"></span>
                &nbsp;Logout</a></li>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br><br><br><br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>

    </ul>
</div>