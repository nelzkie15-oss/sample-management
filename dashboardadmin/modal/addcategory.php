
    <!-- Modal -->
    <div class="modal fade" id="addcategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
         <form method="POST">
          <div id="msg1"></div>
          <div class="modal-body">
            <div class="form-group">
              <label class=""><b>Category</b></label>
              <input type="text" id="category" name="category" class="form-control" placeholder="Enter Category">
              <span class="cat-error"></span>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-category">Save</button>
          </div>
        </form>
        </div>
      </div>
    </div>


   <script type="text/javascript">
     document.addEventListener('DOMContentLoaded', () => {
       let btn = document.querySelector("#btn-category");
       btn.addEventListener('click', (e) =>{
          e.preventDefault();

          const category = document.querySelector('input[id=category]').value;
          console.log("===============category===============");
          console.log(category);


               var value = new FormData(this.form);
               value.append('category', category)


          function isValidCategory(){
            
            if($("#category").val() === ""){
               $("#category").addClass("is-invalid");
               $(".cat-error").html("Please input Category");
               $(".cat-error").css({"color":"red", "font-size":"14px"});
               return false;
            }else{
               $("#category").removeClass("is-invalid").addClass("is-valid");
               return true;

            }

          };

          isValidCategory();


     if(isValidCategory()  === true){
          $.ajax({
              url: "../config/addcategory.php",
              type: "POST",
              data: value,
              processData: false,
              contentType: false,
              async: false,
              cache: false,
              success: function(res){
                $("#msg1").html(res);
              },
              error: function(res){
                console.log("Failed");
              }

           });

        }


       });

     });
   </script>