<?php
    session_start();

  $conn = mysqli_connect("localhost", "sjlim333", "j08300104", "sjlim333", "3306");
  if (!$conn) {
    echo "connect error";
  }
  mysqli_select_db($conn, "sjlim333");

  $audi_name = mysqli_real_escape_string($conn,$_POST['audi_name']);
  $floor = mysqli_real_escape_string($conn,$_POST['floor']);
  $seat_num = mysqli_real_escape_string($conn,$_POST['seat_num']);
  $title = mysqli_real_escape_string($conn,$_POST['title']);
  $content = mysqli_real_escape_string($conn,$_POST['content'])
  $distance_score = mysqli_real_escape_string($conn,$_POST['distance_score']);
  $cost_score = mysqli_real_escape_string($conn,$_POST['cost_score']);
  $sound_score = mysqli_real_escape_string($conn,$_POST['sound_score']);

  $score_array = array($distance_score, $cost_score, $sound_score);
  $score_star = array_sum($score_array)/3;

  $user_id = $_SESSION['user_id'];

    # select seat_code ..
  $sql = "SELECT `seat_code`  FROM `seat` WHERE `audi_code` = '{$audi_name}' AND `audi_floor` = '{$floor}' AND `seat_num` = '{$seat_num}';";
  $result = mysqli_query($conn, $sql);
  $seat_code = mysqli_fetch_assoc($result);

    # insert to score table ..
  $sql = "INSERT INTO `score`(`score_code`, `seat_code`, `score_distance`, `score_sound`, `score_cost`, `score_star`)
  VALUES (NULL, '{$seat_code}', '{$distance_score}', '{$sound_score}', '{$cost_score}', '{$score_star}');";
  $result2 = mysqli_query($conn, $sql);
  $score_code = mysqli_fetch_assoc($result2);

    # insert to review table ..
  $sql = "INSERT INTO `review`(`review_num`, `audi_code`, `floor`, `seat_num`, `seat_code`, `score_code`, `title`, `content`, `user_id`, `date`)
  VALUES (NULL,'{$audi_name}','{$floor}','{$seat_num}','{$seat_code}', '{$score_code}','{$title}','{$content}', '{$user_id}', NULL);";
  $result = mysqli_query($conn, $sql);


    if (! $result) {
      # code...
      echo "query error";
    }

        mysqli_close($conn);

        header('Location: /3_page/index.php');
?>
