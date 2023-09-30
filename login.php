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


<style>
       #loader{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('assets/loading/Dual Ring-1s-200px.png') 50% 50% no-repeat rgb(249,249,249);
        opacity: 1;
        }
       
  </style>
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript">
      $(window).on('load', function(){
        setTimeout(function(){
              $('#loader').fadeOut('slow');  
          });
      });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </head>
  <body>
    <div id="loader"></div>
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
              <div class="card-header"><h3>Login Form</h3></div>
              <form method="POST" id="logform">
                   <div class="">
                      <center><span id="myalert2"></span></center>
                   </div>
                  
                   <div class="" id="myalert" style="display: none;">
                         <div class="">
                            <center><span id="alerttext"></span></center>
                         </div>
                   </div>

                   <div class="" id="myalert3" style="display: none;">
                         <div class="">
                              <div class="alert alert-success" id="alerttext3"></div>
                         </div>
                   </div>


                  <div class="form-group">
                    <label>Email Adress</label>
                    <input type="email" class="form-control" id="email"  name="email" placeholder="Email Address" autocomplete="off">
                     <span id="email-error"></span>
                 </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="password"  name="password" placeholder="Password" autocomplete="off">
                    <span id="pass-error"></span>
                 </div>
               
                 <div class="form-group">
                     <a href="forgot-password">Forgot Password</a>
                 </div>
                  <div class="form-group mt-3">
                   <button type="submit" class="btn btn-primary w-100" id="btn-login">Sign In</button>
                  </div>
              </form>
             </div>
           </div>
        </div>
   
      </div>
    </section>

   </div>

<script>
  
// Wait for document to load
        $(document).ready(() => {
            $('#logform').on('submit', () => {

                // prevents default behaviour
                // Prevents event propagation
                return false;
            });
        });
        $('#logform').keypress((e) => {

            // Enter key corresponds to number 13
            if (e.which === 13) {
                $('#logform').submit();
                console.log('form submitted');
            }
        })




        $(document).on('click', '#btn-login', function() {

            if ($('#email').val() != '' && $('#password').val() != '') {

                // $('#login-button').html(' Loading...');
                $('#myalert').slideUp();
                $('#myalert3').slideUp();
                var logform = $('#logform').serialize();
                setTimeout(function() {
                    $.ajax({
                        method: 'POST',
                        url: 'config/login.php',
                        data: logform,
                        //   beforeSend: function() {

                        //    $('#login-button').html(' Loading...');
                        //    $('#login-button').html('');
                        // },
                        success: function(data) {
                            if (data == 1) {

                                $('#myalert3').slideDown();
                                $('#alerttext3').html(data);
                                $('#alerttext3').html('<i class="fa fa-check"></i> Login Successful. User Verified!');
                                $('#login-button').text('Login');
                                $('#logform')[0].reset();
                                $('#myalert').hide();
                                $('#alerttext').hide();
                                $('#myalert2').hide();
                                $('#alerttext2').hide();
                                setTimeout(function() {
                                    window.location = '/sample-management/dashboardadmin/home.php';
                                }, 1000);
                            }  else if (data == 2) {

                                $('#myalert3').slideDown();
                                $('#alerttext3').html(data);
                                $('#alerttext3').html('<i class="fa fa-check"></i> Login Successful. User Verified!');
                                $('#login-button').text('Login');
                                $('#logform')[0].reset();
                                $('#myalert').hide();
                                $('#alerttext').hide();
                                $('#myalert2').hide();
                                $('#alerttext2').hide();
                                setTimeout(function() {
                                    window.location = '/sample-management/dashboarduser/home.php';
                                }, 1000);
                            }else {
                                $('#myalert').slideDown();
                                $('#alerttext').html(data);
                                $('#logtext').text('Login');
                                $('#logform')[0].reset();
                                $('#myalert2').hide();
                                $('#alerttext3').hide();

                            }
                        }
                    });
                }, 1000);
            } else {
                $('#myalert2').slideDown();
                $('#myalert').hide();
                $('#alerttext3').hide();
                $('#myalert2').html('<div class="alert alert-warning err_msg mt-2"><i class="fa fa-info"></i> Please input both fields Login</div>');
                $('#logtext').text('Login');
                $('#logform')[0].reset();

            }
        });


</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>