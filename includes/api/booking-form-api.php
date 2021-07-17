<?php


include_once "../dbh.inc.php";

$data = json_decode(file_get_contents("php://input"), true);

$name =  mysqli_real_escape_string($conn, $data['name'] );
$contact = mysqli_real_escape_string($conn, $data['contact'] );
$email = mysqli_real_escape_string($conn, $data['email'] );
$address = mysqli_real_escape_string($conn, $data['Address'] );
$city = mysqli_real_escape_string($conn, $data['city'] );
$zipcode = mysqli_real_escape_string($conn, $data['zipcode'] );
$preferred_date = mysqli_real_escape_string($conn, $data['preferred_date'] );
$preferred_time = mysqli_real_escape_string($conn, $data['preferred_time'] );
$service_type = mysqli_real_escape_string($conn, $data['serviceType'] );
$queries = mysqli_real_escape_string($conn, $data['queries'] );


if (empty($name) || empty($contact) || empty($email) || empty($address) || empty($city) || empty($zipcode) || empty($preferred_date) || empty($preferred_time) || empty($queries) || empty($service_type)) {
    echo(json_encode(array("message" => "empty", "status" => "400")));
} else {
	$sql = "INSERT INTO book_appointment(name, contact_no, email, address, city, zipcode, service_type, date, time, queries) VALUES('$name', '$contact', '$email', '$address', '$city', '$zipcode', '$service_type', '$preferred_date', '$preferred_time', '$queries')";
	$query = mysqli_query($conn, $sql);
	
	if(!$query) {
		echo(json_encode(array("message" => "error", "status" => "500")));
	}else {
		echo(json_encode(array("name" => $name, "contact_no" => $contact, "email" => $email, "address" => $address, "city" => $city, "zipcode" => $zipcode, "service_type" => $service_type, "date" => $preferred_date, "time" => $preferred_time, "queries" => $queries,  "status" => "201" )));
	}
	
	
}






?>