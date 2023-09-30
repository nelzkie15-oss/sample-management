<?php

  require_once "Sample_class.php";

  if(ISSET($_POST)){

  	  $conn = new sample_class();

  	    $full_name = htmlentities(strip_tags(stripcslashes(trim($_POST['full_name']))));
        $email = htmlentities(strip_tags(stripcslashes(trim($_POST['email']))));
        $username = htmlentities(strip_tags(stripcslashes(trim($_POST['username']))));
        $password = htmlentities(strip_tags(stripcslashes(trim($_POST['password']))));

        $files = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        $photo ="../uploads/". addslashes($_FILES['photo']['name']);
        $file_size =  $_FILES['photo']['size'];
        move_uploaded_file($_FILES["photo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/uploads/" .   addslashes($_FILES["photo"]["name"]));



        $add = $conn->add_admin($full_name, $email, $username, $password, $photo);
         
         if($add == TRUE){
         	echo "<div class='alert alert-success' role='alert' id='msg'>Added Admin Successfully</div><script> setTimeout(function(){location.replace('admin');}, 1000);</script>";
           }else{
           	echo "<div class='alert alert-danger' role='alert' id='msg'>Added Admin Failed</div><script> setTimeout(function(){location.replace('admin');}, 1000);</script>";
           }


     }

 ?>