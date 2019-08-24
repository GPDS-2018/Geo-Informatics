<?php 
include('php/connection.php'); 
session_start();

$fullname=$_POST['fullname'];
$tel=$_POST['tel'];
$lat_value=$_POST['lat_value'];
$lon_value=$_POST['lon_value'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$name_place=$_POST['name_place'];
$level_wt=$_POST['level_wt'];

$img = $_FILES['image']['name']; 
$tmp = $_FILES['image']['tmp_name'];

$ext = pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);

$ext = pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);
$new = 'img_' .uniqid().".".$ext;

$path = "images/";
$up_img = $path.$new;

$success = move_uploaded_file($_FILES['image']['tmp_name'],$up_img);

if($success){
	$query = mysqli_query($con,"INSERT INTO general(gen_id,fullname,gen_tel,lat_curr,log_curr,name_place,level_wt,latitude,longitude) VALUES ('','$fullname','$tel','$lat_value','$lon_value','$name_place','$level_wt','$latitude','$longitude')");

    $Query = $con->query("SELECT * FROM general WHERE gen_id ORDER BY gen_id DESC");
    $Result = $Query->fetch_assoc();
    $gen_id=$Result["gen_id"];

	$query1 = mysqli_query($con,"INSERT INTO tb_img(img_id,locator_img,gen_id) VALUES ('','$up_img','$gen_id')");

	if($query1){
        echo "<script type='text/javascript'>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=index.html'>";
    }else{
        echo "<script type='text/javascript'>alert('เกิดข้อผิดพลาดในการบันทึกข้อมูล');window.history.go(-1);</script>" ;
    }

}else{
	$query = mysqli_query($con,"INSERT INTO general(gen_id,fullname,gen_tel,lat_curr,log_curr,name_place,level_wt,latitude,longitude) VALUES ('','$fullname','$tel','$lat_value','$lon_value','$name_place','$level_wt','$latitude','$longitude')");

	if($query){
        echo "<script type='text/javascript'>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=index.html'>";
    }else{
        echo "<script type='text/javascript'>alert('เกิดข้อผิดพลาดในการบันทึกข้อมูล');window.history.go(-1);</script>" ;
    }
}

mysqli_close($con);

?>

