
 
 <?php include 'header.php';
 ?>
    
   <div class = "container">
 <form action = "creat-page.php" method = "post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Page Title</label>
    <input type="name" class="form-control" id="page-title" placeholder="Page Title" name = "page-title">
  </div>
  <div class="form-group">
    <label for="page-desc">Page Description</label>
    <textarea class="form-control"  rows = "3" id="page-desc" name = "page-desc">
     
    </textarea>
  </div>
  
  <input class="btn btn-primary" type="submit" value="Submit">
   
</form>
   
   </div>

<?php include 'footer.php';
 ?>
    
    
    
    
    
    
    
   