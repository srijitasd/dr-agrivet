<?php


$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "dr_agrivet";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if (!$conn) {
    echo "sorry db cannot connect";
} else {
    //echo "successful";
};


?>