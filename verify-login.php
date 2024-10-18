<?php

session_start();

$errors = 0; 
$DBConnect = @mysql_connect("localhost", "root", "CWB208"); 

if ($DBConnect === FALSE) { 
    echo "<p>Unable to connect to the database server. " . "Error code " . mysql_errno() . ": " . mysql_error() . "</p>\n"; 
    ++$errors; 
} else { 
    $DBName = "mahayanagardens"; 
    $result = @mysql_select_db($DBName, $DBConnect); 
    if ($result === FALSE) { 
        echo "<p>Unable to select the database. " . "Error code " . mysql_errno($DBConnect) . ": " . mysql_error($DBConnect) . "</p>\n"; 
        ++$errors; 
    } 
}

$TableName = "users"; 
if ($errors == 0) { 
    $SQLstring = "SELECT * FROM $TableName" . " where user_id='" . stripslashes($_POST['user_id']) . "' and password_md5='" . md5(stripslashes($_POST['password'])) . "'"; 
    $QueryResult = @mysql_query($SQLstring, $DBConnect); 
    
    if (mysql_num_rows($QueryResult)==0) { 
        echo "<p>The e-mail address/password " . " combination entered is not valid. </p>\n"; 
        ++$errors; 
    } else { 
        $Row = mysql_fetch_assoc($QueryResult); 
        $_SESSION['user_id'] = $Row['user_id']; 
        echo "<p>Welcome back, " . $Row['first'] . "!</p>\n"; 
    } 
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Verify Login</title>
</head>

<body>
</body>
</html>