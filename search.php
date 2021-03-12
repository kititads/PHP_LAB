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
<form action="" method="POST" >
ใส่ชื่อภาพยนตร์ที่ต้องการค้นหา
<input type="text" name="movie_name"><br>
<button type="submit">ยืนยัน</button><br>
</form>
<table style="width:100%">
  <tr>
    <th>รหัสภาพยนตร์</th>
    <th>ชื่อภาพยนตร์</th>
    <th>เวลาที่เริ่มฉาย (วัน+เวลา)</th>
  </tr>
  <tr>
  <?php
  include 'connect.php';
  if(isset($_POST['movie_name'])){
  $name = $_POST['movie_name'];
  $sql = "SELECT * FROM `movie`where movie_name like '$name%'";
  $result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_array($result)) {

    echo '<td>'.$row['movie_id'].'</td>';
    echo '<td>'.$row['movie_name'].'</td>';
    echo '<td>'.$row['movie_date'].'</td>';
  }
}
  ?>
    
  </tr>

</table>
</body>
</html>