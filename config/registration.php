<?php 

 require_once "Sample_class.php";

   if(isset($_POST)){
    
     $conn = new sample_class();
     
      $full_name = $_POST['full_name'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $password = $_POST['password'];
    
       $add = $conn->add_user($full_name, $address, $email, $password);

      if($add == TRUE){
         
         echo "<div class='alert alert-success' role='alert'>Register User Successfully! <script>setTimeout(function(){ location.replace('index.php'); }, 1000);</script></div>";

      }else{

      	  echo "<div class='alert alert-danger' role='alert'>Register User Failed! <script>setTimeout(function(){ location.replace('index.php'); }, 1000);</script></div>";

      }


   }

 ?>