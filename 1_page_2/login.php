<?php

  $conn = mysqli_connect("localhost", "root", "jih32952", "honeyseat", "3307");
  if (!$conn) {
    echo "connect error";
  }
  mysqli_select_db($conn, "honeyseat");


  $user_id = mysqli_real_escape_string($conn,$_POST['lg_id']);
  $user_pw = mysqli_real_escape_string($conn,$_POST['lg_password']);


    $sql = "SELECT * FROM `user` WHERE `user_id` = '{$user_id}';";
    $result = mysqli_query($conn, $sql);


    if ($result->num_rows > 0) {
      // $row = mysqli_fetch_assoc($result);
      // echo "{$row}";
      echo "right";
      // $user_id = $row['id'];
    }
    else {
      echo "wrong";
    }
    // else {
    //   $sql = "INSERT INTO user (id, name, password) VALUES (NULL, '{$author}', '0000');";
    //   $result = mysqli_query($conn, $sql);
    //   $user_id = mysqli_insert_id($conn);
    //   }




      // if($_POST['lg_id'] === 'jih' or $_POST['lg_password'] === ''){
      //     echo 'right';
      // } else {
      //     echo 'wrong';
      //   }

    mysqli_query($conn, $sql);
    header('Location: index.html');

    mysqli_close($conn);
?>
<?php
 #require("config/config.php");
 // $config = array(
 //   "host"=>"localhost",
 //   "duser"=>"root",
 //   "dpw"=>"jih32952",
 //   "dname"=>"honeyseat",
 //   "portNumber"=>"3307"
 // );
 //
 // #require("lib/db.php");
 // function db_init($host, $duser, $dpw, $dname, $portNumber){
 //   $conn = mysqli_connect($host, $duser, $dpw, $dname, $portNumber);
 //   mysqli_select_db($conn, $dname);
 //   return $conn;
 // }
 //
 // $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"], $config["portNumber"]);
 // $sql = "SELECT * FROM topic";
 // $result = mysqli_query($conn, $sql);
 // */
  ?>
