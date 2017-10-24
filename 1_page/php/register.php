<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");
<div class="login-group">

$sql = "INSERT INTO user_info(id, password, name, email) VALUES ([$reg_id],[$reg_password],[$reg_username],[$reg_email])";
$result = mysqli_query($conn, $sql);

  ?>
