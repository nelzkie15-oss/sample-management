<?php 

 require_once "Sample_class.php";

   if(isset($_POST)){
    
     $conn = new sample_class();

      $admin_id = $_POST['admin_id'];

       $del = $conn->delete_admin($admin_id);

      if($del == TRUE){
         
         echo "<div class='alert alert-success' role='alert'>Deleted Admin Successfully! <script>setTimeout(function(){ location.replace('admin'); }, 1000);</script></div>";

      }else{

      	  echo "<div class='alert alert-danger' role='alert'>Deleted Admin Failed! <script>setTimeout(function(){ location.replace('admin'); }, 1000);</script></div>";

      }


   }

 ?>