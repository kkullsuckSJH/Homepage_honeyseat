<?php
  session_start();

  $conn = mysqli_connect("localhost", "sjlim333", "j08300104", "sjlim333", "3306");
  if (!$conn) {
    echo "connect error";
  }
  mysqli_select_db($conn, "sjlim333");


  $user_id = mysqli_real_escape_string($conn,$_POST['reg_id']);
  $user_pw = mysqli_real_escape_string($conn,$_POST['reg_password']);
  $user_name = mysqli_real_escape_string($conn,$_POST['reg_name']);
  $user_email = mysqli_real_escape_string($conn,$_POST['reg_email']);

  $user_prefer_floor = $_POST['reg_prefer_floor'];
  $user_prefer_distance = $_POST['reg_prefer_distance'];
  $user_prefer_cost = $_POST['reg_prefer_cost'];
  $user_prefer_sound = $_POST['reg_prefer_sound'];

  $user_rank_distance = $_POST['reg_rank_distance'];
  $user_rank_cost = $_POST['reg_rank_cost'];
  $user_rank_sound = $_POST['reg_rank_sound'];

  $sql = "INSERT INTO `user`(`user_id`, `user_pw`, `user_name`, `user_email`, `user_prefer_floor`, `user_prefer_distance`, `user_prefer_cost`, `user_prefer_sound`, `user_rank_distance`, `user_rank_cost`, `user_rank_sound`)
  VALUES('{$user_id}', '{$user_pw}', '{$user_name}', '{$user_email}', '{$user_prefer_floor}', '{$user_prefer_distance}', '{$user_prefer_cost}', '{$user_prefer_sound}', '{$user_rank_distance}', '{$user_rank_cost}', '{$user_rank_sound}');";
  $result = mysqli_query($conn, $sql);
  header('Location: index.php');

  if (! $result) {
    # code...
    echo "query error";
  }

      mysqli_close($conn);
?>
