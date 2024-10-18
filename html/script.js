// JavaScript Document



function writeHeader(){
    var header = '<div id="header-main"><div id="medialinks"><a href="#"><img src="../images/facebook.png" alt="Visit out Facebook page"></a><a href="#"><img src="../images/instagram.png" alt="Visit our Instagram page"></a><a href="#"><img src="../images/pinterest.png" alt="Visit our Pinterest Board"></a></div><div id="company-main">Mahayana Living</div><div id="tagline-main">We help build healthy lifestyles.</div></div><nav><ul><li><a href="index.html">Home</a></li><li><a href="about.html">About Us</a></li><li><a href="blog.html">Recipes</a></li><li><a href="store.html">Shop</a></li><li><a href="resources.html">Additional Resources</a></li><li><a href="contact.html">Contact Us</a></li></ul></nav>';
    
    
    
    document.write(header);
}

function writeFooter(){
    var modified = document.lastModified;
    
    var footer = '<ul id="nav"><li><a href="about.html">About Us</a></li><li><a href="blog.html">Recipes</a></li><li><a href="store.html">Shop</a></li><li><a href="resources.html">Additional Resources</a></li><li><a href="contact.html">Contact Us</a></li></ul><div id="contactinfo"><blockquote><span style="font-weight: bold; font-size: 1.2em;">Mahayana Living</span><br>123 Main St.<br>Loveland, CO 80537<br><a href="mailto:mahayanaliving@zendeavors.net">mahayanaliving@zendeavors.net</a></blockquote></div><div id="copyright">Copyright ©2019 by Mahayana Living </div><div id="updated">Last Updated - ' + modified + '</div>';
    
    document.getElementById("foot").value = footer;
    
    document.write(footer);
}


function loadListeners(){
    
//writeHeader();
writeFooter();
    
}

if(window.addEventListener){
    window.addEventListener("onload", loadListeners, false);
}
/**/