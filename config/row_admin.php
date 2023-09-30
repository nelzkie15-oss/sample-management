<?php 

 require_once "sample_class.php";

   if(isset($_POST['admin_id'])){
    
     $conn = new sample_class();
     
      $admin_id = $_POST['admin_id'];

  
       $conn->row_admin($admin_id);



   }

 ?>