<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Origin, Content-Type, Access-Control-Allow-Methods');

include_once "../dbh.inc.php";

$api_key = $_GET['api_key'];

$api_query = "SELECT * FROM api_access_table WHERE api_key = '$api_key'";
$verify_api_key = mysqli_query($conn, $api_query);


if (mysqli_num_rows($verify_api_key) > 0) {
    $sql = "SELECT * FROM  newsletter";

    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        $output = mysqli_fetch_all(($query), MYSQLI_ASSOC);
        echo json_encode($output);
    }
} else {
    echo json_encode(array("error" => "api key is invalid"));
}
