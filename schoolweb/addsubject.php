<mate charset ="utf-8" />
<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<?php include("dbconnect.php");


//สร้างตัวแปร
$SubjectID = $_POST['SubjectID'];
$SubjectName = $_POST['SubjectName'];
$LevelID = $_POST['LevelID']; 
$SubjectGroupID = $_POST['SubjectGroupID']; 
$DisplaySequence = $_POST['DisplaySequence'];




	//เพิ่มข้อมูล
	$sql = "insert into subject(SubjectID, SubjectName, LevelID, SubjectGroupID, DisplaySequence)
	values('$SubjectID', '$SubjectName', '$LevelID', '$SubjectGroupID', '$DisplaySequence')";
	
	$results = mysqli_query($con, $sql);
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
			
			
				
				
				//ถ้าสำเร็จให้ขึ้นอะไร
	if ($results){
		echo "<script type='text/javascript'>";
		echo"alert('บันทึกข้อมูลสำเร็จ');";
	    echo"window.location = 'subject.php';";
		echo "</script>";
		}
		else {
			//กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
				echo "<script type='text/javascript'>";
				echo "alert('บันทึกข้อมูลไม่สำเร็จ');";
				echo"window.location = 'insertsubject.php'; ";
				echo"</script>";
	}
