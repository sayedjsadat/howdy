<?php

/*
 * Sayed Jalal Sadat
 * 4/11/2023
 * 328/howdy/index.php
 * Controller for howdy project
 */

//Turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

//Create an F3 (Fat-Free framework) object
//instantiate      (::) is a static method which is invoking it from class
$f3 = Base::instance();


//Define a default route
$f3->route('GET /', function(){
    echo '<h1>Hello world!</h1>';

    //Display a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Run Fat-Free
$f3->run();
