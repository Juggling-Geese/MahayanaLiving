
<?php
error_reporting(E_ALL);

require 'db.php';

$errors = 0;

function customerInfo(){
    $customerInfo = array(
        'name' => "'name'",
        'address1' => "'address1'",
        'address2' => "'address2'",
        'address3' => "'address3'",
        'email' => "'email'",
        'phone' => "'phone'",
        'comments' => "'comments'"
    );
    return $customerInfo;
    
}

    
function connectToDatabase(){
    $connectLocal = connectLocal();
    $connectRemote = connectRemote();
    global $errors;

    $DBConnect = new mysqli($connectLocal['host'], 
                            $connectLocal['username'], 
                            $connectLocal['pwd'], 
                            $connectLocal['DBName']);

    // $DBConnect = new mysqli($connectRemote['host'], 
    //                         $connectRemote['username'], 
    //                         $connectRemote['pwd'], 
    //                         $connectRemote['DBName']);

    if( $DBConnect-> connect_error){
        ++$errors;
        die("Connection failed:" . $DBConnect -> connect_error);
    } else{
        return $DBConnect;
    }
}
    
function sendToDatabase(){
    global $errors;
    $customerInfo = customerInfo();

    $DBConnect = connectToDatabase();
    
    $Table = 'customers';

    if( $errors == 0 ){ // && isset($_POST[])){

        $SQLQuery = 'insert into ' . $Table . 
            '(name, streetaddress1, streetaddress2, citystatezip, email) values (' . $customerInfo('name') . ',' . $customerInfo('address1') . ',' . $customerInfo('address2') . ',' . $customerInfo('address3') . ',' . $customerInfo('email') . ')';

        //var_dump($SQLQuery);
        if( $DBConnect->query($SQLQuery) === true){
            echo "Contact added successfully! ";
            $newID = $DBConnect->insert_id;
            $_SESSION['userid'] = $newID;

            $Table = 'comments';
            $SQLQuery = "insert into " . $Table . " (customerid, comments) values (" . $newID . ", " . $customerInfo('comments') . ")";

            if( $DBConnect->query($SQLQuery) === true){
                echo "Comment inserted! ";
            } else{
                echo "Failed: " . $DBConnect->error;
                ++$errors;
            }
        }else{
            echo "Failed: " . $DBConnect->error;
            ++$errors;
        }

    }else
        ++$errors;

    mysqli_close($DBConnect);
}
    
function emailContactInfo(){
    $name = "'name'";
    $address3 = "'address3'";
    $email = "'email'";
    $comments = "'comments'";
    
    $mailTo = "brooke@zendeavors.net";
    $from = "webmaster@mahayanaliving.com";
    $subject = "New comment from mahayanaliving.com";
    $message_body = "New comment from mahayanaliving.com:\n" .
    "Name: " . $name . "\n" . 
    "Email: " . $email . "\n" . 
    "Location: " . $address3 . "\n" . 
    "Comments: " . $comments;

    if( mail($mailTo,$subject,$message_body,"From: ".$from) )
        echo "Mail has been sent";

}

//emailContactInfo();
sendToDatabase();

?>
</body>
</html>
