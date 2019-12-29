<!doctype html>
<html>
<head>
    <title>Test</title>
</head>
<body>
    <p>Hello World</p>
    
<?php
error_reporting(E_ALL);

$name = "'name'";
$address1 = "'address1'";
$address2 = "'address2'";
$address3 = "'address3'";
$email = "'email'";
$phone = "'phone'";
$comments = "'comments'";
$errors = 0;
    
$connectRemote = array('host' => 'localhost',
                'username' => 'zendeavo_writer',
                'pwd' => 'Writer69!',
                'DBName' => 'zendeavo_contacts');
    
$connectLocal = array('host' => 'localhost',
                     'username' => 'root',
                     'pwd'=>'CWB208',
                     'DBName' => 'customers');
    
function connectToDatabae(){
    
    $DBConnect = new mysqli($connectLocal['host'], 
                            $connectLocal['username'], 
                            $connectLocal['pwd'], 
                            $connectLocal['DBName']);

    if( $DBConnect-> connect_error){
        ++$errors;
        die("Connection failed:" . $DBConnect -> connect_error);
    } else{
        return $DBConnect;
    }
}
    
function sendToDatabase(){
    
    $DBConnect = connectToDatabase();
    
    $Table = 'customers';

    if( 'errors == 0' ){ // && isset($_POST[])){

        $SQLQuery = 'insert into ' . $Table . 
            '(name, streetaddress1, streetaddress2, citystatezip, email) values (' . $name . ',' . $address1 . ',' . $address2 . ',' . $address3 . ',' . $email . ')';

        //var_dump($SQLQuery);
        if( $DBConnect->query($SQLQuery) === true){
            echo "Contact added successfully! ";
            $newID = $DBConnect->insert_id;
            $_SESSION['userid'] = $newID;

            $Table = 'comments';
            $SQLQuery = "insert into " . $Table . " (customerid, comments) values (" . $newID . ", " . $comments . ")";

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

    mysql_close($DBConnect);
}
    
function emailContactInfo(){
    $name = "'name'";
    $address1 = "'address1'";
    $address2 = "'address2'";
    $address3 = "'address3'";
    $email = "'email'";
    $phone = "'phone'";
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
