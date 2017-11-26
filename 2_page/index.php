<?php
    session_start();
    $is_logged = $_SESSION['is_logged'];
    if($is_logged=='YES') {
      $button = '<a href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/1_page/logout.php" class="btn btn-primary">로그아웃</a>';
    }
    else {
      $button = ' ';
    }
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
            <!-- <li class="nav-item">
              <a class="nav-link" href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/1_page/logout.php">로그아웃</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">공연장 정보
        <!--<small>Secondary Text</small>-->
      </h1>

      <!-- Project One 세종문화회관 -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/sejongbig.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h2>세종문화회관</h2>
          <h4>세종대극장</h4>
          <p>1,2,3층에 걸쳐 3,022석의 객석을 갖추고 있습니다.<br>
          1,2층 객석 의자와 3층 벽면에 부착된 유일의 LCD모니터를 통해 공연자막과 동영상 서비스를 제공하고 있습니다.
          특히 최신 음향 장치를 설비하여 객석 구석구석까지 소리가 잘 전달되는 탁월한 음향 수준을 구현했습니다.</p>
          <a class="btn btn-primary" href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/3_page/index.php">View Auditorium</a>
        </div>
      </div>
      <!-- /.row -->

      <br>
      <hr>
      <br>

      <!-- Project Two 충무아트센터-->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/tungbig.jpg" alt style="width: 635px; height: 297.650px;">
          </a>
        </div>
        <div class="col-md-5">
          <h2>충무아트센터</h2>
          <h4>대극장</h4>
          <p>1,2,3층에 걸쳐 1,255석의 객석을 갖추고 있습니다.<br>
          1층 690석과 2층 285석, 3층 280석을 갖춘 대극장은 가변형 음향판과 다채로운 무대막 전환이 용이한 38여개의 배턴, 그리고 최신의 음향과 조명 시스템을 갖추어 클래식 뿐만 아니라 다양한 장르의 공연을 소화할 수 있습니다. 또한, 효율적인 좌석배치를 해 사각지대를 없앰으로써 어느 자리에서나 최적의 관람 환경을 제공합니다.</p>
          <a class="btn btn-primary" href="#">View Auditorium</a>
        </div>
      </div>
      <!-- /.row -->

      <br>
      <hr>
      <br>

      <!-- Project Three 예술의 전당-->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/yaesmall.jpg" alt style="width: 635px; height: 297.650px;">
          </a>
        </div>
        <div class="col-md-5">
          <h2>예술의 전당</h2>
          <h4>자유소극장</h4>
          <p>1,2,3층에 걸쳐 241석의 객석을 갖추고 있습니다.<br>
            2,3층 좌석은 좌석번호와 관계없이 공연시작 30분 전 선착순 입장하는 자유석입니다. 자유소극장 1층 객석 통로가 무대 바로 앞에 위치하고 있어 공연 시작 후 1층으로 입장이 불가합니다. 2,3층 비지정석의 일반판매 가능석은 75석이며 작품의 무대설치(셋트)에 따라 사전승인 후 유동적으로 추가오픈이 가능합니다.</p>
          <a class="btn btn-primary" href="#">View Auditorium</a>
        </div>
      </div>
      <!-- /.row -->

      <br>
      <hr>
      <br>

      <!-- Project Four 샤롯데씨어터-->
      <div class="row">

        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/sharlotte.jpg" alt style="width: 635px; height: 297.650px;">
          </a>
        </div>
        <div class="col-md-5">
          <h2>샤롯데씨어터</h2>
          <p>대한민국 최초이자 최고의 뮤지컬 전용 극장 샤롯데씨어터는 총 1,241석(1층 725석, 2층 516석)의 객석을 보유하고 있습니다.<br>
            가장 큰 자랑거리는 바로 무대에서 객석까지의 간격이 국내에서 가장 가깝다는 것입니다. 무대에서부터 1층 최후 열 좌석까지 단 23m, 2층 최후 열 좌석까지는 28m로 그 어느 위치에 앉아도 무대의 생생함을 그대로 느낄 수 있습니다.</p>
          <a class="btn btn-primary" href="#">View Auditorium</a>
        </div>
      </div>
      <!-- /.row -->

      <br>
      <hr>
      <br>

      <!-- Project FIVE 국립극장-->
      <div class="row">

        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/nationalsun.jpg" alt style="width: 635px; height: 297.650px;">
          </a>
        </div>
        <div class="col-md-5">
          <h2>국립극장</h2>
          <h3>해오름극장</h3>
          <p>대한민국을 대표하는 대극장으로, 모든 장르의 공연이 가능한 종합 무대공간입니다.<br>
            1,563석(휠체어석 16석 포함)의 객석과 6석의 대기석을 갖추고 있으며 자유로운 공간 활용이 가능한 무대, 최첨단 조명 설비와 음향 시스템이 마련되어 있습니다. 특히 국내 극장 가운데 객석 간격이 가장 넓어 보다 쾌적한 공연 관람 환경을 제공하고 있습니다.</p>
          <a class="btn btn-primary" href="#">View Auditorium</a>
        </div>
      </div>
      <!-- /.row -->

      <br>
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
        <!-- <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li> -->
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

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
