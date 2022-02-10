<?php
# Home
RouteConfig::add('/',function(){
    include("views/home.php");   
});

# About
RouteConfig::add('/about-us',function(){
    include("views/about.php");
});

# Contact
RouteConfig::add('/contact-us',function(){
    include("views/contact.php");
});

# 404
RouteConfig::pathNotFound(function(){    
    include("views/404.php");
});