
    <!-- Modal -->
    <div class="modal fade" id="deleteadminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Admin</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
         <form method="POST">
          <div id="msg4"></div>
          <div class="modal-body">
           <center> <h6>Are you sure you to delete ?</h6></center>
          </div>
          <div class="modal-footer">
            <input type="hidden" id="delete_adminid" name="">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn btn-primary" id="btn-deleteadmin">Yes</button>
          </div>
        </form>
        </div>
      </div>
    </div>


   <script type="text/javascript">
     document.addEventListener('DOMContentLoaded', () => {
       let btn = document.querySelector("#btn-deleteadmin");
       btn.addEventListener('click', (e) =>{
          e.preventDefault();

          const admin_id = document.querySelector('input[id=delete_adminid]').value;
          console.log("===============admin_id===============");
          console.log(admin_id);

           var value = new FormData(this.form);
          
           value.append('admin_id', admin_id)


          $.ajax({
              url: "../config/deleteadmin.php",
              type: "POST",
              data: value,
              processData: false,
              contentType: false,
              async: false,
              cache: false,
              success: function(res){
                $("#msg4").html(res);
              },
              error: function(res){
                console.log("Failed");
              }

           });


       });

     });
   </script>