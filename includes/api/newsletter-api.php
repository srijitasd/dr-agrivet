<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Origin, Content-Type, Access-Control-Allow-Methods');

include_once "../dbh.inc.php";

$data = json_decode(file_get_contents("php://input"), true);


$news_email = mysqli_real_escape_string($conn, $data['news_email']);


if (!filter_var($news_email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(array('message' => "email" , "status" => 400));
}


else {
    date_default_timezone_set('Asia/Calcutta');
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO newsletter(email, submit_date) VALUES (?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo json_encode(array('message' => "not", "status" => 500));
    }

    else {
        mysqli_stmt_bind_param($stmt, "ss", $news_email, $date);
        mysqli_stmt_execute($stmt);
        echo json_encode(array('email' => "{$news_email}", "date" => "{$date}",  "status" => 201));
    }
}




?>