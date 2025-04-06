<?php
  // $hostname = "localhost";
  // $username = "root";
  // $password = "";
  // $dbname = "chatapp";


  $hostname = "localhost";
  $username = "appsnetn_chatme";
  $password = "Gah5R4qZgK5VUd7gLVr8";
  $dbname = "appsnetn_chatme";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
