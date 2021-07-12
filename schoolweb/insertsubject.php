<?php include("dbconnect.php");?>
<h1>แบบฟอร์มบันทึกข้อมูลรายวิชา</h1>
<p></p>
<form action = "addsubject.php" method="post">
    <div>
        <label for="">รหัสวิชา: </label>
        <input type="varchar" name="SubjectID">
    </div>
    <div>
        <label for="">ชื่อวิชา: </label>
        <input type="varchar" name="SubjectName">
    </div>
    <div>
        <label for="">LevelID: </label>
        <input type="varchar" name="LevelID">
    </div>
    <div>
        <label for="">SubjectGroupID: </label>
        <input type="varchar" name="SubjectGroupID">
    </div>
    <div>
        <label for="">DisplaySequence: </label>
        <input type="varchar" name="DisplaySequence">
    </div>
    


    <input type = "submit" value="บันทึกข้อมูล">
</form>
<a href = "main.php"> กลับหน้าแรก
    