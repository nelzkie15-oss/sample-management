<?php 

 require_once "Sample_class.php";

   if(isset($_POST['admin_id'])){
    
     $conn = new sample_class();
     
      $admin_id = $_POST['admin_id'];

  
       $conn->row_admin($admin_id);



   }

 ?>