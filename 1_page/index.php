<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HONEYSEAT</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- login & registration & forgot pw CSS
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
-->
    <!--<link href='css/login_style.css' rel='stylesheet' type='text/css'>-->

    <!--korean font http://moolgogiheart.tistory.com/89-->
    <link href="http://fonts.googleapis.com/earlyaccess/jejugothic.css" rel="stylesheet">
  </head>

  <body>

    <!-- Header -->
    <header class="header" id="top">
      <!--white background layer-->
      <div class="text-vertical-center">
        <!--<img class="main-logo" src="img/logo.png">-->
        <br>

        <!--<div class="bg-layer">-->
        <h1>HONEY SEAT</h1>
        <div class="subtitle">3D 시뮬레이션을 이용한 공연 좌석 정보 확인 웹 어플리케이션</div>
        <br>

        <!-- LOGIN FORM -->
        <div class="text-center" style="padding:50px 0">
          <div class="logo">로그인</div>
          <!-- Main Form -->
          <div class="login-form-1">
            <form method='post' action='login.php' id="login-form" class="text-left">
              <div class="login-form-main-message"></div>
        			<div class="main-login-form">
        				<div class="login-group">
        					<div class="form-group">
        						<label for="lg_username" class="sr-only">UserID</label>
        						<input type="text" class="form-control" id="lg_id" name="lg_id" placeholder="아이디">
        					</div>
        					<div class="form-group">
        						<label for="lg_password" class="sr-only">Password</label>
        						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="비밀번호">
        					</div>
        				</div>
        				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
        			</div>
        			<div class="etc-login-form">
        				<p>새회원이신가요? <a href="register.html">회원가입하기</a></p>
        			</div>
        		</form>
        	</div>
        	<!-- end:Main Form -->
        </div>

        <br>
        <a href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/2_page/index.php" class="btn btn-dark btn-lg js-scroll-trigger">공연장 바로가기</a>

    </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
      <div class="container text-center">
        <p class="lead">
          HONEY SEAT 홈페이지를 통해서 원하는 공연장의 해당 좌석에 대한 무대시각선을 3D Simulation을 통해 <br> 360도로 확인할 수 있습니다. 후기 게시판을 통해 각 좌석에 대한 거리, 가격, 사운드 평가를 볼 수 있습니다.
          </p>
      </div>
      <!-- /.container -->
    </section>

    <!-- icon : http://fontawesome.io/icons/-->
    <!-- Services -->
    <section id="services" class="services bg-primary text-white">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-10 mx-auto">
            <h2>Our Services</h2>
            <hr class="small">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-eye fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>3D Simulation</strong>
                  </h4>
                  <p>3D 시뮬레이션을 통해 특정 좌석의 무대 시야를 확인할 수 있습니다.</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-bar-chart fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>좌석 후기</strong>
                  </h4>
                  <p>5대 공연장의 각 좌석마다 후기를 남기고 다른 회원의 의견을 조회할 수 있습니다.</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-thumbs-o-up fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>좌석 추천</strong>
                  </h4>
                  <p>사용자 선호도 중심으로 좌석을 추천해드립니다.</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-users fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>1st commnity</strong>
                  </h4>
                  <p>국내 최초로 구축된 공연장 관련 커뮤니티입니다.</p>
                </div>
              </div>
            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
      <div class="text-vertical-center">
        <h1>3D Simulation</h1>
      </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h2>Our Work</h2>
            <hr class="small">
            <div class="row">
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="img/portfolio-1.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="img/portfolio-2.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="img/portfolio-3.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="img/portfolio-4.jpg">
                  </a>
                </div>
              </div>
            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary text-white">
      <div class="container text-center">
      </div>
    </aside>

    <!-- Map -->
    <!--
    <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
      <br/>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
    </section>
    -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h4>
              <strong>HONEY SEAT</strong>
            </h4>
            <p>
              <br>한국외국어대학교 컴퓨터공학과
              <strong><br>201402629 이지현
              <br>201402775 임수진</strong>
            </p>
            <ul class="list-unstyled">
              <li>
                <i class="fa fa-phone fa-fw"></i>
                010-3324-3885
                <br>010-8555-9427</li>
              <li>
                <i class="fa fa-envelope-o fa-fw"></i>
                <a href="mailto:jihyoun14@daum.net">jihyoun14@daum.net
                <br>
                <a href="mailto:sjlim333@naver.com">sjlim333@naver.com</a>
              </li>
            </ul>
            <br>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook fa-fw fa-3x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter fa-fw fa-3x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble fa-fw fa-3x"></i>
                </a>
              </li>
            </ul>
            <hr class="small">
            <p class="text-muted">Copyright &copy; HONEY SEAT 2017</p>
          </div>
        </div>
      </div>
      <a id="to-top" href="#top" class="btn btn-dark btn-lg js-scroll-trigger">
        <i class="fa fa-chevron-up fa-fw fa-1x"></i>
      </a>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.js"></script>


    <script src="js/login.js"></script>

  </body>

</html>
