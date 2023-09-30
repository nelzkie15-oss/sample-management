<?php 

 require_once "Sample_class.php";

   if(isset($_POST)){
    
     $conn = new sample_class();
     
      $category = $_POST['category'];
      $category_id = $_POST['category_id'];

  
       $edit = $conn->edit_category($category, $category_id);

      if($edit == TRUE){
         
         echo "<div class='alert alert-success' role='alert'>Uppdated Category Successfully! <script>setTimeout(function(){ location.replace('category'); }, 1000);</script></div>";

      }else{

      	  echo "<div class='alert alert-danger' role='alert'>Uppdated Category Failed! <script>setTimeout(function(){ location.replace('category'); }, 1000);</script></div>";

      }


   }

 ?>