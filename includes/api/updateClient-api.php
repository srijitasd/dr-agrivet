<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PATCH');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Origin, Content-Type, Access-Control-Allow-Methods');

include_once "../dbh.inc.php";

$data = json_decode(file_get_contents("php://input"), true);

$user_id = mysqli_real_escape_string($conn, $data['ClientKey']);
$user_ip = mysqli_real_escape_string($conn, $data['ip']);
$user_city = mysqli_real_escape_string($conn, $data['city']);

$sql = "UPDATE client_details SET client_ip = '$user_ip', client_city = '$user_city' WHERE client_id=$user_id";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo json_encode(array('id' => "{$user_id}", "ip" => "{$user_ip}", "city" => "{$user_city}",  "status" => 200));
}

else {
    echo json_encode(array('message' => "error", "status" => 400));
   
}

?>