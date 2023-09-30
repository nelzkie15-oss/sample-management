<?php 

$getlink = $_GET['reset'];


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sample Management</title>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
      body{
        font-family: 'Ubuntu', sans-serif;
      }
      .d-block{
        width: 100%;
        height: 350px;
      }
      .top{
        margin-top: 10%;
      }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index">Sample Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
          <div class="d-flex">
             <a href="login"> <button class="btn btn-outline-success" type="button">Login</button></a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">

    <section class="top">
      

      <div class="row mt-4">
        <div class="col-sm-12 col-md-6 col-lg-7">
      <div class="card">
          <div class="card-body">
     

            <!-- slide -->

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="assets/images/91617500-charity-and-donation-background-with-various-icons.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/images/donation-boxes-background-free-vector.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/images/desktop-wallpaper-blood-bank-blood-donation.jpg" class="d-block" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
             <!-- end slide -->
          </div>
        </div>


        </div>
           <div class="col-sm-12 col-md-6 col-lg-5">
            <div class="card">
             <div class="card-body">
              <div class="card-header"><h3>Change Password</h3></div>
              <form method="POST" id="logform">
               <div class="" id="msg3"> </div>

                  <div class="form-group">
                    <label>New Password</label>
                    <input type="password" class="form-control" id="password2" placeholder="New Password" autocomplete="off">
                     <span id="pass-error"></span>
                 </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword"  placeholder="Confirm Password" autocomplete="off">
                     <span id="cpass-error"></span>
                 </div>
    
                  <div class="form-group mt-3">
                    <input type="hidden" name="code" id="code" value="<?php echo $getlink;?>">
                   <button type="submit" class="btn btn-primary w-100" id="btn-updatepass">Update Password</button>
                  </div>
              </form>
             </div>
           </div>
        </div>
   
      </div>
    </section>

   </div>


   <script>
     
     $(document).delegate("#btn-updatepass", "click", function(e){
           e.preventDefault();


          const password = document.querySelector('input[id=password2]').value;
          console.log("==========password=========");
          console.log(password);

          const cpassword = document.querySelector('input[id=cpassword]').value;
          console.log("==========cpassword=========");
          console.log(cpassword);

          const code = document.querySelector('input[id=code]').value;
          console.log("==========code=========");
          console.log(code);


          var data1 = new FormData(this.form);

           data1.append('password', password);
           data1.append('cpassword', cpassword);
           data1.append('code', code);

             function isValidNewpassword() {
                  if ($("#password2").val() === "") {
                      $("#password2").addClass("is-invalid");
                       $("#pass-error").html('Please input New Password');
                       $("#pass-error").css({"color":"red","font-size":"14px"});
                      return false;
                  } else {
                      $("#password2").removeClass("is-invalid").addClass("is-valid");
                      return true;
                  }
              };

            function isValidConfirmpassword() {
                  if ($("#cpassword").val() === "") {
                      $("#cpassword").addClass("is-invalid");
                       $("#cpass-error").html('Please input Confirm Password');
                       $("#cpass-error").css({"color":"red","font-size":"14px"});
                      return false;
                  } else {
                      $("#cpassword").removeClass("is-invalid").addClass("is-valid");
                      return true;
                  }
              };


   
          isValidNewpassword();
          isValidConfirmpassword();
    


      if(isValidNewpassword()  === true && isValidConfirmpassword() === true){
          $.ajax({
              url: "config/change_password.php",
              type: "POST",
              data: data1,
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

        }

     });



   </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>