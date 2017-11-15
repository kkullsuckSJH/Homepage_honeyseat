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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>별점</title>
    <style>
    .star-input>.input,
    .star-input>.input>label:hover,
    .star-input>.input>input:focus+label,
    .star-input>.input>input:checked+label{display: inline-block;vertical-align:middle;background:url('img/grade_img.png')no-repeat;}
    .star-input{display:inline-block; white-space:nowrap;width:225px;height:40px;padding:25px;line-height:30px;}
    .star-input>.input{display:inline-block;width:150px;background-size:150px;height:28px;white-space:nowrap;overflow:hidden;position: relative;}
    .star-input>.input>input{position:absolute;width:1px;height:1px;opacity:0;}
    star-input>.input.focus{outline:1px dotted #ddd;}
    .star-input>.input>label{width:30px;height:0;padding:28px 0 0 0;overflow: hidden;float:left;cursor: pointer;position: absolute;top: 0;left: 0;}
    .star-input>.input>label:hover,
    .star-input>.input>input:focus+label,
    .star-input>.input>input:checked+label{background-size: 150px;background-position: 0 bottom;}
    .star-input>.input>label:hover~label{background-image: none;}
    .star-input>.input>label[for="p1"]{width:30px;z-index:5;}
    .star-input>.input>label[for="p2"]{width:60px;z-index:4;}
    .star-input>.input>label[for="p3"]{width:90px;z-index:3;}
    .star-input>.input>label[for="p4"]{width:120px;z-index:2;}
    .star-input>.input>label[for="p5"]{width:150px;z-index:1;}
    .star-input>output{display:inline-block;width:60px; font-size:18px;text-align:right; vertical-align:middle;}
    </style>

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

      </div>
    </nav>

    <div class="container">
      <div class="template">
        <div class="template-wrap clear">
          <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="600px" width="960px"></canvas>
          <br>
        </div>
        <script type='text/javascript'>
      var Module = {
        TOTAL_MEMORY: 268435456,
        errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
        compatibilitycheck: null,
        backgroundColor: "#222C36",
        splashStyle: "Light",
        dataUrl: "Release/좌석.data",
        codeUrl: "Release/좌석.js",
        asmUrl: "Release/좌석.asm.js",
        memUrl: "Release/좌석.mem",
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
          <p class="lead">각 좌석도에서 좌석 버튼을 클릭하시면 해당 좌석에서 촬영한 무대시각선을 보실 수 있습니다. <br>
           촬영 시야(VIEW)이기 때문에 실제 눈으로 보는 것과는 약간의 차이가 있을 수 있습니다.
            </p>
        </div>
      </section>

      <hr>
      <br>

      <h2 class="my-4">추천 좌석</h2>
      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Top 1</h4>
            <div class="card-body">

              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>

            <!--별점-->
            <div class="card-footer">
              <span class="star-input">
              	<span class="input">
                  	<input type="radio" name="star-input" value="1" id="p1">
                  	<label for="p1">1</label>
                  	<input type="radio" name="star-input" value="2" id="p2">
                  	<label for="p2">2</label>
                  	<input type="radio" name="star-input" value="3" id="p3">
                  	<label for="p3">3</label>
                  	<input type="radio" name="star-input" value="4" id="p4">
                  	<label for="p4">4</label>
                  	<input type="radio" name="star-input" value="5" id="p5">
                  	<label for="p5">5</label>
                	</span>
                	<output for="star-input"><b>0</b>점</output>
              </span>
              <script src="js/jquery-1.11.3.min.js"></script>
              <script src="js/star.js"></script>
              <br>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Top 2</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">view More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Top 3</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">view More</a>
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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
