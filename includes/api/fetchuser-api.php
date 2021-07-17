<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Origin, Content-Type, Access-Control-Allow-Methods');


include "../dbh.inc.php";

$sql = "SELECT * FROM client_details";
$query= mysqli_query($conn, $sql);

$time = time();
$mainArr = array();

while ($row = mysqli_fetch_assoc($query)) {
    if ($time > $row['online_status']) {
        date_default_timezone_set("Asia/Kolkata");
        $date = date('Y-m-d H-i-s a', $row['online_status']);
        $arr =  array('client_id' => $row['client_id'], 'client_date' => $row['client_date'], 'client_time' => $row['client_time'], 'client_ip' => $row['client_ip'], 'client_city' => $row['client_city'], 'status' => 'offline', 'last_seen' => $date, 'class' => 'status-offline');
        array_push($mainArr, $arr);
        //echo(json_encode($arr));
    }else {
        $arr =  array('client_id' => $row['client_id'], 'client_date' => $row['client_date'], 'client_time' => $row['client_time'], 'client_ip' => $row['client_ip'], 'client_city' => $row['client_city'], 'status' => 'online', 'class' => 'status-online');
        array_push($mainArr, $arr);
        //echo(json_encode($arr));
    }
}

echo(json_encode($mainArr));


?>