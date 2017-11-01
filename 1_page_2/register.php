<?php

  $conn = mysqli_connect("localhost:81", "root", "jih32952", "honeyseat", "3307");
  mysqli_select_db($conn, "honeyseat");


  $user_id = mysqli_real_escape_string($conn,$_POST['user_id']);
  $user_pw = mysqli_real_escape_string($conn,$_POST['user_pw']);
  $user_name = mysqli_real_escape_string($conn,$_POST['user_name']);
  $user_email = mysqli_real_escape_string($conn,$_POST['user_email']);


     $sql = "INSERT INTO user
             (user_id, user_pw, user_name, user_email)
             VALUES
             ('{$user_id}', '{$user_pw}', '{$user_name}', '{$user_email}');";
  //  $sql = "INSERT INTO `user`
  //          (`user_id`, `user_pw`, `user_name`, `user_email`)
  //          VALUES
  //          ('{$user_id}', '{$user_pw}', '{$user_name}', '{$user_email}');";
  mysqli_query($conn, $sql);
  header('Location: index.html');

  mysql_close();
?>
