<?php

include_once ('../function.php');
session_start();
session_destroy();
Redirect_to('adminlogin.php');


?>