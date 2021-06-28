<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Origin, Content-Type, Access-Control-Allow-Methods');

include_once "../dbh.inc.php";

$data = json_decode(file_get_contents("php://input"), true);

$user_id = $data['ClientKey'];
$user_ip = $data['ip'];
$user_city = $data['city'];
$online = "online";



$date = date('Y-m-d');
$time = date('H:i:s');
$sql = "INSERT INTO client_details(client_id, client_date, client_time, client_ip, client_city, online_status) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo json_encode(array('message' => "not", "status" => 500));
}

else {
    mysqli_stmt_bind_param($stmt, "ssssss", $user_id, $date, $time, $user_ip, $user_city, $online);
    $statement = mysqli_stmt_execute($stmt);
	
	if($statement) {
	echo "error";
	}else {
    echo json_encode(array("id" => "{$user_id}", "date" => "{$date}", "time" => "{$time}", "ip" => "{$user_ip}", "city" => "{$user_city}",  "status" => 201));
	}
}


?>