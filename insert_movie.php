<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Movie</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<body>
<?php
  include 'connect.php';
  $sql = "SELECT * FROM `movie`";
  $result = mysqli_query($con, $sql);
  $row = mysqli_num_rows($result);
  $row++;
  ?>
<form action="insert_post.php" method="POST" >
รหัสภาพยนตร์
<br>
<?php
echo '<input type="text" name="movie_id" disabled value="'.$row.'"><br>';

?>

<br>ชื่อภาพยนตร์<br>

<input type="text" name="movie_name"><br>
<br>เวลาที่เริ่มฉาย<br>
<input type="datetime-local"  name="movie_date"><br>
<br>
<button type="submit">ยืนยัน</button><br>
</form>

  </tr>

</table>
</body>
</html>