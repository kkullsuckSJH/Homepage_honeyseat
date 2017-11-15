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

    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading -->
      <h1 class="my-4">후기 게시판
        <!--<small>Secondary Text</small>-->
      </h1>


      <!--설문지 form-->
      <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">이용한 공연장, 좌석에 대한 후기를 작성해주세요. <?php echo $message;
                   ?></h2>
                </div>
                <div class="card-block">

                    <form class="form-horizontal" action="write.php" method="post">
                      <div class="form-group row">
                        <label class="col-sm-2 form-control-label">공연장 이름</label>
                        <div class="col-sm-10 select">
                          <select name="audi_name" class="form-control">
                            <option value="1">세종문화회관 - 세종대극장</option>
                            <option value="2">충무아트센터 - 대극장</option>
                            <option value="3">예술의 전당 - 자유소극장</option>
                            <option value="4">샤롯데씨어터</option>
                            <option value="5">국립극장 - 해오름극장</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 form-control-label">층</label>
                        <div class="col-sm-10 select">
                          <select name="floor" class="form-control">
                            <option value="1">1층</option>
                            <option value="2">2층</option>
                            <option value="3">3층</option>
                          </select>
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-2 form-control-label">좌석 번호</label>
                        <div class="col-sm-10">
                          <input placeholder="ex) A10" id="seat_num" name="seat_num" class="form-control" type="text">
                        </div>
                      </div>

                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">한줄평</label>
                      <div class="col-sm-10">
                        <span class="help-block-none">한줄평을 40자 이내로 적어주세요.</span>
                        <textarea class="form-control" rows="1" id="title" name="title"></textarea>
                      </div>
                    </div>

                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">본문</label>
                      <div class="col-sm-10">
                        <span class="help-block-none">공연장과 자석에 대한 의견을 300자 이내로 자유롭게 적어주세요.</span>
                        <textarea class="form-control" rows="5" id="content" name="content"></textarea>
                      </div>
                    </div>

                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">평가</label>
                      <div class="col-sm-10">
                        <span class="help-block-none">1. (무대와의 거리) 아티스트 표정이 잘 보이시나요?</span>
                          <div class="form-group">
                              <select name="distance_score" multiple="" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </div>
                          </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-2 form-control-label"></label>
                        <div class="col-sm-10">
                          <span class="help-block-none">2. (가격) 좌석이 가격대비 만족하셨나요?</span>
                            <div class="form-group">
                                <select name="cost_score" multiple="" class="form-control">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                </select>
                              </div>
                            </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-2 form-control-label"></label>
                          <div class="col-sm-10">
                            <span class="help-block-none">3. (사운드) 소리가 균형있고, 풍부하게 들렸나요?</span>
                              <div class="form-group">
                                  <select name="sound_score" multiple="" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                  </select>
                                </div>
                              </div>
                          </div>
                          <P>
                            <input type="submit" name="" class="btn btn-primary" value="저장하기">
                          </P>
                        </form>
                        </div>
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
