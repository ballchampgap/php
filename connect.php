<?php

    $host = "us-cdbr-east-05.cleardb.net";
    $username = "b628b94fa3a955";
    $password = "cd625c80";
    $db_name = "heroku_edaba2f5ebed181";

    $con = mysqli_connect($host, $username, $password, $db_name); //เชื่อมต่อกับฐานข้อมูล

    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>