<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "Shop";

    $con = mysqli_connect($host, $username, $password, $db_name); //เชื่อมต่อกับฐานข้อมูล

    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>