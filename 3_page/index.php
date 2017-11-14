<?php
  session_start();
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
                  <a class="nav-link" href="http://sjlim333.cafe24.com/Homepage_honeyseat_final/4_page/index.php">후기 작성</a>
                </li>
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
      <!-- /.row -->

      <hr>
      <!-- Portfolio Section -->
      <h2 style="margin-bottom:30px;">좌석 정보 & 후기</h2>
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

        <div class="row" style="margin-top:30px;">
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

          <div class="col-sm-3 col-sm-offset-7">
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
          </div>

        </div>
      </div>

<br><br><br>


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
        <hr/>
          <a href="#" class="btn btn-primary">후기 작성하기</a>

        <a class="btn btn-default"></a>
        <div class="jb-center">
          <div class="text-center">
            <ul class="pagination">
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div>
        </div>

      <script src="js/jquery-3.1.1.js">

      </script>


      <br>
      <br>
      <h2>[좌석번호]</h2>
      <p>The Modern Business template by Start Bootstrap includes:</p>
          <ul>
            <li>
              <strong>Bootstrap v4</strong>
            </li>
            <li>jQuery</li>
            <li>Font Awesome</li>
            <li>Working contact form with validation</li>
            <li>Unstyled page elements for easy customization</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        <!-- /.row -->
        <hr>

    </div>


      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
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
