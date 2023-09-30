<?php 

 require_once "sample_class.php";

   if(isset($_POST)){
    
     $conn = new sample_class();
     
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];
      $code = $_POST['code'];

  
       $edit = $conn->update_password($password, $code);

      if($edit == TRUE){
         
         echo "<div class='alert alert-success' role='alert'>Update Password Successfully! <script>setTimeout(function(){ location.replace('login'); }, 1000);</script></div>";

      }else{

      	  echo "<div class='alert alert-danger' role='alert'>Update Password Failed! <script>setTimeout(function(){ location.replace('login'); }, 1000);</script></div>";

      }


   }

 ?>