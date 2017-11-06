<?php
session_start();

  $conn = mysqli_connect("localhost", "sjlim333", "j08300104", "sjlim333", "3306");
  if (!$conn) {
    echo "connect error";
  }
  mysqli_select_db($conn, "sjlim333");

  $user_id = mysqli_real_escape_string($conn,$_POST['lg_id']);
  $user_pw = mysqli_real_escape_string($conn,$_POST['lg_password']);

    $sql = "SELECT * FROM `user` WHERE `user_id` = '{$user_id}' AND `user_pw` = '{$user_pw}';";
    $result = mysqli_query($conn, $sql);


    if ($result->num_rows > 0) {
      $_SESSION['is_logged'] = 'YES';
      $_SESSION['user_id'] = $user_id;
      header("Location: login_done.php");
      exit();
    }
    else {
      $_SESSION['is_logged'] = 'NO';
      $_SESSION['user_id'] = '';
      header("Location: login_done.php");
      exit();
    }


    mysqli_query($conn, $sql);
    header('Location: index.php');

    mysqli_close($conn);
?>
