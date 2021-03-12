<?php
  include 'connect.php';
  $name = $_POST['movie_name'];
  $date = $_POST['movie_date'];
  $id = $_POST['movie_id'];

  $sql = "UPDATE `movie` SET 
  `movie_name`= '$name',
  `movie_date`= '$date' 
  WHERE movie_id = $id";
 if ($con->query($sql) === TRUE) {
    echo "<script type='text/javascript'>";
    echo "alert('อัพเดตภาพยนตร์สำเร็จ');";
    echo "window.location = 'show_movie.php'; ";
    echo "</script>";
    } 
    else
    {
    echo "<script type='text/javascript'>";
    echo "alert('อัพเดตภาพยนตร์ไม่สำเร็จ');";
    echo "window.location = 'show_movie.php'; ";
    echo "</script>";	
}
  ?>
