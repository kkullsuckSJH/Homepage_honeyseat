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


              // OPERATING PAGINATION
              // http://blog.kurien.co.kr/529?category=574625

              if(isset($_GET['page'])) {
  	             $page = $_GET['page'];
              }
              else {
  	             $page = 1;
              }

              $sql = "SELECT count(*) as cnt from `review` order by `review_num` desc;";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_array($result);
              $allPost = $row['cnt']; //전체 게시글의 수

              $onePage = 10; // 한 페이지에 보여줄 게시글의 수.
              $allPage = ceil($allPost / $onePage); //전체 페이지의 수

              if($page < 1 || ($allPage && $page > $allPage)) {
              ?>

                <script>
                alert("존재하지 않는 페이지입니다.");
                history.back();
              </script>

              <?php
              exit;
            }

            $oneSection = 10; //한번에 보여줄 총 페이지 개수(1 ~ 10, 11 ~ 20 ...)
            $currentSection = ceil($page / $oneSection); //현재 섹션
            $allSection = ceil($allPage / $oneSection); //전체 섹션의 수

            $firstPage = ($currentSection * $oneSection) - ($oneSection - 1); //현재 섹션의 처음 페이지

            if($currentSection == $allSection) {
  	           $lastPage = $allPage; //현재 섹션이 마지막 섹션이라면 $allPage가 마지막 페이지가 된다.
             }
             else {
  	            $lastPage = $currentSection * $oneSection; //현재 섹션의 마지막 페이지
             }

             $prevPage = (($currentSection - 1) * $oneSection); //이전 페이지, 11~20일 때 이전을 누르면 10 페이지로 이동.
             $nextPage = (($currentSection + 1) * $oneSection) - ($oneSection - 1); //다음 페이지, 11~20일 때 다음을 누르면 21 페이지로 이동.


             $paging = '<ul class="pagination justify-content-center">'; // 페이징을 저장할 변수

             //첫 페이지가 아니라면 처음 버튼을 생성
             if($page != 1) {
             	$paging .=
              '<li class="page-item">
                <a class="page-link" href="./index.php?page=1" aria-label="start">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">처음</span>
                </a>
              </li>';
             }
             //첫 섹션이 아니라면 이전 버튼을 생성
             if($currentSection != 1) {
             	$paging .=
              '<li class="page-item">
                <a class="page-link" href="./index.php?page=' . $prevPage . '" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>';
             }

             for($i = $firstPage; $i <= $lastPage; $i++) {
             	if($i == $page) {
             		$paging .= '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
             	}
              else {
             		$paging .= '<li class="page-item"><a class="page-link" href="./index.php?page=' . $i . '">' . $i . '</a></li>';
             	}
             }

             //마지막 섹션이 아니라면 다음 버튼을 생성
             if($currentSection != $allSection) {
             	$paging .=
              '<li class="page-item">
                <a class="page-link" href="./index.php?page=' . $nextPage . '" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">다음</span>
                </a>
              </li>';
             }

             //마지막 페이지가 아니라면 끝 버튼을 생성
             if($page != $allPage) {
             	$paging .=
              '<li class="page-item">
                <a class="page-link" href="./index.php?page=' . $nextPage . '" aria-label="end">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">끝</span>
                </a>
              </li>';
             }
             $paging .= '</ul>';
             /* 페이징 끝 */

             $currentLimit = ($onePage * $page) - $onePage; //몇 번째의 글부터 가져오는지
             $sqlLimit = ' limit ' . $currentLimit . ', ' . $onePage . ';'; //limit sql 구문

             $sql = 'SELECT * from `review` order by review_num desc' . $sqlLimit; //원하는 개수만큼 가져온다. (0번째부터 20번째까지
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
          <label class="btn btn-primary">
            <input type="radio" name="options" id="option1" value="1" onClick="changeImg1()">1층
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

            if (empty($_GET['search_seat_num']) || empty($_GET['search_audi_name']) || empty($_GET['search_floor'])) {
             $sql = "SELECT * FROM `review` ORDER BY `review_num` DESC". $sqlLimit;
           }
           else {
             $sql = "SELECT * FROM `review`
             WHERE `audi_code` = '{$_GET['search_audi_name']}'
             AND `floor` = '{$_GET['search_floor']}'
             AND `seat_num` = '{$_GET['search_seat_num']}'
             ORDER BY `review_num` DESC". $sqlLimit;
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
        <div class="paging">
          <?php echo $paging ?>
        </div>


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
