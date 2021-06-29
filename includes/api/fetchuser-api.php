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
      $arr =  array('client-id' => $row['client_id'], 'status' => 'offline');
      array_push($mainArr, $arr);
        //echo(json_encode($arr));
    }else {
        $arr =  array('client-id' => $row['client_id'], 'status' => 'online');
        array_push($mainArr, $arr);
        //echo(json_encode($arr));
    }
}

echo(json_encode($mainArr));


?>