<?php

function writeFooter(){
    
    $nav = 
    '<ul id="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="blog.php">Recipes</a></li>
        <li><a href="store.php">Shop</a></li>
        <li><a href="resources.php">Additional Resources</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul>
    ';
    
    $contact = 
    '<div id="contactinfo">
        <blockquote>
            <span style="font-weight: bold; font-size: 1.2em;">
                Mahayana Living
            </span><br>
            123 Main St.<br>
            Loveland, CO 80537<br>
            <a href="mailto:mahayanaliving@zendeavors.net">mahayanaliving@zendeavors.net</a>
        </blockquote>
    </div>
    ';
    
    $copyright = 
    '<div id="copyright">Copyright &copy;2019 by Mahayana Living </div>
    <div id="updated">Last Updated - ' . date("F d Y" . filemtime("webdictionary.txt")) 
    . '</div>
    ';
    
    echo $nav;
    echo $contact;
    echo $copyright;
}

?>