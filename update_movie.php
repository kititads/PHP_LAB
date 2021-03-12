<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Movie</title>
</head>
<style>

</style>
<body>

<form action="update_post.php" method="POST">
<br>ชื่อภาพยนตร์<br>
<input type="text" name="movie_name"><br>
<br>เวลาที่เริ่มฉาย<br>
<input type="datetime-local"  name="movie_date"><br>
<?php
$id = $_GET['id'];
echo '<input type="hidden" name="movie_id" value="'.$id.'">';
?>
<br>
<button type="submit">ยืนยัน</button><br>
</form>
    
  </tr>

</table>
</body>
</html>