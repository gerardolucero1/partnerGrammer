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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">    
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
							    
                    .img-center {
                      text-align: center;
                    }
                  .p-normal{
                    font-size: 22px;
                    font-weight: bold;
                  }
                  .p-white{
                    font-size: 22px;
                    font-weight: bold;
                    color:white;
                  }
                  .p-title{
                    font-size: 27px;
                    font-weight: bolder;
                    color:white;
                  }
                  .p-title-black{
                    font-size: 27px;
                    font-weight: bolder;
                    color:black;
                  }
                  .container-black{
                    background-color: #233142;
                    display: inline-block;
                    width: 100%;
                    color:white;
                    text-align: center;
                  }
                  .contenedor-galeria{             
                  }
                  .contenedor-galeria:hover{
                  -webkit-filter: grayscale(80%);
                    filter: grayscale(80%);                
                  }
                  .p-title-cambiante{
                    font-size: 27px;
                    font-weight: bolder;
                    color:white;
                  }
                  .p-title-cambiante:hover{
                    color:#0ac775;
                    font-size: 27px;
                    font-weight: bolder;
                  }
                  .p-cambiante{
                    color:black;
                    font-size: 27px;
                    text-align: center;
                  }
                  .p-cambiante:hover{
                    color:#0ac775;
                    font-size: 27px;
                    text-align: center;
                  }
                  .icon-cambiante{
                    color:black;
                    font-size: 18px;
                    text-align: center;
                  }
                  .icon-cambiante:hover{
                    color:#0ac775;
                    font-size: 18px;
                    text-align: center;
                  }  
                  .icon-cambiante-gde{                    
                    color:#0ac775;
                    font-size: 30px;
                    text-align: center;
                  }
                  .p-centro{
                    text-align: center;
                    font-size: 22px;
                  }
                  body {
                      font-family: 'Montserrat';font-size: 18px;
                  }
                  .parallax {
                    /* The image used */
                    background-image: url("https://adpro3d-os.com/IMAGENES_publicas/Sitio-partnergrammer/paralax.jpg");

                    /* Set a specific height */
                    min-height: 500px; 

                    /* Create the parallax scrolling effect */
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                  }
                  div.first {                     
                    color:#0ac775;
                    font-size: 40px;
                  }               
                  div.second {                               
                    color:black;
                    font-size: 25px;
                  }               
                  div.third {                               
                    color:gray;
                    font-size: 20px;
                  } 
                  .a-cambiante{
                  }
                  .a-cambiante:hover{                    
                    -webkit-filter: grayscale(80%);
                    filter: grayscale(80%);      
                  }
                  .content{
                    position: relative;
                    width: 333px;
                    height: 333px;                    
                    overflow: hidden;
                  }
                  .content:hover .layer{
                    opacity: 1;
                  }
                  .layer{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 333px;
                    height: 333px;
                    background-color: rgba(0, 0, 0, 0.7);
                    opacity: 0;
                    transition: all 0.4s;
                  }
                    .content img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    object-position: center;
                  }
                  .content-small{
                    position: relative;
                    width: 250px;
                    height: 250px;                    
                    overflow: hidden;
                  }
                  .content-small:hover .layer-small{
                    opacity: 1;
                  }
                  .layer-small{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 250px;
                    height: 250px;
                    background-color: rgba(0, 0, 0, 0.7);
                    opacity: 0;
                    transition: all 0.4s;
                  }
                    .content-small img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    object-position: center;
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
      <div class="carousel-item active" style="background-image: url('https://adpro3d-os.com/IMAGENES_publicas/Sitio-partnergrammer/slide1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
          <button type="button" class="btn btn-outline-light text-dark mb-2">Light</button>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://adpro3d-os.com/IMAGENES_publicas/Sitio-partnergrammer/slide2.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>          
          <button type="button" class="btn btn-outline-light text-dark mb-2">Light</button>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://adpro3d-os.com/IMAGENES_publicas/Sitio-partnergrammer/slide3.jpg')">
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


    
    @yield('content')
    
</body>
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    items:6,
    loop:true,
    margin:0,
  });
});
  </script>
                                
                                <script>
                                    import FadeText from 'fade-text';

                                    const fadeText = new FadeText();
                                    fadeText.applyAnimation('my-text');
                                    </script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
                                    
                            
</html>




							
							