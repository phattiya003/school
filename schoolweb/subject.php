<?php include("dbconnect.php");
$sql = "SELECT * FROM subject";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject</title>
    <link rel="stylesheet" href="stylesheet">
</head>
<body>
    <div class="container"></div>
</body>
</html>
<div class="container">
        <h1>ข้อมูลรายวิชา</h1>
    <table border = 1>
    <colgroup>
    <col span="25" style="background-color:orange">
    </colgroup>
                    <th>SubjectID</th>
                    <th>SubjectName</th>
                    <th>LevelID</th>
                    <th>SubjectGroupID</th>
                    <th>DisplaySequence</th>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
            <td><?php echo $row['SubjectID']; ?></td>
            <td><?php echo $row['SubjectName']; ?></td>
            <td><?php echo $row['LevelID']; ?></td>
            <td><?php echo $row['SubjectGroupID']; ?></td>
            <td><?php echo $row['DisplaySequence']; ?></td>
            </tr><br>
            <?php endwhile ?>
        </tbody>
    </table>
    <a href = "main.php"> กลับหน้าแรก
