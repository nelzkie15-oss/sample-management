
<!-- Modal -->
<div class="modal fade" id="editadminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
   <form method="POST">
      <div class="modal-body">
         <div id="msg_ad"></div>

        <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control" name="" id="edit_fullname">
                  <span class="name2-error"></span>
               </div>
           </div>
             <div class="col-md-6">
               <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" class="form-control" name="" id="edit_email">
                    <span class="mail2-error"></span>
               </div>
           </div>
        </div>

          <div class="row">
           <div class="col-md-12">
               <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="" id="edit_username">
                    <span class="user2-error"></span>
               </div>
           </div>
    <!--          <div class="col-md-6">
               <div class="form-group">
                  <label>Password</label>
                  <input type="email" class="form-control" name="" id="edit_password">
                    <span class="pass-error"></span>

               </div>
           </div> -->
        </div>

         <div class="row">
             <div class="col-md-6">
               <div class="form-group">
                  <label>Upload Image</label>
                  <img id="edit_photo" src="" width="150px" height="150px" style="border:1px solid gray;margin-bottom: 3px;">
                  <input type="file" accept=".jpg, .png, .gif" id="edit_pic" class="form-control" name="">
                  <span class="pic2-error"></span>
               </div>
           </div>
        </div>


      </div>
      <div class="modal-footer">
        <input type="hidden" name="" id="edit_adminid">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btn-editadmin">Update</button>
      </div>
    </div>
    </form>
  </div>
</div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <script>
       document.addEventListener('DOMContentLoaded', () => {
          let btn = document.querySelector('#btn-editadmin'); 
          btn.addEventListener('click', (e) => {
            // alert("click");

             
             const full_name = document.querySelector('input[id=edit_fullname]').value;
             console.log("==============fullname===========");
             console.log(full_name);

             const email = document.querySelector('input[id=edit_email]').value;
             console.log("==============emailaddress===========");
             console.log(email);

             const username = document.querySelector('input[id=edit_username]').value;
             console.log("==============username===========");
             console.log(username);

             // const password = document.querySelector('input[id=password]').value;
             // console.log("==============password===========");
             // console.log(password);

               
             const default_img = $('#edit_photo').attr('src');
             console.log("===============default_img==========");
             console.log(default_img);

             const photo = document.querySelector('input[id=edit_pic]').value;
             console.log("===============photo==========");
             console.log(photo);


             const admin_id = document.querySelector('input[id=edit_adminid]').value;
             console.log("==============admin_id===========");
             console.log(admin_id);


             var data = new FormData(this.form);
                 data.append('full_name', full_name);
                 data.append('email', email);
                 data.append('username', username);
                 data.append('default_img', default_img);
                 data.append('photo', $('#edit_pic')[0].files[0]);
                 data.append('admin_id', admin_id);

             function isValidFullName2(){
               if($("#edit_fullname").val() === ""){
                  $("#edit_fullname").addClass("is-invalid");
                  $(".name2-error").html("Please input Full Name");
                  $(".name2-error").css({"color":"red", "font-size":"14px"});
                  return false;

               }else{

                  $("#edit_fullname").removeClass("is-invalid").addClass("is-valid");
                   $(".name2-error").css({"display":"none"});
                    return true;
                 }
           

             };


             function isVaedit_emaillidEmail2(){
               if($("#edit_email").val() === ""){
                  $("#edit_email").addClass("is-invalid");
                  $(".mail2-error").html("Please input Email address");
                  $(".mail2-error").css({"color":"red", "font-size":"14px"});
                  return false;

               }else{

                  $("#edit_email").removeClass("is-invalid").addClass("is-valid");
                   $(".mail2-error").css({"display":"none"});
                    return true;
                 }
           

             };


            function isValidUserName2(){
               if($("#edit_username").val() === ""){
                  $("#edit_username").addClass("is-invalid");
                  $(".user2-error").html("Please input Username");
                  $(".user2-error").css({"color":"red", "font-size":"14px"});
                  return false;

               }else{

                  $("#edit_username").removeClass("is-invalid").addClass("is-valid");
                   $(".user2-error").css({"display":"none"});
                    return true;
                 }
           

             };


             // function isValidPassword(){
             //   if($("#password").val() === ""){
             //      $("#password").addClass("is-invalid");
             //      $(".pass-error").html("Please input Password");
             //      $(".pass-error").css({"color":"red", "font-size":"14px"});
             //      return false;

             //   }else{

             //      $("#password").removeClass("is-invalid").addClass("is-valid");
             //       $(".pass-error").css({"display":"none"});
             //        return true;
             //     }
           

             // };

             //  function isValidPassword2(){
             //   if($("#password").val() === ""){
             //      $("#password").addClass("is-invalid");
             //      $(".pass-error").html("Please input Password");
             //      $(".pass-error").css({"color":"red", "font-size":"14px"});
             //      return false;

             //   }else{

             //      $("#password").removeClass("is-invalid").addClass("is-valid");
             //       $(".pass2-error").css({"display":"none"});
             //        return true;
             //     }
           

             // };

          // function isValidPhoto2(){
          //      if($("#edit_pic").val() === ""){
          //         $("#edit_pic").addClass("is-invalid");
          //         $(".pic2-error").html("Please Upload Photo");
          //         $(".pic2-error").css({"color":"red", "font-size":"14px"});
          //         return false;

          //      }else{

          //         $("#edit_pic").removeClass("is-invalid").addClass("is-valid");
          //          $(".pic2-error").css({"display":"none"});
          //           return true;
          //        }
           

          //    };


             isValidFullName2();
             isVaedit_emaillidEmail2();
             isValidUserName2();
             // isValidPassword();
             // isValidPhoto2();


               if(isValidFullName2() === true && isVaedit_emaillidEmail2() === true && isValidUserName2() === true){

                 $.ajax({

                         url: '../config/edit_admin.php',
                          type: "POST",
                          data: data,
                          processData: false,
                          contentType: false,
                          async: false,
                          cache: false,
                      success: function(response){
                        console.log('==================response===========');
                        console.log(response);
                        $('#msg_ad').html(response);

                    },error: function(response){
                      console.log("Failed Insert");
                    }

                  });

             }


         });
       });
    </script>


   <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#edit_photo').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }
    $("#edit_pic").change(function () {
      readURL(this);
    });
  </script>