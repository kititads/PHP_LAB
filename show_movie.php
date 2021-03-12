<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Movie</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  text-align: center;
}
</style>
<body>
<table style="width:100%">
  <tr>
    <th>รหัสภาพยนตร์</th>
    <th>ชื่อภาพยนตร์</th>
    <th>เวลาที่เริ่มฉาย (วัน+เวลา)</th>
    <th>คำสั่งลบ</th>
    <th>คำสั่งแก้ไข</th>


  </tr>
  <tr>
  <?php
  include 'connect.php';
  $sql = "SELECT * FROM `movie`";
  $result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_array($result)) {

    echo '<td>'.$row['movie_id'].'</td>';
    echo '<td>'.$row['movie_name'].'</td>';
    echo '<td>'.$row['movie_date'].'</td>';
    echo '<td>'.'<a href="delete.php?id='.$row['movie_id'].'">ลบ</a>'.'</td>';
    echo '<td>'.'<a href="update_movie.php?id='.$row['movie_id'].'">แก้ไข</a>'.'</td>';
   echo '</tr>';
}
?>
 


</table>
</body>
</html>