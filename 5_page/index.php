<?php
  session_start();
  $is_logged = $_SESSION['is_logged'];
  if($is_logged=='YES') {
    $button = '<a href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/1_page/logout.php" class="btn btn-primary">로그아웃</a>';
  }
  else {
    $button = ' ';
  }

  $user_id = $_SESSION['user_id'];

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

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | New Unity Project</title>
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="shortcut icon" href="TemplateData/favicon.ico" />
    <script src="TemplateData/UnityProgress.js"></script>

    <!--korean font http://moolgogiheart.tistory.com/89-->
    <link href="http://fonts.googleapis.com/earlyaccess/jejugothic.css" rel="stylesheet">

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
    </nav>

    <div class="container">
      <br>

      <!-- Portfolio Section -->
      <h2 style="margin-bottom:30px;">공연장, 좌석 확인</h2>
      <br>
      <div class="container">
        <!--좌석배치도-->
        <script>
          function changeImg1(){
            var floor_img = document.getElementById('floor_img_1');
            floor_img.src = "img/1st_floor.PNG";
          }
            function changeImg2(){
              var floor_img = document.getElementById('floor_img_1');
              floor_img.src = "img/2nd_floor.PNG";
            }
              function changeImg3(){
                var floor_img = document.getElementById('floor_img_1');
                floor_img.src = "img/3rd_floor.PNG";
              }
        </script>
      <img class="img-fluid rounded" src="img/1st_floor.PNG" alt="" id="floor_img_1">

      <br><br>
      <p>원하시는 공연장과 층을 클릭해주세요.</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-5 col-sm-5 col-xs-5 sec">
          <select class="form-control" name="search_audi_name">
            <option>공연장</option>
            <option value="1">세종문화회관 - 세종대극장</option>
            <option value="2">충무아트센터 - 대극장</option>
            <option value="3">예술의 전당 - 자유소극장</option>
            <option value="4">샤롯데씨어터</option>
            <option value="5">국립극장 - 해오름극장</option>
          </select>
        </div>
          <div class="col-md-7 col-sm-7 col-xs-7"></div>
        </br>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-primary active">
            <input type="radio" name="options" id="option1" checked="" value="1" onClick="changeImg1()">1층
          </label>
          <label class="btn btn-primary">
            <input type="radio" name="options" id="option2" value="2" onClick="changeImg2()">2층
          </label>
          <label class="btn btn-primary">
            <input type="radio" name="options" id="option3" value="3" onClick="changeImg3()">3층
          </label>
        </div>
      </div>

      <br><br>
      <hr>
      <br>
      <h2 style="margin-bottom:30px;">후기 게시판</h2>
      <br>

      <div class="container">
      	<div class="row">
      		<div class="container">
            <div class="search-form">
              <form class="" action="index.php" method="get">
                <div class="row">
                  <div class="col-md-3 col-sm-3 col-xs-3"></div>
                  <div class="col-md-6 col-sm-6 col-xs-6 sec">
                    <p>후기가 궁금한 공연장과 층을 선택해주세요.</p>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"></div>
                  <div class="col-md-3 col-sm-3 col-xs-3"></div>
                  <div class="col-md-3 col-sm-3 col-xs-3 sec">
                    <select class="form-control" name="search_audi_name">
                      <option>공연장</option>
                      <option value="1">세종문화회관 - 세종대극장</option>
                      <option value="2">충무아트센터 - 대극장</option>
                      <option value="3">예술의 전당 - 자유소극장</option>
                      <option value="4">샤롯데씨어터</option>
                      <option value="5">국립극장 - 해오름극장</option>
                    </select>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3 sec">
                    <select class="form-control" name="search_floor">
                      <option>층수</option>
                      <option value="1">1층</option>
                      <option value="2">2층</option>
                      <option value="3">3층</option>
                    </select>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-3 col-sm-3 col-xs-3"></div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <input type="search" name="search_seat_num" class="form-control" placeholder="ex) A001">
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-5 col-sm-5 col-xs-5"></div>
                  <div class="col-md-2 col-sm-2 col-xs-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                  <div class="col-md-5 col-sm-5 col-xs-35"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <br><br>
      <!--review board-->
      <div class="container">
        <table class="table table-hover" >
          <thead>
            <tr>
              <th class="col-xs-0.5">글번호</th>
              <th class="col-xs-1.5">공연장</th>
              <th class="col-xs-0.5">층</th>
              <th class="col-xs-0.5">좌석번호</th>
              <th class="col-xs-0.5">별점</th>
              <th class="col-xs-5.5">제목</th>
              <th class="col-xs-1.5">작성자</th>
              <th class="col-xs-1.5">날짜</th>
            </tr>
          </thead>
          <tbody>

            <?php
            // OPERATING PAGINATION
            // http://blog.kurien.co.kr/529?category=574625
            //
            // if(isset($_GET['page'])) {
	          //    $page = $_GET['page'];
            // }
            // else {
	          //    $page = 1;
            // }
            // $sql = 'select count(*) as cnt from board_free order by b_no desc';
            // $result = $db->query($sql);
            // $row = $result->fetch_assoc();
            // $allPost = $row['cnt']; //전체 게시글의 수


            if (empty($_GET['search_seat_num']) || empty($_GET['search_audi_name']) || empty($_GET['search_floor'])) {
              $sql = "SELECT * FROM `review` ORDER BY `review_num` DESC;";
            }
            else {
              $sql = "SELECT * FROM `review`
              WHERE `audi_code` = '{$_GET['search_audi_name']}'
              AND `floor` = '{$_GET['search_floor']}'
              AND `seat_num` = '{$_GET['search_seat_num']}'
              ORDER BY `review_num` DESC;";
            }

            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              # split date & time ..
              $split_date_time = explode(' ', "{$row['date']} ");
              $date = $split_date_time[0];
              $time = $split_date_time[1];
              if ($date == Date('Y-m-d')){
                $row['date'] = $time;
              }
              else {
                $row['date'] = $date;
              }

              $seat_num =  $row['seat_num'];
              $audi_code =  $row['audi_code'];
              $score_code =  $row['score_code'];

                # select audi_name ..
              $sql2 = "SELECT `audi_name` FROM `audi` WHERE `audi_code` = '{$audi_code}';";
              $result2 = mysqli_query($conn, $sql2);
              $audi_name_row = mysqli_fetch_assoc($result2);
              $audi_name = $audi_name_row['audi_name'];

              $floor = $row['floor']."층";
              $review_num = $row['review_num'];
              $title = $row['title'];
              $user_id = $row['user_id'];
              $date = $row['date'];

                # select star ..
              $sql3 = "SELECT `score_star` FROM `score` WHERE `score_code` = '{$score_code}';";
              $result3 = mysqli_query($conn, $sql3);
              $score_star_row = mysqli_fetch_assoc($result3);
              $score_star = $score_star_row['score_star'];
             ?>
            <tr>
              <td class="col-xs-0.5"><?php echo $review_num;?></td>
              <td class="col-xs-1.5"><?php echo $audi_name;?></td>
              <td class="col-xs-0.5"><?php echo $floor;?></td>
              <td class="col-xs-0.5"><?php echo $seat_num;?></td>
              <td class="col-xs-0.5"><?php echo $score_star;?></td>
              <td class="col-xs-5.5"><?php echo $title;?></td>
              <td class="col-xs-1.5"><?php echo $user_id;?></td>
              <td class="col-xs-1.5"><?php echo $date;?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <hr>
        <br>

        <!-- Pagination -->
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      <script src="js/jquery-3.1.1.js"></script>
    </div>

      <!-- 바로가기 버튼 -->
      <div class="row mb-4">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/4_page/index.php">후기 작성 바로가기</a>
        </div>
      </div>
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

  </body>
</html>
