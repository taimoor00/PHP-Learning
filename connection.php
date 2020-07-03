<?php

$db_database = "phpclass";
$db_user = "root";
$db_pass = "root";
$db_host = "localhost";

//Creat Connection 

$connect = new mysqli($db_host, $db_user, $db_pass, $db_database);

//Check Connection

if ($connect->connect_error){ echo "Connection Error";} 
        else {echo "Congratulation! Database Connected";}


  
  
?>


  