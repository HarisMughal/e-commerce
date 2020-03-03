<?php include_once ("Includes/databaseclass.php"); ?>
<?php
function Redirect_to($New_Location){
    header("Location:".$New_Location);
    exit;
}
//function Login_Attempt($Username,$Password){
//    global $database;
//    $sql="SELECT * FROM registration
//    WHERE username='$Username' AND password='$Password'";
//    $Execute=$database->query($sql);
//    if($admin=mysqli_fetch_assoc($Execute)){
//        return $admin;
//    }else{
//        return null;
//    }
//}
function fetch_array($result){
    return mysqli_fetch_array($result);
}

function get_products(){
    global $database;
    if(isset($_POST['searchbutton'])){

        $search=$_POST['search'];
        // echo "<h1> asdasdas </h1>";
        // echo "<h1>".$search."</h1>";
        $sql="SELECT * FROM product where pname like '%$search%' OR company like '%$search%' OR model like '%$search%' OR buying_price like '%$search%' OR sell_price like '%$search%'";


    }
else {

    $sql = "Select * from Product";
}
    $result=$database->query($sql);
    $indexer = 0;
    
    while($row=fetch_array($result)){
        if($indexer % 4 != 0){
                    $product=<<<DELIMETER
                    
                    <div class="col-sm-3">
                                <div class="thumbnail">
                                    <a href="product.php?id={$row['pid']}"><img src="uploads/{$row['picture']}" style="height:150px; width:300px" alt=""></a>
                                    <div class="caption">
                                        <h4 class="pull-right">&#8360;{$row['sell_price']}</h4>
                                        <h4><a href="product.php?id={$row['pid']}">{$row['pname']}</a>
                                        </h4>
                                        <a class="btn btn-primary" style="box-shadow: 2px 3px #0014a8" target="_blank" href="cart.php?add={$row['pid']}" >Add to Cart</a>
                                    </div>
                                </div>
                            </div>

            DELIMETER;
                    ECHO $product;
        }else{
            $product=<<<DELIMETER
                    </div>
                    <div class  = "row">
                    <div class="col-sm-3">
                                <div class="thumbnail">
                                    <a href="product.php?id={$row['pid']}"><img src="uploads/{$row['picture']}" style="height:150px; width:300px" alt=""></a>
                                    <div class="caption">
                                        <h4 class="pull-right">&#8360;{$row['sell_price']}</h4>
                                        <h4><a href="product.php?id={$row['pid']}">{$row['pname']}</a>
                                        </h4>
                                        <a class="btn btn-primary" style="box-shadow: 2px 3px #0014a8" target="_blank" href="cart.php?add={$row['pid']}" >Add to Cart</a>
                                    </div>
                                </div>
                            </div>

            DELIMETER;
                    ECHO $product;



        }
        $indexer++;


    }
}
function get_categories(){
    global  $database;
    $sql="SELECT * FROM PRODUCT_CATEGORY";
    $result=$database->query($sql);
    while($row=fetch_array($result)){
        $category=<<<DELIMETER
        <a href='category.php?id={$row['cno']}' class='list-group-item'>{$row['category_name']}</a>
DELIMETER;
        echo $category;
    }

}

function get_products_in_category(){
    global $database;
    $sql="Select * from Product where category_no=" . $database->escape_string($_GET['id']) . " ";
    $result=$database->query($sql);
    while($row=fetch_array($result)){

        $product=<<<DELIMETER
        
        <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="uploads/{$row['picture']}"style="height:150px; width:300px" alt="">
                    <div class="caption">
                        <h3>{$row['pname']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="cart.php?add={$row['pid']}" class="btn btn-primary" style="box-shadow: 2px 3px #0014a8">Buy Now!</a> <a href="product.php?id={$row['pid']}" class="btn btn-default" style="box-shadow: 2px 3px #ffdbb7">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

        ECHO $product;


    }
}

function login_user()
{
    global $database;


    if (isset($_POST['submit'])) {
        $username = $database->escape_string($_POST['username']);
        $password = $database->escape_string($_POST['password']);
        $password=md5($password);
        $sql = "SELECT * FROM CUSTOMER where username='{$username}' AND password='{$password}'";
        $result = $database->query($sql);
        if (mysqli_num_rows($result) == 0) {
            $_SESSION["ErrorMessage"] = "Invalid Username or Password!";

            Redirect_to("login.php");
        } else {
            $_SESSION['user'] = $username;
            Redirect_to("index.php");
        }
    }


}
function login_admin()
{
    global $database;


    if (isset($_POST['submit'])) {
        $username = $database->escape_string($_POST['username']);
        $password = $database->escape_string($_POST['password']);

        $sql = "SELECT * FROM admin where username='{$username}' AND password='{$password}'";
        $result = $database->query($sql);
        if (mysqli_num_rows($result) == 0) {
            $_SESSION["ErrorMessage"]="Your Username or Password is Incorrect!";
            Redirect_to("adminlogin.php");
        } else {
            $_SESSION['username']=$username;
            $_SESSION["SuccessMessage"]="Welcome to Admin Panel Hello {$username}";
            Redirect_to("index.php");
        }
    }


}

function get_products_in_admin(){
    global $database;
    $sql="Select * from product INNER JOIN product_category ON product.category_no=product_category.cno";
    $result=$database->query($sql);
    while($row=fetch_array($result)){

        $product=<<<DELIMETER
        
        <tr>
            <td>{$row['pid']}</td>
            <td>{$row['pname']} <br>
             <a href="index.php?edit_product&id={$row['pid']}"> <img width="100" src="../uploads/{$row['picture']}" alt=""></a>
            </td>
            <td>{$row['category_name']}</td>
            <td>{$row['buying_price']}</td>
            <td>{$row['sell_price']}</td>
            <td>{$row['quantity']}</td>
            <td><a class="btn btn-danger" href="delete_product.php?id={$row['pid']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
      

DELIMETER;
        ECHO $product;


    }

}

function add_product(){
    global $database;
    if(isset($_POST['publish'])){

        $product_title=$database->escape_string($_POST['product_title']);
        $product_category_id=$database->escape_string($_POST['product_category_id']);
        $product_company=$database->escape_string($_POST['product_company']);
        $product_model=$database->escape_string($_POST['product_model']);
        $product_buyingprice=$database->escape_string($_POST['product_buyingprice']);
        $product_sellprice=$database->escape_string($_POST['product_sellprice']);
        $product_description=$database->escape_string($_POST['product_description']);
        $short_desc=$database->escape_string($_POST['short_desc']);
        $product_quantity=$database->escape_string($_POST['product_quantity']);
        $product_image=$database->escape_string($_FILES['pimage']['name']);
//        $image_temp=$database->escape_string($_FILES['pimage']['tmp_name']);
        $target="../uploads/" . basename($_FILES['pimage']['name']);
        $sql="INSERT INTO product (pname,category_no,company,model,buying_price,sell_price,quantity,pro_desc,short_desc,picture) VALUES ('{$product_title}','{$product_category_id}','{$product_company}','{$product_model}','{$product_buyingprice}','{$product_sellprice}','{$product_quantity}','{$product_description}','{$short_desc}','{$product_image}')";
        $result=$database->query($sql);
        move_uploaded_file($_FILES['pimage']['tmp_name'],$target);
        $_SESSION["SuccessMessage"]="New Product {$product_title} Added Successfully!";
        Redirect_to("products.php");

    }
}
function show_categories_in_add_products(){
    global  $database;
    $sql="SELECT * FROM PRODUCT_CATEGORY";
    $result=$database->query($sql);
    while($row=fetch_array($result)){
        $category_options=<<<DELIMETER
            <option value="{$row['cno']}">{$row['category_name']}</option>
DELIMETER;
        echo $category_options;
    }

}



function add_promo(){
    global $database;
    if(isset($_POST['publish'])){
        // echo "<h1>".$_POST['product_title']."</h1>";
        $product_title=$database->escape_string($_POST['product_title']);
        if( $product_title != ""){
            $sql = " select pname from product where pname = '{$product_title}'";
            $result=$database->query($sql);
            if( mysqli_num_rows($result) < 1){
                
                $_SESSION["ErrorMessage"]="Product {$product_title} does not exsist !";
                
                Redirect_to("add-promo.php");
                return;
            }
            $promo_code=$database->escape_string($_POST['promo_code']);
            // echo "<h1>".$promo_code."</h1>";
            $promo_location=$database->escape_string($_POST['promo_location']);
            $promo_discount=$_POST['promo_discount'];
    //         $product_category_id=$database->escape_string($_POST['product_category_id']);
    //         $product_company=$database->escape_string($_POST['product_company']);
    //         $product_model=$database->escape_string($_POST['product_model']);
    //         $product_buyingprice=$database->escape_string($_POST['product_buyingprice']);
    //         $product_sellprice=$database->escape_string($_POST['product_sellprice']);
    //         $product_description=$database->escape_string($_POST['product_description']);
    //         $short_desc=$database->escape_string($_POST['short_desc']);
    //         $product_quantity=$database->escape_string($_POST['product_quantity']);
    //         $product_image=$database->escape_string($_FILES['pimage']['name']);
    // //        $image_temp=$database->escape_string($_FILES['pimage']['tmp_name']);
            // $target="../uploads/" . basename($_FILES['pimage']['name']);
            $sql="INSERT INTO discount (discount_code,product_title,location,discount) VALUES ('{$promo_code}',
            '{$product_title}','{$promo_location}',{$promo_discount})";
            // echo $sql;
            $result=$database->query($sql);
        }else{
            $promo_code=$database->escape_string($_POST['promo_code']);
            // echo "<h1>".$promo_code."</h1>";
            $promo_location=$database->escape_string($_POST['promo_location']);
            $promo_discount=$_POST['promo_discount'];
            $sql="INSERT INTO discount (discount_code,location,discount) VALUES ('{$promo_code}'
            ,'{$promo_location}',{$promo_discount})";
            // echo $sql;
            $result=$database->query($sql);
        }
        // echo "<h1>". $sql."</h1>";
        // move_uploaded_file($_FILES['pimage']['tmp_name'],$target);
        $_SESSION["SuccessMessage"]="New Promo added  Added Successfully!";
        // Redirect_to("add-promo.php");

    }
}


function update_product(){

    if(isset($_POST['update'])){
        global $database;

        $product_title=$database->escape_string($_POST['product_title']);
        $product_category_id=$database->escape_string($_POST['product_category_id']);
        $product_company=$database->escape_string($_POST['product_company']);
        $product_model=$database->escape_string($_POST['product_model']);
        $product_buyingprice=$database->escape_string($_POST['product_buyingprice']);
        $product_sellprice=$database->escape_string($_POST['product_sellprice']);
        $product_description=$database->escape_string($_POST['product_description']);
        $short_desc=$database->escape_string($_POST['short_desc']);
        $product_quantity=$database->escape_string($_POST['product_quantity']);
        $product_image=$database->escape_string($_FILES['pimage']['name']);
//        $image_temp=$database->escape_string($_FILES['pimage']['tmp_name']);

        if(empty($product_image)){
            $query="SELECT picture FROM product where pid=".$database->escape_string($_GET['id']) ." ";
            $result1=$database->query($query);
            while($pic=fetch_array($result1)){
                $product_image=$pic['picture'];
            }
        }


        $target="../uploads/" . basename($_FILES['pimage']['name']);
        move_uploaded_file($_FILES['pimage']['tmp_name'],$target);
        $sql="UPDATE product SET ";
        $sql.= "pname        = '{$product_title}'         , ";
        $sql.= "category_no  = '{$product_category_id}'   , ";
        $sql.= "company      = '{$product_company}'       , ";
        $sql.= "model        = '{$product_model}'         , ";
        $sql.= "buying_price = '{$product_buyingprice}'   , ";
        $sql.= "sell_price   = '{$product_sellprice}'     , ";
        $sql.= "quantity     = '{$product_quantity}'      , ";
        $sql.= "pro_desc     = '{$product_description}'   , ";
        $sql.= "short_desc   = '{$short_desc}'            , ";
        $sql.= "picture      = '{$product_image}'           ";
        $sql.= "WHERE pid    =".$database->escape_string($_GET['id']);
        $result=$database->query($sql);

        $_SESSION["SuccessMessage"]="Product has been updated!";
        Redirect_to("products.php");

    }
}


function show_categories_in_admin(){

    global  $database;
    $sql="SELECT * FROM product_category";
    $result=$database->query($sql);

    while($row=fetch_array($result)){

        $cid=$row['cno'];
        $cname=$row['category_name'];

        $category=<<<DELIMETER
            
            <tr>
                <td>{$cid}</td>
                <td>{$cname}</td>
                <td><a class="btn btn-danger" href="delete_category.php?id={$row['cno']}"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>           

DELIMETER;

        echo $category;

    }
}

function add_category(){

    global $database;
    if(isset($_POST['add_category'])){
        $category_name=$database->escape_string($_POST['categoryname']);

        if(empty($category_name)|| $category_name== " "){
            $_SESSION["ErrorMessage"]="Sorry! Category cannot be empty";
        }else{

            $sql="INSERT INTO product_category (category_name) VALUES ('{$category_name}')";
            $result=$database->query($sql);
            $_SESSION["SuccessMessage"]="New Category {$category_name} Added Successfully!";
            Redirect_to("categories.php");
        }

    }
}



function show_admins_in_admin(){

    global  $database;
    $sql="SELECT * FROM admin";
    $result=$database->query($sql);

    while($row=fetch_array($result)){

        $id=$row['ID'];
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $username=$row['username'];
        $password=$row['password'];


        $admin=<<<DELIMETER
            
            <tr>
                <td>{$id}</td>
                <td>{$fname}</td>
                <td>{$lname}</td>
                <td>{$email}</td>
                <td>{$username}</td>
                <td>{$password}</td>
                <td><a class="btn btn-danger" href="delete_admin.php?id={$row['ID']}"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>           

DELIMETER;

        echo $admin;

    }
}
function show_riders_in_admin(){

    global  $database;
    $sql="SELECT * FROM rider";
    $result=$database->query($sql);

    while($row=fetch_array($result)){

        $id=$row['rider_ID'];
        $rname=$row['rname'];
        $email=$row['email'];
        $phonenum=$row['phonenum'];
        $rider=<<<DELIMETER
            
            <tr>
                <td>{$id}</td>
                <td>{$rname}</td>
                <td>{$email}</td>
                <td>{$phonenum}</td>
                <td><a class="btn btn-danger" href="delete_rider.php?id={$row['rider_ID']}"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>           

DELIMETER;

        echo $rider;

    }
}
Function add_admin(){
    global $database;
    if(isset($_POST['add_user'])){
        $username=$database->escape_string($_POST['username']);
        $fname=$database->escape_string($_POST['fname']);
        $lname=$database->escape_string($_POST['lname']);
        $email=$database->escape_string($_POST['email']);
        $password=$database->escape_string($_POST['password']);
        $picture=$database->escape_string($_FILES['file']['name']);
        $target="../uploads/" . basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'],$target);

        $sql="INSERT INTO admin(fname,lname,email,username,password,picture) VALUE ('{$fname}','{$lname}','{$email}','{$username}','{$password}','{$picture}')";
        $result=$database->query($sql);
        $_SESSION["SuccessMessage"]="User Created!";
        Redirect_to("users.php");

    }
}
Function add_rider(){
    global $database;
    if(isset($_POST['add_rider'])){
        $rname=$database->escape_string($_POST['rname']);
        $email=$database->escape_string($_POST['email']);
        $phonenum=$database->escape_string($_POST['phonenum']);
        $sql="INSERT INTO rider(rname,email,phonenum) VALUE ('{$rname}','{$email}','{$phonenum}')";
        $result=$database->query($sql);
        $_SESSION["SuccessMessage"]="Rider Created!";
        Redirect_to("riders.php");

    }
}
function show_order_in_assign_order(){
    global  $database;
    $sql="SELECT * FROM dukan_order";
    $result=$database->query($sql);
    while($row=fetch_array($result)){
        $order_options=<<<DELIMETER
            <option value="{$row['orderID']}">{$row['orderID']}</option>
DELIMETER;
        echo $order_options;
    }

}
function show_riders_in_assign_order(){
    global  $database;
    $sql="SELECT * FROM rider";
    $result=$database->query($sql);
    while($row=fetch_array($result)){
        $order_options=<<<DELIMETER
            <option value="{$row['rider_ID']}">{$row['rname']}</option>
DELIMETER;
        echo $order_options;
    }
}

function update_order(){

    if(isset($_POST['update_order'])){
        global $database;

        $order_id=$database->escape_string($_POST['order_id']);
        $rider_id=$database->escape_string($_POST['rider_id']);
        $status="Shipped";
//        $image_temp=$database->escape_string($_FILES['pimage']['tmp_name']);

        $sql="UPDATE dukan_order SET ";
        $sql.= "orderID        = '{$order_id}'         , ";
        $sql.= "status  = '{$status}'                  , ";
        $sql.= "rider_id      = '{$rider_id}'            ";
        $sql.= "WHERE orderID    =".$order_id;
        $result=$database->query($sql);

        $_SESSION["SuccessMessage"]="Order has been updated!";
        Redirect_to("orders.php");

    }
}
function display_order(){
    global $database;
    $sql="SELECT * FROM dukan_order";
    $result=$database->query($sql);
    while($row=fetch_array($result)){
        $order=<<<DELIMETER
<tr>
<td>{$row['orderID']}</td>
<td>{$row['custID']}</td>
<td>{$row['grand_total']}</td>
<td>{$row['status']}</td>
<td>{$row['rider_id']}</td>
</tr>
DELIMETER;
echo $order;
    }


}
require 'project/vendor/autoload.php';
require_once 'project/constants/SampleCodeConstants.php';
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

define("AUTHORIZENET_LOG_FILE", "phplog");

function authorizeCreditCard($amount,$fname,$lname,$email,$shipping_address,$city,$province)
{
    /* Create a merchantAuthenticationType object with authentication details
       retrieved from the constants file */
    $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
    $merchantAuthentication->setName(\SampleCodeConstants::MERCHANT_LOGIN_ID);
    $merchantAuthentication->setTransactionKey(\SampleCodeConstants::MERCHANT_TRANSACTION_KEY);

    // Set the transaction's refId
    $refId = 'ref' . time();

    // Create the payment data for a credit card
    $creditCard = new AnetAPI\CreditCardType();
    $creditCard->setCardNumber("4111111111111111");
    $creditCard->setExpirationDate("2038-12");
    $creditCard->setCardCode("123");

    // Add the payment data to a paymentType object
    $paymentOne = new AnetAPI\PaymentType();
    $paymentOne->setCreditCard($creditCard);

    // Create order information
    $order = new AnetAPI\OrderType();
    $order->setInvoiceNumber("10101");
    $order->setDescription("Golf Shirts");

    // Set the customer's Bill To address
    $customerAddress = new AnetAPI\CustomerAddressType();
    $customerAddress->setFirstName($fname);
    $customerAddress->setLastName($lname);
    $customerAddress->setCompany($email);
    $customerAddress->setAddress($shipping_address);
    $customerAddress->setCity($city);
    $customerAddress->setState($province);
    $customerAddress->setZip("72000");
    $customerAddress->setCountry("Pakistan");

    // Set the customer's identifying information
    $customerData = new AnetAPI\CustomerDataType();
    $customerData->setType("individual");
    $customerData->setId("99999456654");
    $customerData->setEmail($email);

    // Add values for transaction settings
    $duplicateWindowSetting = new AnetAPI\SettingType();
    $duplicateWindowSetting->setSettingName("duplicateWindow");
    $duplicateWindowSetting->setSettingValue("60");

    // Add some merchant defined fields. These fields won't be stored with the transaction,
    // but will be echoed back in the response.
    $merchantDefinedField1 = new AnetAPI\UserFieldType();
    $merchantDefinedField1->setName("customerLoyaltyNum");
    $merchantDefinedField1->setValue("1128836273");

    $merchantDefinedField2 = new AnetAPI\UserFieldType();
    $merchantDefinedField2->setName("favoriteColor");
    $merchantDefinedField2->setValue("blue");

    // Create a TransactionRequestType object and add the previous objects to it
    $transactionRequestType = new AnetAPI\TransactionRequestType();
    $transactionRequestType->setTransactionType("authOnlyTransaction");
    $transactionRequestType->setAmount($amount);
    $transactionRequestType->setOrder($order);
    $transactionRequestType->setPayment($paymentOne);
    $transactionRequestType->setBillTo($customerAddress);
    $transactionRequestType->setCustomer($customerData);
    $transactionRequestType->addToTransactionSettings($duplicateWindowSetting);
    $transactionRequestType->addToUserFields($merchantDefinedField1);
    $transactionRequestType->addToUserFields($merchantDefinedField2);

    // Assemble the complete transaction request
    $request = new AnetAPI\CreateTransactionRequest();
    $request->setMerchantAuthentication($merchantAuthentication);
    $request->setRefId($refId);
    $request->setTransactionRequest($transactionRequestType);

    // Create the controller and get the response
    $controller = new AnetController\CreateTransactionController($request);
    $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);


    if ($response != null) {
        // Check to see if the API request was successfully received and acted upon
        if ($response->getMessages()->getResultCode() == "Ok") {
            // Since the API request was successful, look for a transaction response
            // and parse it to display the results of authorizing the card
            $tresponse = $response->getTransactionResponse();

            if ($tresponse != null && $tresponse->getMessages() != null) {
                echo " Successfully created transaction with Transaction ID: " . $tresponse->getTransId() . "\n";
                echo " Transaction Response Code: " . $tresponse->getResponseCode() . "\n";
                echo " Message Code: " . $tresponse->getMessages()[0]->getCode() . "\n";
                echo " Auth Code: " . $tresponse->getAuthCode() . "\n";
                echo " Description: " . $tresponse->getMessages()[0]->getDescription() . "\n";
            } else {
                echo "Transaction Failed \n";
                if ($tresponse->getErrors() != null) {
                    echo " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                    echo " Error Message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
                }
            }
            // Or, print errors if the API request wasn't successful
        } else {
            echo "Transaction Failed \n";
            $tresponse = $response->getTransactionResponse();

            if ($tresponse != null && $tresponse->getErrors() != null) {
                echo " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                echo " Error Message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
            } else {
                echo " Error Code  : " . $response->getMessages()->getMessage()[0]->getCode() . "\n";
                echo " Error Message : " . $response->getMessages()->getMessage()[0]->getText() . "\n";
            }
        }
    } else {
        echo  "No response returned \n";
    }

    return $response;
}

function send_sms($phone,$message){
    $username = "923003027737";///Your Username
    $password = "1756";///Your Password
    $mobile = $phone;///Recepient Mobile Number
    $sender = "SenderID";
    $message = $message;

////sending sms

    $post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
    $url = "https://bulksms.com.pk/api/sms.php?username=923003027737&password=".$password;
    $ch = curl_init();
    $timeout = 30; // set to zero for no timeout
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $result = curl_exec($ch);
    /*Print Responce*/
    echo $result;
}

function update_profile(){
    if(isset($_POST['update_profile']) ){
        global $database;
        $fname=$database->escape_string($_POST['fname']);
        $lname=$database->escape_string($_POST['lname']);
        $dob=$database->escape_string($_POST['dob']);
        $pic = $database->escape_string($_FILES["upload_image"]["name"]);
        $target="uploads/" . basename($_FILES['upload_image']['name']);
        $temp=$_FILES['upload_image']['tmp_name'];
        $_SESSION['target']=$target;
        
        if($database->escape_string($_POST['password']) != ""){
            $password=md5($database->escape_string($_POST['password']));



            $sql = "UPDATE customer set  fname = '$fname',password= '$password' ,lname = '$lname' ,dob = '$dob'  where username = '{$_SESSION['user']}'"; 
        }else if($pic != ""){
            $sql = "UPDATE customer set  fname = '$fname', picture = '$pic' ,lname = '$lname' ,dob = '$dob'  where username = '{$_SESSION['user']}'"; 
            move_uploaded_file($temp,$target);
        }else{
            $sql = "UPDATE customer set  fname = '$fname' ,lname = '$lname' ,dob = '$dob'  where username = '{$_SESSION['user']}'"; 
        }
            // echo $sql;
        $database->query($sql);

        
        $bAddress=$database->escape_string($_POST['bAddress']);
        $sAddress=$database->escape_string($_POST['sAddress']);        
        $province=$database->escape_string($_POST['province']);
        $city=$database->escape_string($_POST['city']);
        $pNum=$database->escape_string($_POST['pNum']);

        $sql = "UPDATE address SET billing_address ='$bAddress', shipping_address = '$sAddress', province = '$province' , city ='$city', phonenum = '$pNum' WHERE  AID = {$_SESSION['addressID_Profile']} ";
        // echo $sql;
        $database->query($sql);

    }

}


?>