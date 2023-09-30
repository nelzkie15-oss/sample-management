<?php
  error_reporting(0);
  require_once "Sample_class.php";

  if(ISSET($_POST)){

  	  $conn = new sample_class();

  	    $full_name = htmlentities(strip_tags(stripcslashes(trim($_POST['full_name']))));
        $email = htmlentities(strip_tags(stripcslashes(trim($_POST['email']))));
        $username = htmlentities(strip_tags(stripcslashes(trim($_POST['username']))));
        $default = htmlentities(strip_tags(stripcslashes($_POST['default_img'])));

        $pic = htmlentities(strip_tags(stripcslashes(trim($_POST['photo']))));

        if(!empty($pic)){
           
           $photo = $default;

        }else{

            $files = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
            $photo ="../uploads/". addslashes($_FILES['photo']['name']);
            $file_size =  $_FILES['photo']['size'];
           move_uploaded_file($_FILES["photo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/uploads/" .   addslashes($_FILES["photo"]["name"]));
         }

        $admin_id = htmlentities(strip_tags(stripcslashes(trim($_POST['admin_id']))));

        $edit = $conn->edit_admin($full_name, $email, $username, $photo, $admin_id);
     
         if($edit == TRUE){
         	echo "<div class='alert alert-success' role='alert' id='msg'>Updated Admin Successfully</div><script> setTimeout(function(){location.replace('admin');}, 1000);</script>";
           }else{
           	echo "<div class='alert alert-danger' role='alert' id='msg'>Updated Admin Failed</div><script> setTimeout(function(){location.replace('admin');}, 1000);</script>";
           }
        
     }

 ?>