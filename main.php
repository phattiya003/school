<?php include("dbconnect.php"); ?>
<h2>ข้อมูลนักเรียน</h2>
<table border =1 >
<tr>
    <td>id</td>
    <td>name</td>
    <td>surname</td>
</tr>

<?php
$sql = "select * from student order by stid ASC";
$result = $con -> query($sql);

while($rs = $result->fetch_object()){
?>
<tr>
    <td><?=$rs->stid;?></td>
    <td><?=$rs->stname;?></td>
    <td><?=$rs->stsurname;?></td>
</tr>
<?php } ?>
</table>
<a href = "insertstudent.php"> กรอกข้อมูลนักเรียน <br>
<a href = "insertteacher.php"> กรอกข้อมูลคุณครู<br>
<a href = "insertsubject.php"> กรอกข้อมูลรายวิชา<br>
<a href = "insertclass.php"> กรอกข้อมูลชั้นเรียน
