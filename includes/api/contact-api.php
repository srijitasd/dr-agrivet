<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Origin, Content-Type, Access-Control-Allow-Methods');

include_once "../../thebohemians-cpanel/action/connection.php";

$data = json_decode(file_get_contents("php://input"), true);

$name = mysqli_real_escape_string($conn, $data['contact_name']);
$email = mysqli_real_escape_string($conn, $data['contact_email']);
$details = mysqli_real_escape_string($conn, $data['contact_details']);




if (empty($name) || empty($email) || empty($details)) {
    echo(json_encode(array("message" => "empty")));
} else {
    echo(json_encode(array("name" => $name, "email" => $email, "details" => $details)));
}






?>