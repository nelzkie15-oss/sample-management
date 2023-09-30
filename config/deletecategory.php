<?php 

 require_once "Sample_class.php";

   if(isset($_POST)){
    
     $conn = new sample_class();

      $category_id = $_POST['category_id'];

       $del = $conn->delete_category($category_id);

      if($del == TRUE){
         
         echo "<div class='alert alert-success' role='alert'>Deleted Category Successfully! <script>setTimeout(function(){ location.replace('category'); }, 1000);</script></div>";

      }else{

      	  echo "<div class='alert alert-danger' role='alert'>Deleted Category Failed! <script>setTimeout(function(){ location.replace('category'); }, 1000);</script></div>";

      }


   }

 ?>