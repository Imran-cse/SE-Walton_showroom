<?php

define('SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD','');
define('DBNAME', 'sms');

$con = mysqli_connect(SERVER, USER, PASSWORD, DBNAME);

if (!$con) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}