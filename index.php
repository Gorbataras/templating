<?php
//CONTROLLER
session_start();
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->route('GET /', function () {
    echo "<h1>Welcome!</h1>";
});


//Run
$f3->run();