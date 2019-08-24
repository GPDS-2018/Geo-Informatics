<?php
header ("Access-Control-Allow-Origin: *");
header ("Access-Control-Expose-Headers: Content-Length, X-JSON");
header ("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header ("Access-Control-Allow-Headers: *");

include('connection.php'); 
session_start();

$q = "SELECT * FROM general";
    $sql = $con->query($q);
    $data = array();

    while($row = mysqli_fetch_array($sql)){
        $data[] = $row;
    }
    echo json_encode($data);

?>

