<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>PartnerGrammer</title>
    <style>
    .carousel-item {
        height: 100vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        }
        
								    .button-view-more{
                                        background:white; border-radius:5px; text-align:center; padding:15px; color:#2c3e50; font-weight:bold; width:10em;
                                        }
									.button-view-more:hover{
                                        background:white; border-radius:5px; text-align:center; padding:15px; color:#1abc9c; font-weight:bold; width:10em; transition: all .2s ease; cursor:pointer;
                                        }
							        .maintenance{
                                        width:25%; margin-top:-40%; transition: all .2s ease;
                                        }
									.maintenance:hover{
                                        width:30%; margin-top:-40%; margin-left:-2.5%; cursor:pointer;transition: all .2s ease;
                                        }
									.mobile{
										width:15%; margin-top:20%; margin-left:-20%; cursor:pointer;transition: all .2s ease;
										}
									.mobile:hover{
										width:20%; margin-top:20%; margin-left:-22.5%; cursor:pointer;transition: all .2s ease;
										}
                                    .custom{
										width:15%; margin-top:5%; margin-left:15%; cursor:pointer;transition: all .2s ease;
										}
									.custom:hover{
										width:18%; margin-top:7%; margin-left:17.5%; cursor:pointer;transition: all .2s ease;
										}
									.web{
										width:40%; margin-top:15%; margin-left:10%; cursor:pointer;transition: all .2s ease;
										}
									.web:hover{
										width:45%; margin-top:15%; margin-left:7.5%; cursor:pointer;transition: all .2s ease;
										}
							</style>
   
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container">
    <a href="index.php"><img src="https://adpro3d-os.com/IMAGENES_publicas/logo.png" href="" style="padding-right: 30px;"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pages</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Portfolio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Blog</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
      </ul>
    </div>
  </div>
</nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
          <button type="button" class="btn btn-outline-light text-dark mb-2">Light</button>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>          
          <button type="button" class="btn btn-outline-light text-dark mb-2">Light</button>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>          
          <button type="button" class="btn btn-outline-light text-dark mb-2">Light</button>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>

<!-- Page Content -->


    <div class="container">    
    @yield('content')
    </div>
</body>
                                <script>
                                function manitance(){
                                        document.getElementById('title_services').innerHTML="Maintenance";
                                        document.getElementById('content').innerHTML="Once your software is running we can provide maintenance for your software to ensure, it is up to date on the latest technologies or if you need to add more functions to it.";
                                        }
                                    function mobile(){
                                        document.getElementById('title_services').innerHTML="Mobile";
                                        document.getElementById('content').innerHTML="At Partnergrammer, we develop serious (yet beautiful) apps on iPhone, iPad, Android & Windows.";
                                        }
                                        function web(){
                                        document.getElementById('title_services').innerHTML="Web Development";
                                    document.getElementById('content').innerHTML="Everything from sophisticated business automation platforms to robust email clients, to complex e-commerce platforms, leverage web development to provide powerful software to the world in real-time.";
                                        }
                                        function custom(){
                                        document.getElementById('title_services').innerHTML="Custom Software";
                                        document.getElementById('content').innerHTML="We develop functional and yet beautiful apps for IOS, Android & Windows. We aim to deliver great User Experience because without it; minus well put your money in the trash can.  ";
                                        }
                                </script>
</html>




							
							