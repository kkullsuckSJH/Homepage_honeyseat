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

    <style>
          .dropbtn {
          background-color: #4CAF50;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
      }

      .dropdown {
          position: relative;
          display: inline-block;
      }

      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
      }

      .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
      }

      .dropdown-content a:hover {background-color: #f1f1f1}

      .dropdown:hover .dropdown-content {
          display: block;
      }

      .dropdown:hover .dropbtn {
          background-color: #3e8e41;
      }
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

      <br>

      <!-- Portfolio Section -->
      <h2 style="margin-bottom:30px;">공연장, 좌석 확인</h2>
      <br>
      <!-- /.row -->
      <!-- Features Section -->
      <div class="container">
        <!--좌석배치도-->
        <script>
        /*var img = new Array("1st_floor.PNG", "2nd_floor.PNG", "3rd floor.PNG");
        var i;
        i = 0;
        function changeImg(){
          document.floor_img.src = img[i++];
        }*/
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

      <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn" style="width: 200px;padding-top: 7px;padding-bottom: 7px;">공연장</button>
        <div id="myDropdown" class="dropdown-content"style="width: 200px; height: 200px;">
          <a href="#home">세종문화회관 - 세종대극장</a>
          <a href="#about">충무아트센터 - 대극장</a>
          <a href="#contact">예술의 전당 - 자유소극장</a>
          <a href="#contact">샤롯데씨어터</a>
          <a href="#contact">국립극장 - 해오름극장</a>
        </div>
      </div>

      <script>
      /* When the user clicks on the button,
      toggle between hiding and showing the dropdown content */
      function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
      }

      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
      </script>


        <!-- <div class="row" style="margin-top:30px;">
          <div class="col-sm-3">
            <center>
              <div class="btn-group">
                <center>
                  <input type="button" class="btn btn-primary" value="1" onClick="changeImg1()">
                  <input type="button" class="btn btn-primary" value="2" onClick="changeImg2()">
                  <input type="button" class="btn btn-primary" value="3" onClick="changeImg3()">
                </center>
              </div>
            </center>
          </div>
        </div> -->


        <!-- <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
          <button type="button" class="btn btn-success">공연장 선택</button>
          <div class="btn-group" role="group">
            <button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop2" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
              <a class="dropdown-item" href="#">세종문화회관 - 세종대극장</a>
              <a class="dropdown-item" href="#">충무아트센터 - 대극장</a>
              <a class="dropdown-item" href="#">예술의 전당 - 자유소극장</a>
              <a class="dropdown-item" href="#">샤롯데씨어터</a>
              <a class="dropdown-item" href="#">국립극장 - 해오름극장</a>
            </div>
          </div>
        </div> -->

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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


      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn btn-success">공연장 선택</button>
        <div class="btn-group" role="group">
          <button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop2" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
            <a class="dropdown-item" href="#">세종문화회관 - 세종대극장</a>
            <a class="dropdown-item" href="#">충무아트센터 - 대극장</a>
            <a class="dropdown-item" href="#">예술의 전당 - 자유소극장</a>
            <a class="dropdown-item" href="#">샤롯데씨어터</a>
            <a class="dropdown-item" href="#">국립극장 - 해오름극장</a>
          </div>
        </div>
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary active">
          <input type="radio" name="options" id="option1" checked="">1층
        </label>
        <label class="btn btn-primary">
          <input type="radio" name="options" id="option2">2층
        </label>
        <label class="btn btn-primary">
          <input type="radio" name="options" id="option3">3층
        </label>
      </div>

      <div class="col-sm-3 col-sm-offset-7">
        <div id="imaginary_container">
          <div class="input-group stylish-input-group">
            <input type="text" class="form-control"  placeholder="ex) A001" >
            <span class="input-group-addon">
              <button type="submit"> search </button>
            </span>
          </div>
        </div>
      </div>

      <br><br>

      <!-- <div class="col-sm-3 col-sm-offset-7">
        <div id="imaginary_container">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary">
              <input type="radio" name="selectFloor" id="1st"> 1충
            </label>
            <label class="btn btn-primary active">
              <input type="radio" name="selectFloor" id="2nd"> 2층
            </label>
            <label class="btn btn-primary">
              <input type="radio" name="selectFloor" id="3rd"> 3층
            </label>
          </div>
          <div class="input-group stylish-input-group">
            <input type="text" class="form-control"  placeholder="ex) A001" >
            <span class="input-group-addon">
              <button type="submit"> search </button>
            </span>
          </div>
        </div>
      </div> -->

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
              $sql = "SELECT * FROM `review` ORDER BY `review_num` DESC;";
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

                  # select audi_name ..
                $sql = "SELECT `audi_name` FROM `audi` WHERE `audi_code` = '{$audi_code}';";
                $result = mysqli_query($conn, $sql);
                $audi_name_row = mysqli_fetch_assoc($result);
                $audi_name = $audi_name_row['audi_name'];

                # select audi_name ..
                // $sql = "SELECT `star` FROM `audi` WHERE `audi_code` = '{$audi_code}';";
                // $result = mysqli_query($conn, $sql);
                // $audi_name_array = mysqli_fetch_array($result);
                // $audi_name = $seat_code_array['audi_name'];
                //
                $floor = $row['floor']."층";
             ?>
            <tr>
              <td><?php echo $row['review_num'];?></td>
              <td><?php echo $audi_name;?></td>
              <td><?php echo $floor;?></td>
              <td><?php echo $seat_num;?></td>
              <td><?php echo $star;?></td>
              <td><?php echo $row['title'];?></td>
              <td><?php echo $row['user_id'];?></td>
              <td><?php echo $row['date'];?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
        <hr>

        <div class="row mb-4">
          <div class="col-md-20"></div>
          <div class="col-md-10">
            <a class="btn btn-default"></a>
            <div class="jb-center">
              <div class="text-center">
                <ul class="pagination">
                  <li><a href="#">1&nbsp;</a></li>
                  <li><a href="#">2&nbsp;</a></li>
                  <li><a href="#">3</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      <script src="js/jquery-3.1.1.js"></script>

    </div>

      <!-- 바로가기 버튼 -->
      <div class="row mb-4">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/4_page/index.php">후기 작성하러 바로가기</a>
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
