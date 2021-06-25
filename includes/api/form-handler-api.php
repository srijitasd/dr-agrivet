<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Origin, Content-Type, Access-Control-Allow-Methods');

include "../dbh.inc.php";

$data = json_decode(file_get_contents("php://input"), true);

$en_name = mysqli_real_escape_string($conn, $data['en_name']);
$en_number = mysqli_real_escape_string($conn, $data['en_number']);
$en_email = mysqli_real_escape_string($conn, $data['en_email']);
$en_details = mysqli_real_escape_string($conn, $data['en_details']);


mail($en_email,"My subject",$msg);







?>