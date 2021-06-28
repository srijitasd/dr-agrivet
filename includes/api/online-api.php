<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Origin, Content-Type, Access-Control-Allow-Methods');

include_once "../dbh.inc.php";

$data = json_decode(file_get_contents("php://input"), true);

$user_id = mysqli_real_escape_string($conn, $data['ClientKey']);

$online = "online";

$sql = "UPDATE client_details SET online_status = ? WHERE client_id='$user_id'";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo json_encode(array('message' => "not", "status" => 500));
}

else {
    mysqli_stmt_bind_param($stmt, "s", $online);
    mysqli_stmt_execute($stmt);
	echo json_encode(array('message' => "success", "status" => 200));
}
?>