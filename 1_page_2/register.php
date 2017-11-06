<?php

  $conn = mysqli_connect("localhost", "root", "jih32952", "honeyseat", "3307");
  if (!$conn) {
    echo "connect error";
  }
  mysqli_select_db($conn, "honeyseat");


  $user_id = mysqli_real_escape_string($conn,$_POST['reg_id']);
  $user_pw = mysqli_real_escape_string($conn,$_POST['reg_password']);
  $user_name = mysqli_real_escape_string($conn,$_POST['reg_name']);
  $user_email = mysqli_real_escape_string($conn,$_POST['reg_email']);

  $sql = "INSERT INTO `user`(`user_id`, `user_pw`, `user_name`, `user_email`) VALUES('{$user_id}', '{$user_pw}', '{$user_name}', '{$user_email}');";
  $result = mysqli_query($conn, $sql);
  header('Location: index.php');

  if (! $result) {
    # code...
    echo "query error";
  }

      mysqli_close($conn);
?>
