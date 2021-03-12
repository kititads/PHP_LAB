<?php
  include 'connect.php';
  $id = $_GET['id'];
  $sql = "DELETE FROM `movie` WHERE movie_id = $id";
   if ($con->query($sql) === TRUE) {
    echo "<script type='text/javascript'>";
    echo "alert('ลบภาพยนตร์สำเร็จ');";
    echo "window.location = 'show_movie.php'; ";
    echo "</script>";
    } 
    else
    {
    echo "<script type='text/javascript'>";
    echo "alert('ลบภาพยนตร์ไม่สำเร็จ');";
    echo "window.location = 'show_movie.php'; ";
    echo "</script>";	
}
  ?>