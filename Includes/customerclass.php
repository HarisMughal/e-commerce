<?php

class Customer{
    public $id;
    public $fname;
    public $lname;
    public $email;
    public $dob;
    public $username;
    public $password;
    public $addressid;
    public $date;



    public static function find_all_customers{
        $sql="SELECT * FROM customer";
        return self::find_this_query($sql);

    }
    public static function find_customers_by_username($username){
        global $database;
        $sql="Select * from customers WHERE username= $username";
        $result_set=self::find_this_query($sql);
        $found_user=mysqli_fetch_array($result_set);
        return $found_user;

    }

    public static function find_this_query($sql){
        global $database;
        $result_set=$database->query($sql);
        return $result_set;
    }
}

?>