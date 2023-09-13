<?php 

 require_once "sample_class.php";

   if(isset($_POST['category_id'])){
    
     $conn = new sample_class();
     
      $category_id = $_POST['category_id'];

  
       $conn->row_category($category_id);



   }

 ?>