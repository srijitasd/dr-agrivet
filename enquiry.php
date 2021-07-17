<?php   include "./includes/dbh.inc.php";

$sql = "SELECT * FROM enquiry_table";
$query = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($query)) {
    echo $row['u_name'];
    echo $row['mob_no'];
    echo $row['email'];
    echo $row['details'];
}

?>