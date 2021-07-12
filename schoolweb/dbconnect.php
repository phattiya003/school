<?php 
 // โดยที่ $ชื่อตัวแปร = new mysqli($servername, $username, $password, $dbname)
 $con = mysqli_connect('localhost', 'root', '', 'schoolweb');

 // ทำการ check connection ว่าถูกต้องหรือไม่
  if ($con->connect_error) {
        die("Something wrong.: " . $con->connect_error);
   }

?>