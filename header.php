<?php

function writeHead(){
    
    $head = 
    '<link href="mahayana.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Eagle+Lake" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Averia+Libre" rel="stylesheet">
	
	 <meta charset="utf-8">

    ';
    
    echo $head;
    
}

function writeHeader(){
    
    $openHeaderMain = '<div id="header-main">';
    
    $mediaLinks = 
        '<div id="medialinks">
            <a href="#"><img src="images/facebook.png" alt="Visit out Facebook page"></a>
            <a href="#"><img src="images/instagram.png" alt="Visit our Instagram page"></a>
            <a href="#"><img src="images/pinterest.png" alt="Visit our Pinterest Board"></a>
        </div>
    
    ';
    
    $company = 
    '<div id="header-main">
        <div id="company-main">Mahayana Living</div>
        <div id="tagline-main">We help build healthy lifestyles.</div>
    </div>
    
    ';
    
    $nav = 
    '<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="store.php">Shop</a></li>
            <li><a href="resources.php">Additional Resources</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    
    ';
    
    $closeHeaderMain = '</div>';
    
    echo $openHeaderMain;
    echo $mediaLinks;
    echo $company;
    echo $nav;
    echo $closeHeaderMain;
}

?>