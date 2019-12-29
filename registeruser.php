<?php 

session_start();

$Body = "";

$errors = 0; 
$user_id = $_POST['user_id']; 
$email = $_POST['email'];
$password = $_POST['password'];
    
if ((!(empty($password))) && (!(empty($password2)))) { 
    if (strlen($password) < 6) { 
        ++$errors; 
        $Body .= "<p>The password is too short.</p>\n"; 
        $password = ""; 
        $password2 = ""; 
    } 
    if ($password <> $password2) { 
        ++$errors; 
        $Body .= "<p>The passwords do not match.</p>\n"; 
        $password = ""; 
        $password2 = ""; 
    } 
}

if ($errors == 0) { 
    $DBConnect = @mysql_connect("localhost", "root", "CWB208"); 
    
    if ($DBConnect === FALSE) { 
        $Body .= "<p>Unable to connect to the database server. " . "Error code " . mysql_errno() . ": " . mysql_error() . "</p>\n"; 
        ++$errors; 
    } else { 
        $DBName = "mahayanagardens"; 
        $result = @mysql_select_db($DBName, $DBConnect); 

        if ($result === FALSE) { 
            $Body .= "<p>Unable to select the database. " . "Error code " . mysql_errno($DBConnect) . ": " . mysql_error($DBConnect) . "</p>\n"; 
            ++$errors; 
        } 
    } 
}

$TableName = "users"; 

if ($errors == 0) { 
    // Check user name
    $SQLstring = 'SELECT count(*) FROM ' . $TableName . ' where user_id="' . $user_id . '"'; 
    
    $QueryResult = @mysql_query($SQLstring, $DBConnect); 
    
    if ($QueryResult !== FALSE) { 
        $Row = mysql_fetch_row($QueryResult); 
        
        if ($Row[0]>0) { 
            $Body .= "<p>The user name entered (" . htmlentities($user_id) . ") is already registered.</p>\n"; 
            ++$errors; 
        } 
    } 
    // Check email
    $SQLstring = "SELECT count(*) FROM $TableName" . "where email=$email"; 
    $QueryResult = @mysql_query($SQLstring, $DBConnect); 
    
    if ($QueryResult !== FALSE) { 
        $Row = mysql_fetch_row($QueryResult); 
        
        if ($Row[0]>0) { 
            $Body .= "<p>The email address entered (" . htmlentities($email) . ") is already registered.</p>\n"; 
            ++$errors; 
        } 
    } 
}

if ($errors > 0) { 
    $Body .= "<p>Please use your browser's BACK button to return" . " to the form and fix the errors indicated.</p>\n"; 
}

if ($errors == 0) { 
    $first = stripslashes($_POST['first']); 
    $last = stripslashes($_POST['last']); 
    
    $SQLstring = 'INSERT INTO ' . $TableName  .  ' (user_id, email, password_md5, first, last) '  .  'VALUES( "' . $user_id . '", "' . $email . '", "' . md5($password) . '","' . $first . '","' . $last . '")'; 
    
    $QueryResult = @mysql_query($SQLstring, $DBConnect); 
    
    if ($QueryResult === FALSE) { 
        $Body .= "<p>Unable to save your registration " . " information. Error code " . mysql_errno($DBConnect) . ": " . mysql_error($DBConnect) . "</p>\n"; 
        ++$errors; 
    } else { 
        $_SESSION["user_id"] = $user_id;
    } 

    mysql_close($DBConnect); 
}

if ($errors == 0) {
    $user_name = $first . " " . $last; 
    $Body .= "<p>Thank you, $user_name. "; 
    $Body .= "You are now registered!</p>\n"; 
    $Body .= 'Redirecting you now. If you are not redirected, please <a href="' . $_SESSION['last_page'] . '">click here</a> to return to your previous page.</p>\n';
}
/*    
if ($errors == 0) { 
    $Body .= "<p><a href='AvailableOpportunities.php?" . SID . "'>View Available Opportunities</a></p>\n";
}
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>User Registration</title>
</head>
<body>

<h2>User Registration</h2> 

<?php 
echo $Body; 
?>

</body>
</html>

