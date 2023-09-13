<?php require_once 'header_sidebar/menu.php';?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Category</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
    
                <div class="card mb-4">
                    <div class="card-header">
                    
                         <div class="row">
                             <div class="col-md-10"><i class="fas fa-table me-1"></i></div>
                              <div class="col-md-2">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcategoryModal">
                                Add Category
                               </button>
                        </div>
                         </div>
   
                        <?php include 'modal/addcategory.php';?>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($getallcategory as $row){ ?>
                                <tr>
                                    <th><?= $row['category_id']; ?></th>
                                    <th><?= $row['category']; ?></th>
                                    <th><button type="button" class="btn btn-primary btn-sm btn-editcat" data-id="<?php echo $row['category_id'];?>">Edit</button> <button type="button" class="btn btn-danger btn-sm btn-deletecat" data-del="<?php echo $row['category_id'];?>">Delete</button></th>
                                </tr>
                  
                         <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    <?php include 'modal/editcategory.php';?>
    <?php include 'modal/deletecategory.php';?>

    <script type="text/javascript">
        $(document).ready(function(){
         load_data();
         var count = 1;
         function load_data(){

             $(document).on('click', '.btn-editcat', function(){
               $("#editcategoryModal").modal("show");
               var category_id  = $(this).data("id");  //data-id
                console.log(category_id);
                get_detail(category_id);


             });

         }

          function  get_detail(category_id){
            
            $.ajax({

                  type: 'POST',
                  url: '../config/row_category.php',
                  data: {
                      category_id: category_id
                  },
                  dataType: 'json',
                 success: function(response){
                   // console.log(response);
                    $("#edit_categoryid").val(response.category_id);
                    $("#edit_category").val(response.category);

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

             $(document).on('click', '.btn-deletecat', function(){
               $("#deletecategoryModal").modal("show");
               var category_id  = $(this).data("del");  //data-id
                console.log(category_id);
                get_detail(category_id);


             });

         }

          function  get_detail(category_id){
            
            $.ajax({

                  type: 'POST',
                  url: '../config/row_category.php',
                  data: {
                      category_id: category_id
                  },
                  dataType: 'json',
                 success: function(response2){
                   // console.log(response);
                    $("#delete_categoryid").val(response2.category_id);

                  }

              });      
           }

        });
    </script>



     <?php require_once 'footer/footer.php';?>