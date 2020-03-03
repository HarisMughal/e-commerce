<?php     require_once ("datetime.php");
?>
<?php


 class Account
 {
     public $con;
     public $errorArray;

     public function __construct($con) //constructor of account class
     {
         $this->con=$con;
         $this->errorArray= array(); //innitialize the array

     }

     public function logIn($un , $pw){

         $pw=md5($pw);
         $query=mysqli_query($this->con,"SELECT * FROM users WHERE username = '$un' AND password = '$pw'");

         if(mysqli_num_rows($query)==1){
             return true;
         }
         else{
             array_push($this->errorArray,Constants::$loginFailed);
             return false;
         }

     }

     public function register($username,$lname,$fname,$email,$password,$dob,$pic,$badd,$sadd,$prov,$city,$phone,$datetime)
     {
//         $this->validateUsername($un);
//         $this->validateFirstName($fn);
//         $this->validateLastName($ln);
////         $this->validateEmails($em,$em2);
         if (empty($this->errorArray)==true) {
             //add in database
             return $this->insertUserInformation($fname,$lname,$email,$dob,$username,$password,$pic,$badd,$sadd,$prov,$city,$phone,$datetime);
         }
         else {
             return false;
         }
     }
     //to check and show all the errors and in sign-up befre goto database
     public function getError($error){
         if(!in_array($error,$this->errorArray)) {
             $error="";
         }
         return "<span class='errorMessage'>$error</span>";
     }

     public function insertUserInformation($fname,$lname,$email,$dob,$username,$password,$pic,$badd,$sadd,$prov,$city,$phone,$datetime){
         include_once ('databaseclass.php');
         global $database;

//         $encryptedPassword=md5($pw);
//         $profilePic= "assets/images/profile-pic/user1.png";
//         $date = date("Y-m-d");

         $sql1="INSERT INTO address (billing_address,shipping_address,province,city,phonenum) VALUES ('{$badd}','{$sadd}','{$prov}','{$city}','{$phone}')";
         $result1=$database->query($sql1);
             $sql2="Select AID from address where billing_address='$badd' AND shipping_address='$sadd' AND province='$prov' AND city='$city' AND phonenum='$phone'";
    $addressID=$database->query($sql2);
         if ($addressID->num_rows > 0) {
             echo "<table><tr><th>ID</th><th>Name</th></tr>";
             // output data of each row
             while($row = $addressID->fetch_assoc()) {
                 $address=$row["AID"];
                 echo "<tr><td>".$row["AID"]."</td><td>";
                 global $address;
             }
             echo "</table>";
         } else {
             echo "0 results";
         }
         echo $address;



    $sql3="INSERT INTO customer (fname,lname,email,dob,username,password,addressID,picture,createdate)
          VALUES ('$fname','$lname','$email','$dob','$username','$password','$address','$pic','$datetime')";
    $result3=$database->query($sql3);

         if ($database->connection->query($sql3) === TRUE) {
             echo "New record created successfully";
         } else {
             echo "Error: " . $sql3 . "<br>" . $database->connection->error;
         }

//         $result= mysqli_query($this->con,"INSERT INTO customer VALUE ('','$un','$ln','$fn','$em','$encryptedPassword','$date','$profilePic')");


     }

     private function validateUsername($username){

         if(strlen($username)<5 || strlen($username)>25) {
              array_push($this->errorArray,Constants::$usernameCharacters);
              return;
         }
         //TODOList Check if username already exist
         $checkUsernameQuery = mysqli_query($this->con,"SELECT username FROM customer WHERE username = '$username'");
         if(mysqli_num_rows($checkUsernameQuery)!=0){
             array_push($this->errorArray,Constants::$userNameTaken);
             return;
         }

     }

     private function validateFirstName($fname){

         if(strlen($fname)<3 || strlen($fname)>25) {
             array_push($this->errorArray,Constants::$firstNameCharacters);
             return;
         }
     }

     private function validateLastname($lname){

         if(strlen($lname)<3 || strlen($lname)>25) {
             array_push($this->errorArray,Constants::$lastNameCharacters);
             return;
         }
     }

     private function validateEmails($email){

//         if($email != $conf_email) {
//             array_push($this->errorArray,Constants::$emailsDoNotMatch);
//             return;
//         }
//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//             array_push($this->errorArray,Constants::$emailInvalid);
//             return;
//         }
         $checkEmailQuery = mysqli_query($this->con,"SELECT email FROM customer WHERE email = '$email'");
         if(mysqli_num_rows($checkEmailQuery)!=0){
             array_push($this->errorArray,Constants::$emailTaken);
             return;
         }

     }

//     private function validatePasswords($password, $conf_password){
//
//         if($password != $conf_password) {
//             array_push($this->errorArray,Constants::$passwordDoNotMatch);
//             return;
//         }
//
//         if(preg_match('/[^A-Za-z0-9]/',$password)){
//             array_push($this->errorArray,Constants::$passwordContainCharacters);
//             return;
//         }
//
//         if(strlen($password)>25 && strlen($password)<5) {
//             array_push($this->errorArray,Constants::$passwordLong);
//             return;
//         }
//     }

 }
?>