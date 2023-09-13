
    <!-- Modal -->
    <div class="modal fade" id="deletecategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
         <form method="POST">
          <div id="msg3"></div>
          <div class="modal-body">
           <center> <h6>Are you sure you to delete ?</h6></center>
          </div>
          <div class="modal-footer">
            <input type="hidden" id="delete_categoryid" name="">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn btn-primary" id="btn-deletecategory">Yes</button>
          </div>
        </form>
        </div>
      </div>
    </div>


   <script type="text/javascript">
     document.addEventListener('DOMContentLoaded', () => {
       let btn = document.querySelector("#btn-deletecategory");
       btn.addEventListener('click', (e) =>{
          e.preventDefault();

          const category_id = document.querySelector('input[id=delete_categoryid]').value;
          console.log("===============category_id===============");
          console.log(category_id);

           var value = new FormData(this.form);
          
           value.append('category_id', category_id)


          $.ajax({
              url: "../config/deletecategory.php",
              type: "POST",
              data: value,
              processData: false,
              contentType: false,
              async: false,
              cache: false,
              success: function(res){
                $("#msg3").html(res);
              },
              error: function(res){
                console.log("Failed");
              }

           });


       });

     });
   </script>