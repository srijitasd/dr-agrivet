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


if (empty($en_name) || empty($en_details) || empty($en_email) || empty($en_details)) {
    echo json_encode(array('message' => "empty", "status" => 400));
}

elseif (!filter_var($en_email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9_ -]/", $en_name)) {
    echo json_encode(array('message' => "invalid", "status" => 400));
}

elseif (!filter_var($en_email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(array('message' => "email" , "status" => 400));
}

elseif (!preg_match("/^[a-zA-Z -]/", $en_name)) {
    echo json_encode(array('message' => "name", "status" => 400));
}

else {
    $sql = "INSERT INTO enquiry_table(u_name, mob_no, email, details) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo json_encode(array('message' => "not", "status" => 500));
    }

    else {
        mysqli_stmt_bind_param($stmt, "ssss", $en_name, $en_number, $en_email, $en_details);
        mysqli_stmt_execute($stmt);
        echo json_encode(array('name' => "{$en_name}", 'number' => "{$en_number}", 'email' => "{$en_email}", 'details' => "{$en_details}",  "status" => 201));
    }
}





?>