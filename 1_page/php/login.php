<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");


extract($_POST);


$q = "SELECT * FROM ap_member WHERE id='$user_id'";
$result = $mysqli->query( $q);




?>
