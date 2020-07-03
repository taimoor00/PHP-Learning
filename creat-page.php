<?php 

include 'header.php';
 
include 'Connection.php';

$pagetitle = $_POST['page-title'];
$pagedesc = $_POST['page-desc'];

$insert = "INSERT INTO pages(page_title, page_description)
VALUES('$pagetitle', '$pagedesc')";

if(mysqli_query($connect, $insert)){
  echo "<br><strong>Congratulation! Page Created</strong>";
 } else {
   echo "There is some error, please solve it";
 }


?>
<?php include 'footer.php';?>