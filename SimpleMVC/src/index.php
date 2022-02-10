<?php
// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

// Start the session
session_start();

/* -----------------------------------------
        CLASSES AUTO LOADER
---------------------------------------------*/
spl_autoload_register(function ($class_name) {
    // Configs
    if (strpos($class_name, 'Config') !== false) {
        include 'configs/' . $class_name . '.php';
    }
    // Models
    if (strpos($class_name, 'Model') !== false) {
        include 'models/' . $class_name . '.php';
    }
    // Repositories
    if (strpos($class_name, 'Repository') !== false) {
        include 'repositories/' . $class_name . '.php';
    }
    // Controllers
    if (strpos($class_name, 'Controller') !== false) {
        include 'controllers/' . $class_name . '.php';
    }    
});


/* -----------------------------------------
        APPLICATION ROUTES
---------------------------------------------*/
include("routes.php");


// Run RouteConfig
RouteConfig::run();