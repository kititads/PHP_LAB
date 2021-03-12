<?php
  include 'connect.php';
  $id = $_POST['user'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `user`WHERE user_name = '$id' and user_pin = '$password'";
  $result = mysqli_query($con, $sql);
  if(mysqli_num_rows($result)==1){
    echo "<script type='text/javascript'>";
    echo "alert('เข้าสู่ระบบสำเร็จ');";
    echo "window.location = 'show_movie.php'; ";
    echo "</script>";
    } 
    else
    {
    echo "<script type='text/javascript'>";
    echo "alert('เข้าสู่ระบบไม่สำเร็จ');";
    echo "window.location = 'Logic_in.php'; ";
    echo "</script>";	
}
?>