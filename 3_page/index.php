<?php
  session_start();
  $is_logged = $_SESSION['is_logged'];
  if($is_logged=='YES') {
    $button = '<a href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/1_page/logout.php" class="btn btn-primary">로그아웃</a>';
    $user_id = $_SESSION['user_id'];
    $recommendSeat_msg = '';
  }
  else {
    $button = ' ';
    $recommendSeat_msg = '<h3>로그인을 하면 좌석 추천 서비스를 이용하실 수 있습니다.</h3> <a href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/1_page/index.php" class="btn btn-primary">로그인하기</a>';
  }

  $conn = mysqli_connect("localhost", "sjlim333", "j08300104", "sjlim333", "3306");
  if (!$conn) {
    echo "connect error";
  }
  mysqli_select_db($conn, "sjlim333");
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
    <link href="css/modern-business.css" rel="stylesheet">

    <!--korean font http://moolgogiheart.tistory.com/89-->
    <link href="http://fonts.googleapis.com/earlyaccess/jejugothic.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | New Unity Project</title>
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="shortcut icon" href="TemplateData/favicon.ico" />
    <script src="TemplateData/UnityProgress.js"></script>

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
                  <a class="nav-link" href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/1_page/index.php">홈
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/2_page/index.php">공연장
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/5_page/index.php">후기 게시판</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/4_page/index.php">후기 작성</a>
                </li>
                <?php echo $button; ?>
              </ul>
            </div>
          </div>
        </nav>

    <div class="container">

      <div class="template">
        <div class="template-wrap clear">
          <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="600px" width="960px"></canvas>
          <br>
          <!-- <div class="logo"></div>
          <div class="fullscreen"><img src="TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
          <div class="title">New Unity Project</div> -->
        </div>
        <script type='text/javascript'>
      var Module = {
        TOTAL_MEMORY: 268435456,
        errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
        compatibilitycheck: null,
        backgroundColor: "#222C36",
        splashStyle: "Light",
        dataUrl: "Release/Unity_audi.data",
        codeUrl: "Release/Unity_audi.js",
        asmUrl: "Release/Unity_audi.asm.js",
        memUrl: "Release/Unity_audi.mem",
      };
    </script>
    <script src="Release/UnityLoader.js"></script>
  </div>

    <!-- Page Content -->
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><hr>


      <!-- About -->
      <section id="about" class="about">
        <div class="container text-center">
          <p class="lead">각 좌석도에서 좌석 버튼을 클릭하시면 해당 좌석의 무대시각선을 보실 수 있습니다. <br>
           3D 시뮬레이션 시야(VIEW)이기 때문에 실제 눈으로 보는 것과는 약간의 차이가 있을 수 있습니다.
            </p>
        </div>
      </section>
      <hr>
      <br>

      <?php
      # select user_prefer ..
      $sql = "SELECT `user_prefer_floor`, `user_prefer_distance`, `user_prefer_cost`, `user_prefer_sound`, `user_rank_distance`, `user_rank_cost`, `user_rank_sound`
      FROM `user`
      WHERE `user_id` = '{$user_id}';";
      $result = mysqli_query($conn, $sql);
      $user_array = mysqli_fetch_array($result);

      $user_prefer_floor = $user_array['user_prefer_floor'];
            $user_prefer_distance = $user_array['user_prefer_distance'];
            $user_prefer_cost = $user_array['user_prefer_cost'];
            $user_prefer_sound = $user_array['user_prefer_sound'];
            $user_rank_distance = $user_array['user_rank_distance'];
            $user_rank_cost = $user_array['user_rank_cost'];
            $user_rank_sound = $user_array['user_rank_sound'];


            $sql = "SELECT *  FROM `seat`
            WHERE `audi_floor` = '{$user_prefer_floor}';";
            $result = mysqli_query($conn, $sql);

            $total_array = array();

            while ($seat = mysqli_fetch_assoc($result)) {
              $seat_num = $seat['seat_num'];
              $avr_score_cost = $seat['avr_score_cost'];
              $avr_score_sound = $seat['avr_score_sound'];
              $avr_score_distance = $seat['avr_score_distance'];


              if ($user_rank_distance == '1') {
                $weight_distance = 1.3;
              }
              else if ($user_rank_distance == '3') {
                $weight_distance = 1.1;
              }
              else {
                $weight_distance = 1.2;
              }
              if ($user_rank_cost == '1') {
                $weight_cost = 1.3;
              }
              else if ($user_rank_cost == '3') {
                $weight_cost = 1.1;
              }
              else {
                $weight_cost = 1.2;
              }
              if ($user_rank_sound == '1') {
                $weight_sound = 1.3;
              }
              else if ($user_rank_sound == '3') {
                $weight_sound = 1.1;
              }
              else {
                $weight_sound = 1.2;
              }

              $total = ((abs($avr_score_distance - $user_prefer_distance) + 1) * $weight_distance)
                     + ((abs($avr_score_cost - $user_prefer_cost) + 1) * $weight_cost)
                     + ((abs($avr_score_sound - $user_prefer_sound) + 1) * $weight_sound);

              $total_array["$seat_num"] = $total;


              echo $seat_num;
              echo ":";
              echo $total;
              echo "/ avr:";
              echo $avr_score_distance;
              echo ",";
              echo $avr_score_cost;
              echo ",";
              echo $avr_score_sound;
              echo "\n";


            }
            asort($total_array);
            $rank_array = array();

            for ($i=0; $i <3 ; $i++) {
              array_push($rank_array, key($total_array));
              next($total_array);
            }

           ?>


      <h2 class="my-4">추천 좌석</h2>

      <?php echo $recommendSeat_msg; ?>
      <br><br>
      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Top 1</h4>
            <div class="card-body">
              <p class="card-text">
                <?php
                # select user_prefer ..
                $sql = "SELECT `avr_score_star` FROM `seat` WHERE `seat_num` = '{$rank_array[0]}' AND `audi_floor` = '{$user_prefer_floor}';";
                $result = mysqli_query($conn, $sql);
                $seat_1st = mysqli_fetch_array($result);

                echo $rank_array[0];
                echo "\n";
                echo $user_prefer_floor;
                echo "\n";
                echo $seat_1st['avr_score_cost'];
                echo "\n";
                echo $seat_1st['avr_score_sound'];
                echo "\n";
                echo $seat_1st['avr_score_distance'];
                 ?>
              </p>
            </div>

            <!--별점-->
            <div class="card-footer">
              <h6>거리</h6>

              <h6>가격</h6>
>
              <h6>사운드</h6>

              <script src="js/jquery-1.11.3.min.js"></script>
            </div>

          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Top 2</h4>
            <div class="card-body">
              <p class="card-text">
                  <?php
                  # select user_prefer ..
                  $sql = "SELECT `avr_score_star` FROM `seat` WHERE `seat_num` = '{$rank_array[1]}' AND `audi_floor` = '{$user_prefer_floor}';";
                  $result = mysqli_query($conn, $sql);
                  $seat_1st = mysqli_fetch_array($result);

                  echo $rank_array[1];
                  echo "\n";
                  echo $user_prefer_floor;
                   ?>
              </p>
            </div>

            <!--별점-->
            <div class="card-footer">
              <?php
              echo "\n";
              echo $seat_1st['avr_score_cost'];
              echo "\n";
              echo $seat_1st['avr_score_sound'];
              echo "\n";
              echo $seat_1st['avr_score_distance'];
               ?>

              <table>
              <tr>
                <td style="padding-right:10px">
                  <label for="input-3" class="control-label">Likes</label>
                </td>
                <td>
                  <input id="input-3" name="input-3" value="4" class="rating-loading">
                </td>
              </tr>
              </table>

              <h6>거리</h6>

              <h6>가격</h6>

              <h6>사운드</h6>
              <script src="js/jquery-1.11.3.min.js"></script>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Top 3</h4>
            <div class="card-body">
              <p class="card-text">
                <?php
                # select user_prefer ..
                $sql = "SELECT `avr_score_star` FROM `seat` WHERE `seat_num` = '{$rank_array[2]}' AND `audi_floor` = '{$user_prefer_floor}';";
                $result = mysqli_query($conn, $sql);
                $seat_1st = mysqli_fetch_array($result);
                echo $rank_array[2];
                echo "\n";
                echo $user_prefer_floor;
                 ?>
              </p>
            </div>
            <!--별점-->
            <div class="card-footer">
              <?php
              echo "\n";
              echo $seat_1st['avr_score_cost'];
              echo "\n";
              echo $seat_1st['avr_score_sound'];
              echo "\n";
              echo $seat_1st['avr_score_distance'];
              ?>
              <h6>거리</h6>

              <h6>가격</h6>

              <h6>사운드</h6>

              <script src="js/jquery-1.11.3.min.js"></script>
            </div>
          </div>
        </div>
      </div>
      <br><br><br>
      <script src="js/jquery-3.1.1.js"></script>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; HONEY SEAT 2017</p>
      </div>
      <!-- /.container -->
    </footer>

  </body>
</html>
