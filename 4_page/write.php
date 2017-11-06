<?php
  $conn = mysqli_connect("localhost", "sjlim333", "j08300104", "sjlim333", "3306");
  if (!$conn) {
    echo "connect error";
  }
  mysqli_select_db($conn, "sjlim333");

  $audi_name = mysqli_real_escape_string($conn,$_POST['audi_name']);
  $floor = mysqli_real_escape_string($conn,$_POST['floor']);
  $seat_code = mysqli_real_escape_string($conn,$_POST['seat_code']);
  $title = mysqli_real_escape_string($conn,$_POST['title']);
  $content = mysqli_real_escape_string($conn,$_POST['distance_score']);
  $cost_score = mysqli_real_escape_string($conn,$_POST['cost_score']);
  $sound_score = mysqli_real_escape_string($conn,$_POST['sound_score']);

  $sql = "INSERT INTO `user`(`user_id`, `user_pw`, `user_name`, `user_email`) VALUES('{$user_id}', '{$user_pw}', '{$user_name}', '{$user_email}');";
  $result = mysqli_query($conn, $sql);
  header('Location: index.html');

    if (! $result) {
      # code...
      echo "query error";
    }

        mysqli_close($conn);
?>
