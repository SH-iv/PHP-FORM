<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="test1";

  $con = mysqli_connect($servername,$username,$password,$dbname);

  if($con)
  {
    echo "SUCCESSFULL CONNECTION";
  } 
  else
  {
    echo "CONNECTION FAILED";
  }
?>
