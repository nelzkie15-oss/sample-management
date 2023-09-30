<?php require_once 'header_sidebar/menu.php';?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Admin</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                </ol>
    
                <div class="card mb-4">
                    <div class="card-header">
                    
                         <div class="row">
                             <div class="col-md-10"><i class="fas fa-table me-1"></i></div>
                              <div class="col-md-2">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminModal">
                                Add Admin
                               </button>
                        </div>
                         </div>
   
                        <?php include 'modal/addadmin.php';?>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Admin Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($getalladmin as $row){

                                  $pic = htmlentities($row['photo']);
                                   if($pic == ""){
                                      $image = "../assets/images/default.png";
                                    }else{
                                      $image = $pic;
                                   }

                             ?>
                                <tr>
                                    <th><img src='<?php echo $image;?>' width='50' height='50'></th>
                                    <th><?= $row['full_name']; ?></th>
                                    <th><?= $row['email']; ?></th>
                                    <th><?= $row['password']; ?></th>
                                    <th><?= $row['role']; ?></th>
                                    <th><div class="d-flex"><div class="flex-1"> <button type="button" class="btn btn-primary btn-sm btn-editadmn" data-id="<?php echo $row['admin_id'];?>">Edit</button></div>&nbsp;<div class="flex-1"> <button type="button" class="btn btn-danger btn-sm btn-deleteadmin" data-del="<?php echo $row['admin_id'];?>">Delete</button></div></div></th>
                                </tr>
                  
                         <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    <?php include 'modal/editadmin.php';?>
    <?php include 'modal/deleteadmin.php';?>

    <script type="text/javascript">
        $(document).ready(function(){
         load_data();
         var count = 1;
         function load_data(){

             $(document).on('click', '.btn-editadmn', function(){
               $("#editadminModal").modal("show");
               var admin_id  = $(this).data("id");  //data-id
                console.log(admin_id);
                get_detail(admin_id);


             });

         }

          function  get_detail(admin_id){
            
            $.ajax({

                  type: 'POST',
                  url: '../config/row_admin.php',
                  data: {
                      admin_id: admin_id
                  },
                  dataType: 'json',
                 success: function(response){
                   // console.log(response);
                    $("#edit_adminid").val(response.admin_id);
                    $("#edit_fullname").val(response.full_name);
                    $("#edit_email").val(response.email);
                    $("#edit_username").val(response.username);
                    $("#edit_password").val(response.password);
                    $("#edit_role").val(response.role);
                    //$("#edit_pic").val(response.photo);

                    if(response.photo == ""){
                         $('#edit_photo').attr("src", "../assets/images/default.png"); 
                      }else{
                          $('#edit_photo').attr("src", response.photo);
                      }

                      //$("#edit_pic").val(response.photo);

                  }

              });      
           }

        });
    </script>


 <script type="text/javascript">
        $(document).ready(function(){
         load_data();
         var count = 1;
         function load_data(){

             $(document).on('click', '.btn-deleteadmin', function(){
               $("#deleteadminModal").modal("show");
               var admin_id  = $(this).data("del");  //data-id
                console.log(admin_id);
                get_detail(admin_id);


             });

         }

          function  get_detail(admin_id){
            
            $.ajax({

                  type: 'POST',
                  url: '../config/row_admin.php',
                  data: {
                      admin_id: admin_id
                  },
                  dataType: 'json',
                 success: function(response2){
                   // console.log(response);
                    $("#delete_adminid").val(response2.admin_id);

                  }

              });      
           }

        });
    </script>



     <?php require_once 'footer/footer.php';?>