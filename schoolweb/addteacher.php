<mate charset ="utf-8" />
<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<?php include("dbconnect.php");

//สร้างตัวแปร
$TeacherID = $_POST['TeacherID'];
$TeacherName = $_POST['TeacherName'];
$TeacherSurname = $_POST['TeacherSurname']; 
$StatusID = $_POST['StatusID']; 
$CardID = $_POST['CardID'];
$Address = $_POST['Address'];
$SubDistrict = $_POST['SubDistrict'];
$District = $_POST['District'];
$Province = $_POST['Province'];
$BirthDate = $_POST['BirthDate'];
$Tel = $_POST['Tel'];
$TitleID = $_POST['TitleID'];



	//เพิ่มข้อมูล
	$sql = "insert into teacher(TeacherID, TeacherName, TeacherSurname, StatusID, CardID, Address, SubDistrict, District, Province, BirthDate, Tel, TitleID)
	values('$TeacherID', '$TeacherName', '$TeacherSurname', '$StatusID', '$CardID', '$Address', '$SubDistrict', '$District', '$Province', '$BirthDate', '$Tel', '$TitleID')";
	
	$results = mysqli_query($con, $sql);
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
			
			
				
				
				//ถ้าสำเร็จให้ขึ้นอะไร
	if ($results){
		echo "<script type='text/javascript'>";
		echo"alert('บันทึกข้อมูลสำเร็จ');";
	    echo"window.location = 'teacher.php';";
		echo "</script>";
		}
		else {
			//กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
				echo "<script type='text/javascript'>";
				echo "alert('บันทึกข้อมูลไม่สำเร็จ');";
				echo"window.location = 'insertteacher.php'; ";
				echo"</script>";
	}
