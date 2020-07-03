<?php

include 'header.php';
include 'Connection.php';

$allPages = "SELECT * FROM pages";

$result = mysqli_query($connect, $allPages);

?>
<div class = "container">
<table class="table table-bordered">
<thead>
    <tr>
      <th scope="row">Page ID</th>
      <th scope="row">Page Title</th>
      <th scope="row">Page Description</th>
         <th scope="row">ACTION</th>
    </tr>
</thead>
  <tbody>
 
    
    

<?php
if(mysqli_num_rows($result) >0){

while($rows = mysqli_fetch_assoc($result)){

?>
   <tr>
      <th scope="row"><?php echo $rows["page_id"] ?></th>
      <td><?php echo $rows["page_title"] ?></td>
      <td><?php echo $rows["page_description"] ?></td>
      <td><button class = "btn btn-primary">Edit</button>
             <button class = "btn btn-danger">Delete</button></td>
 
    </tr>

<?php
}
} else {
        echo 'error ';
}
?>
 </thead>
</table>
</div>
<?php include 'header.php';?>
