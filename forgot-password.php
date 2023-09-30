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
              <div class="card-header"><h3>Forgot Password</h3></div>
              <form method="POST" id="logform">
               <div class="" id="msg2"> </div>
                  <div class="form-group">
                    <label>Email Adress</label>
                    <input type="email" class="form-control" id="email2"  name="email" placeholder="Email Address" autocomplete="off">
                     <span id="email2-error"></span>
                 </div>
    
                  <div class="form-group mt-3">
                   <button type="submit" class="btn btn-primary w-100" id="btn-email">Send Link</button>
                  </div>
              </form>
             </div>
           </div>
        </div>
   
      </div>
    </section>

   </div>


   <script>
     
     $(document).delegate("#btn-email", "click", function(e){
           e.preventDefault();



          const email = document.querySelector('input[id=email2]').value;
          console.log("==========email=========");
          console.log(email);



          var data1 = new FormData(this.form);

          data1.append('email', email);
      


          function isValidEmail2(){
             
             var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
             var email = $("#email2").val();
             if(pattern.test(email) && email !== ""){
                $("#email2").removeClass("is-invalid").addClass("is-valid");
                $("#email2-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;

             }else if(email === ""){
               $("#email2").removeClass("is-valid").addClass("is-invalid");
               $("#email2-error").html("Required Email address");
                 $("#email2-error").css({
                   "color": "red",
                   "font-size": "14px"
                 });
             }else{
               $("#email2").removeClass("is-valid").addClass("is-invalid");
               $("#email2-error").html("Please input Unique Email Address");
                 $("#email2-error").css({
                 "color": "red",
                 "font-size": "14px",
                 "display": "block"
               });

             };

          }

   
          isValidEmail2();
    


      if(isValidEmail2()  === true){
          $.ajax({
              url: "config/send_link.php",
              type: "POST",
              data: data1,
              processData: false,
              contentType: false,
              async: false,
              cache: false,
              success: function(res){
                $("#msg2").html(res);

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