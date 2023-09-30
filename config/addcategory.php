<?php 

 require_once "Sample_class.php";

   if(isset($_POST)){
    
     $conn = new sample_class();
     
      $category = $_POST['category'];

  
       $add = $conn->add_category($category);

      if($add == TRUE){
         
         echo "<div class='alert alert-success' role='alert'>Add Category Successfully! <script>setTimeout(function(){ location.replace('category'); }, 1000);</script></div>";

      }else{

      	  echo "<div class='alert alert-danger' role='alert'>Add Category Failed! <script>setTimeout(function(){ location.replace('category'); }, 1000);</script></div>";

      }


   }

 ?>