<?php include("dbconnect.php");?>
<h1>แบบฟอร์มบันทึกข้อมูลนักเรียน</h1>
<p></p>
<form action = "addstudent.php" method="post">
    <div>
        <label for="">รหัส: </label>
        <input type="varchar" name="StudentID">
    </div>
    <div>
        <label for="">ชื่อ: </label>
        <input type="varchar" name="StudentName">
    </div>
    <div>
        <label for="">นามสกุล: </label>
        <input type="varchar" name="StudentSurname">
    </div>
    <div>
        <label for="">Class ID: </label>
        <input type="varchar" name="ClassID">
    </div>
    <div>
        <label for="">Status ID: </label>
        <input type="varchar" name="StatusID">
    </div>
    <div>
        <label for="">รหัสประจำตัวประชาชน: </label>
        <input type="varchar" name="CardID">
    </div>   
    <div>
        <label for="">ที่อยู่: </label>
        <input type="varchar" name="Address">
    </div>
    <div>
        <label for="">ตำบล: </label>
        <input type="varchar" name="SubDistrict">
    </div>
    <div>
        <label for="">อำเภอ: </label>
        <input type="varchar" name="District">
    </div>
    <div>
        <label for="">จังหวัด: </label>
        <input type="varchar" name="Province">
    </div>   
    <div>
        <label for="">วันเกิด: </label>
        <input type="date" name="BirthDate">
    </div>
    <div>
        <label for="">เบอร์โทรศัพท์: </label>
        <input type="varchar" name="Tel">
    </div>
    <div>
        <label for="">TitleID: </label>
        <input type="varchar" name="TitleID">
    </div>


    <input type = "submit" value="บันทึกข้อมูล">
</form>
<a href = "main.php"> กลับหน้าแรก
    