<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "project";
//create connection
$con = new mysqli($servername,$username,$password,$db);

//check connection
if($con->connect_error){
    die("Connect failed: ".$con->connect_error);
}
echo "เชื่อมต่อฐานข้อมูลสำเร็จ";

?>