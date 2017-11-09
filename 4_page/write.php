<?php
  session_start();

  $conn = mysqli_connect("localhost", "sjlim333", "j08300104", "sjlim333", "3306");
  if (!$conn) {
    echo "connect error";
  }
  mysqli_select_db($conn, "sjlim333");

  $audi_name = $_POST['audi_name'];
  $floor = $_POST['floor'];
  $seat_num = $_POST['seat_num'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  $distance_score = $_POST['distance_score'];
  $cost_score = $_POST['cost_score'];
  $sound_score = $_POST['sound_score'];

  $score_array = array($distance_score, $cost_score, $sound_score);
  $score_star = array_sum($score_array)/3;

  $user_id = $_SESSION['user_id'];

    # select seat_code ..
  $sql = "SELECT `seat_code`  FROM `seat` WHERE `audi_code` = '{$audi_name}' AND `audi_floor` = '{$floor}' AND `seat_num` = '{$seat_num}';";
  $result = mysqli_query($conn, $sql);
  $seat_code_array = mysqli_fetch_array($result);
  $seat_code = $seat_code_array['seat_code'];

    # insert to score table ..
  $sql = "INSERT INTO `score`(`score_code`, `seat_code`, `score_distance`, `score_sound`, `score_cost`, `score_star`)
  VALUES (NULL, '{$seat_code}', '{$distance_score}', '{$sound_score}', '{$cost_score}', '{$score_star}');";
  $result2 = mysqli_query($conn, $sql);

  $sql = "INSERT INTO `review`(`review_num`, `audi_code`, `floor`, `seat_num`, `seat_code`, `score_code`, `title`, `content`, `user_id`, `date`)
  VALUES (NULL,'{$audi_name}','{$floor}','{$seat_num}','{$seat_code}', LAST_INSERT_ID(),'{$title}','{$content}', '{$user_id}', now());";
  $result3 = mysqli_query($conn, $sql);

    if (! $result) {
      # code...
      echo "query error";
    }

  mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Honey Seat Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
              <div class="container">
                <a class="navbar-brand" href="#">Honey Seat</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/1_page/index.php">Home
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/2_page/index.php">공연장
                        <span class="sr-only">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/4_page/index.php">후기 작성</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading -->
      <h1 class="my-4"> <?php echo "게시글 업로드가 완료되었습니다."; ?>
        <!--<small>Secondary Text</small>-->
      </h1>
      <!--설문지 form-->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; HONEY SEAT 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>

  </body>

</html>
