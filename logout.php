<?php
include_once ('Includes/sessions.php');
include_once ('function.php');

if(!isset($_SESSION['user']))
{
    Redirect_to("index.php");
}

if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['user']);
    Redirect_to("index.php");
}
?>