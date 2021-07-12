<?php include("dbconnect.php");
$sql = "SELECT * FROM teacher";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
    <link rel="stylesheet" href="stylesheet">
</head>
<body>
    <div class="container"></div>
</body>
</html>
<div class="container">
        <h1>ข้อมูลคุณครู</h1>
    <table border = 1>
    <colgroup>
    <col span="25" style="background-color:orange">
    </colgroup>
                    <th>TeacherID</th>
                    <th>TeacherName</th>
                    <th>TeacherSurname</th>
                    <th>StatusID</th>
                    <th>CardID</th>
                    <th>Address</th>
                    <th>SubDistrict</th>
                    <th>District</th>
                    <th>Province</th>
                    <th>BirthDate</th>
                    <th>Tel</th>
                    <th>TitleID</th>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
            <td><?php echo $row['TeacherID']; ?></td>
            <td><?php echo $row['TeacherName']; ?></td>
            <td><?php echo $row['TeacherSurname']; ?></td>
            <td><?php echo $row['StatusID']; ?></td>
            <td><?php echo $row['CardID']; ?></td>
            <td><?php echo $row['Address']; ?></td>
            <td><?php echo $row['SubDistrict']; ?></td>
            <td><?php echo $row['District']; ?></td>
            <td><?php echo $row['Province']; ?></td>
            <td><?php echo $row['BirthDate']; ?></td>
            <td><?php echo $row['Tel']; ?></td>
            <td><?php echo $row['TitleID']; ?></td>
            </tr><br>
            <?php endwhile ?>
        </tbody>
    </table>
    <a href = "main.php"> กลับหน้าแรก
