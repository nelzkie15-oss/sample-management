<?php 

 require_once "sample_class.php";

   if(isset($_POST)){
    
     $conn = new sample_class();
     
      $email = $_POST['email'];
      $password = $_POST['password'];
    
      $conn->login_user($email, $password);



   }

 ?>