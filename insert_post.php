<?php
  include 'connect.php';
  $name = $_POST['movie_name'];
  $date = $_POST['movie_date'];

  $sql = "INSERT INTO `movie`(`movie_name`, `movie_date`) 
  VALUES ('$name','$date')";
   if ($con->query($sql) === TRUE) {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มภาพยนตร์สำเร็จ');";
    echo "window.location = 'insert_movie.php'; ";
    echo "</script>";
    } 
    else
    {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มภาพยนตร์ไม่สำเร็จ');";
    echo "window.location = 'insert_movie.php'; ";
    echo "</script>";	
}
  ?>