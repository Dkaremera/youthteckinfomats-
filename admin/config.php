<?php
// Error Reporting Turn On
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Setting up the time zone
date_default_timezone_set('Asia/Dhaka');

// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'profive_consultine';

// Database Username
$dbuser = 'profive';

// Database Password
$dbpass = 'SaVq85mOtdCp';

// Defining base url
define("BASE_URL", "https://www.rwandayouthtech.org/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $ex ) {
    echo "Connection error :" . $ex->getMessage();
}