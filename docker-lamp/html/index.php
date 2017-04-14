<?php
echo "Hello World!";
$con = mysqli_connect("db","wordpress","wordpress","wordpress");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else {
  	 echo "done";
  }
?>