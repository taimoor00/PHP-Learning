<?php

//Table Creation

include 'Connection.php';

$pages = "CREATE TABLE IF NOT EXISTS pages(
 page_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 page_title VARCHAR(30) NOT NULL,
 page_description TEXT
)";

if (mysqli_query($connect, $pages)){
  echo " Congratulation Table Created";
 } else {
  echo " Table can't be created";
 }
 
?>