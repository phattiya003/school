<?php include("dbconnect.php");
    
    $name =  $_POST["name"];
    $id =  $_POST["id"];
    $lname =  $_POST["lname"];

    $sql = "insert into student (stid, stname, stsurname) values ('$id','$name','$lname')";
    $result = $con->query($sql);

    // if ($result){
    //     header("Location:main.php");
    // }else{
    //     echo"บันทึกข้อมูบไม่สำเสร็จ";
    // }
?>

<h1>แบบฟอร์มบันทึกข้อมูล</h1>
<p>Just a sample for student iformation</p>
<form action = "#" method="post">
    <div>
        <label for="">รหัส</label>
        <input type="vachar" name="id">
    </div>
    <div>
        <label for="">ชื่อ</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">นามสกุล</label>
        <input type="text" name="lname">
    </div>
    <input type = "submit" value="บันทึกข้อมูล">
</form>
<a href = "main.php"> กลับหน้าแรก