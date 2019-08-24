<?php
header ("Access-Control-Allow-Origin: *");
header ("Access-Control-Expose-Headers: Content-Length, X-JSON");
header ("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header ("Access-Control-Allow-Headers: *");

include('connection.php'); 
session_start();

$q = "SELECT a.name_place,a.latitude,a.longitude,a.lat_curr,a.log_curr,a.level_wt,b.locator_img 
      FROM tb_img b 
      RIGHT JOIN general a 
      ON a.gen_id = b.gen_id 
      ORDER BY a.gen_id ASC";
    $sql = $con->query($q);
    $data = array();

    while($row = mysqli_fetch_array($sql)){
        $data[] = $row;
    }
    echo json_encode($data);

?>

