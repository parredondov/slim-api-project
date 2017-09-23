<?php
// Define site host
if (isset($_SERVER['HTTP_X_FORWARDED_HOST']) && !empty($_SERVER['HTTP_X_FORWARDED_HOST'])) {
  $hostname = $_SERVER['HTTP_X_FORWARDED_HOST'];
} else {
  $hostname = $_SERVER['HTTP_HOST'];
}

// Filter
$hostname = filter_var($hostname, FILTER_SANITIZE_STRING);

if($hostname == "localhost")
  // define('SLIM_HOST', $hostname."/");

switch ($hostname) {
  case 'localhost':
    define('SLIM_ENV', 'development');
    break;
  default:
    define('SLIM_ENV', 'development');
    break;
}



// Load config file for current environment
require '../envs/env.' . SLIM_ENV . '.php';