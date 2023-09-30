<?php

  require 'connection.php';

  class sample_class {

      private $server = DB_HOST1;
      private $user   = DB_USER1;
      private $pass   = DB_PASS1;
      private $db     = DB_NAME1;
      private $pdo; 

      public function __construct()
      {
           $this->db_connect();
      }

   public function db_connect()//connection OOP PDO
        {
        	$this->pdo = null;
          try{
              $this->pdo = new PDO("mysql:host=".$this->server.";dbname=".$this->db, $this->user, $this->pass);
             	$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              if(!$this->pdo){
              	return false;
              }	
          }catch(PDOException $e){
             echo $e->getMessage();
          }
        }

    // for registration

    public function add_user($full_name, $address, $email, $password){

        $role = "User";
        $hashpass = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->pdo->prepare("INSERT INTO `tbl_users` (`full_name`, `address`, `email`, `password`, `role`) VALUES (?, ?, ?, ?, ?)");
        $sql = $stmt->execute([$full_name, $address, $email, $hashpass, $role]);
       
        if($sql == true){
           return true;
        }else{
           return false;

        }

    }

   // end for registration

    // get session userid

    public function fetch_user($getusersessionID){

          $query = $this->pdo->prepare("SELECT * FROM `tbl_users` WHERE `user_id` = ?");
          $query->execute(array($getusersessionID));
          return $query->fetchAll();

    }

    // end get session userid

    // get session for admin

    public function fetch_admin($getusersessionID){

       $query = $this->pdo->prepare("SELECT * FROM `tbl_users` WHERE `user_id` = ?");
          $query->execute(array($getusersessionID));
          return $query->fetchAll();

    }

    //end get session for admin

    // for login

    public function login_user($email, $password){
     
        session_start();

        $stmt1 = $this->pdo->prepare("SELECT user_id, password FROM tbl_users WHERE email = :uemail AND role = 'Admin'");
        $stmt1->bindParam(':uemail', $email);
        $stmt1->execute();
        $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);


        $stmt = $this->pdo->prepare("SELECT user_id, password FROM tbl_users WHERE email = :uemail AND role = 'User'");
        $stmt->bindParam(':uemail', $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);


           if($stmt1->rowCount() > 0){

                      if (password_verify($password, $row1['password'])) {
                              $_SESSION['user_id'] = htmlentities($row1['user_id']);
                               $_SESSION['logged_in'] = true;
                               echo '1';

                    }else {
                         echo "<div class='alert alert-danger'>Invalid password!</div>";
                    }

             }else if($stmt->rowCount() > 0){
                        // Verify the password
                        if (password_verify($password, $row['password'])) {
                  
                           $_SESSION['user_id2'] = htmlentities($row['user_id']);
                           $_SESSION['logged_in2'] = true;
                           echo '2';

                        }else {
                         echo "<div class='alert alert-danger'>Invalid password!</div>";
                     }          
                
                exit();

              }else{

            echo "<div class='alert alert-warning' role='alert'>Incorrect Email or Password</div>";
        }

    


    }

    // end for login

    // add category
   
   public function add_category($category){
        
        $stmt = $this->pdo->prepare("INSERT INTO `tbl_category` (`category`)VALUES(?)");
        $true = $stmt->execute([$category]);
        if($true == true){
           return true;
        }else{
            return false;
        }

   }

    // end add category


   // get all category

   public function getallcategory(){

    $query = $this->pdo->prepare("SELECT * FROM `tbl_category` ORDER BY category_id  DESC");
          $query->execute();
          return $query->fetchAll();

   }

   // end get all category

   // get row category

   public function row_category($category_id){

    $query = $this->pdo->prepare("SELECT * FROM `tbl_category` WHERE category_id = ?");
          $query->execute([$category_id]);
          $row = $query->fetch();
          echo json_encode($row);

   }

   // end get row category

   // edit category
   
   public function edit_category($category, $category_id){
    
      $sql = "UPDATE `tbl_category` SET `category` = ? WHERE category_id = ?";
      $update = $this->pdo->prepare($sql)->execute([$category, $category_id]);
      if($update == true){
         return true;
      }else{
         return false;

      }

   }

   // end edit category

   // delete category

   public function delete_category($category_id){

          $query = $this->pdo->prepare("DELETE FROM `tbl_category` WHERE category_id = ?");
          $del = $query->execute([$category_id]);
         // return $query->fetchAll();
         if($del == true){
                 return true;
              }else{
                 return false;

             }

         }

   // end delete category


         public function send_email($code, $email){

              $sql = "UPDATE `tbl_users` SET `code` = ? WHERE email = ?";
              $update = $this->pdo->prepare($sql)->execute([$code, $email]);
              if($update == true){
                 return true;
              }else{
                 return false;

              }

         }

         public function update_password($password, $code){

             $sql = "UPDATE `tbl_users` SET `password` = ?, `code` = '' WHERE code = ?";
              $update = $this->pdo->prepare($sql)->execute([$password, $code]);
              if($update == true){
                 return true;
              }else{
                 return false;

              }


         }

         //get all admin

         public function getallAdmin(){

                $query = $this->pdo->prepare("SELECT * FROM `tbl_admin` ORDER BY admin_id  DESC");
                $query->execute();
               return $query->fetchAll();

         }


         //end get all admin

         ///add admin

         public function add_admin($full_name, $email, $username, $password, $photo){


              $role = "Admin";
              $adminhashpass = password_hash($password, PASSWORD_DEFAULT);

                $stmt = $this->pdo->prepare("INSERT INTO `tbl_admin` (`full_name`, `email`, `username`, `password`, `role`, `photo`)VALUES(?,?,?,?,?,?)");
                $true = $stmt->execute([$full_name, $email, $username, $adminhashpass, $role, $photo]);
                if($true == true){
                   return true;
                }else{
                    return false;
                }

         }


         // end add admin


          // get row admin

   public function row_admin($admin_id){

    $query = $this->pdo->prepare("SELECT * FROM `tbl_admin` WHERE admin_id = ?");
          $query->execute([$admin_id]);
          $row = $query->fetch();
          echo json_encode($row);

   }

   // end get row admin


   //edit admin

     public function edit_admin($full_name, $email, $username, $photo, $admin_id){

          $sql = "UPDATE `tbl_admin` SET `full_name` = ?, `email` = ?, `username` = ?, `photo` = ? WHERE admin_id = ?";
              $update = $this->pdo->prepare($sql)->execute([$full_name, $email, $username, $photo, $admin_id]);
              if($update == true){
                 return true;
              }else{
                 return false;

              }


     }

   //end edit admin

     //delete admin

   public function delete_admin($admin_id){
     
       $query = $this->pdo->prepare("DELETE FROM `tbl_admin` WHERE admin_id = ?");
          $del = $query->execute([$admin_id]);
         // return $query->fetchAll();
         if($del == true){
                 return true;
              }else{
                 return false;

        }

   }

     //end delete admin


}