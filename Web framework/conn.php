<?php
session_start();

// initializing variables
$name=" ";

$errors = array(); 

// connect to the database
$db = mysqli_connect('sql12.freemysqlhosting.net', 'sql12345194', 'pa4Y2g5Dzw', 'sql12345194');


//check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();	  
}
 ?>