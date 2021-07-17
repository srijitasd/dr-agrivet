<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Origin, Content-Type, Access-Control-Allow-Methods');

include_once "../dbh.inc.php";

$data = json_decode(file_get_contents("php://input"), true);

$location = mysqli_real_escape_string($conn, $data['hotel_loc']);
$check_in = mysqli_real_escape_string($conn, $data['hotel_checkin']);
$check_out = mysqli_real_escape_string($conn, $data['hotel_checkout']);
$landmark = mysqli_real_escape_string($conn, $data['hotel_landmark']);



$room = mysqli_real_escape_string($conn, $data['hotel_room']);
$adult = mysqli_real_escape_string($conn, $data['hotel_adult']);
$child = mysqli_real_escape_string($conn, $data['hotel_child']);
$infant = mysqli_real_escape_string($conn, $data['hotel_infant']);



if (empty($location) || empty($check_in) || empty($check_out) || empty($landmark) || empty($room) || empty($adult) || empty($child) || empty($infant)) {
    echo(json_encode(array("message" => "empty")));
} else {

}


echo(json_encode(array("location" => $location, "Check_in" => $check_in, "check_out" => $check_out, "landmark" => $landmark, "room" => $room, "adult" => $adult, "children" => $child, "infant" => $infant )))



?>