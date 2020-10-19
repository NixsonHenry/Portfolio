<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="css/app.css" rel="stylesheet" >

    <script src="{{ asset('js/app.js') }}"></script>
    
    
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    
    {{-- Font-Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    
    <title>Portfolio</title>
</head>
<body class="bg-img">
    
    
    <header>

      <nav class="navbar navbar-expand-lg navbar-dark dark fixed-top scrolling-navbar ">

        <div class="container">

          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

          </button>

          <div class="collapse navbar-collapse ml-3" id="navbarTogglerDemo02">

            <ul class="navbar-nav mr-auto smooth-scroll menu">

              <li class="nav-item">

                <a class="nav-link waves-effect green " href="/">Home<span class="sr-only">(current)</span></a>

              </li>

              <li class="nav-item">

                <a class="nav-link waves-effect waves-light" href="/about" data-offset="90">About Me</a>

              </li>

              <li class="nav-item">

                <a class="nav-link waves-effect waves-light" href="/skills" data-offset="40">Skills</a>

              </li>

              <li class="nav-item">

                <a class="nav-link waves-effect waves-light" href="/portfolio" data-offset="100">Portfolio</a>

              </li>

              <li class="nav-item">

                <a class="nav-link waves-effect waves-light" href="/contact" data-offset="100">Contact</a>

              </li>

            </ul>

            <!-- Social Icon  -->
            <ul class="navbar-nav nav-flex-icons social-icons">

              <li class="nav-item">

                <a class="nav-link waves-effect waves-light"><i class="fab fa-facebook-f light-green-text-2"></i></a>

              </li>

              <li class="nav-item">

                <a class="nav-link waves-effect waves-light"><i class="fab fa-twitter light-green-text-2"></i></a>

              </li>

              <li class="nav-item">

                <a class="nav-link waves-effect waves-light"><i class="fab fa-instagram light-green-text-2"></i></a>

              </li>

            </ul>

          </div>

        </div>

      </nav>
      
    </header>
  
    
    <main class="">
        @yield('content')
    </main>

    
<footer class="fixed dark pt-5">  
  <div class="container">
      <div class="row text-light">
          <div class="col-md-3 col-lg-3 col-xl-3 mr-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold foot-0">My services</h6>
              <a class="text-light foot-1" href="/services"><p class="foot-1">Web Development</p></a>
              <a class="text-light foot-1" href="/services"><p class="foot-1">Big Data</p></a>
          </div>
          <div class="col-md-2 col-lg-3 col-xl-3 mr-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold foot-0">Works</h6>
                  <a class="text-light foot-1" href="#!"><p class="foot-1">Bootstrap</p></a>
             
                  <a class="text-light foot-1" href="#!"><p class="foot-1">WordPress</p></a>

          </div>
          <div class="col-md-3 col-lg-3 col-xl-3 mr-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold foot-0">Skills</h6>
            
                  <a class="text-light foot-1" href="#!"><p class="foot-1">account</p></a>
             
                  <a class="text-light foot-1" href="#!"><p class="foot-1">affiliate</p></a>
             
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mr-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold foot-0">Contact</h6>
              <p class="foot-1">
                  <i class="fas fa-home mr-3 foot-1"></i># 52, Delmas 89, P.A.P, Haiti
             </p>
            
              <a class="text-light" href="mailto:xondy77@yahoo.fr" target="_blank"><p class="foot-1"><i class="fas fa-envelope prefix foot-1 mr-3 text-light foot-1"></i> xondy77@yahoo.fr </p></a>
            
            
            <a class="text-light" href="tel:50940046541"><p class="foot-1"><i class="fas fa-phone mr-3 foot-1 "></i> + 509 400 465 41</p></a>
          </div>
          <hr class="w-100 bg-light"> 
      </div>


      <div class="row">
          <div class="col-md-4 col-lg-4 pt-4">
              <p class="foot-1 text-light">
              <a class="foot-1 xon" href="/" target="_blank"> Visit my Portfolio</a>
              </p>
          </div>
          <div class="col-md-4 col-lg-4 pt-4">
              <p class="text-light text-center">
              © 2020 Copyright: <a class="foot-1 xon" href="/" target="_blank"> Nixson Henry
              </a>
              </p>
          </div>
 
          <div class="col-md-4 col-lg-4 pt-3">
              <ul class="d-flex foot-media">
                  <li class="nav-item">
                      <a class="btn-md border border-light rounded-circle f-0 ml-2 circle"><i class="fab fa-facebook-f face"></i>
                      </a>
                  </li>
                  <li class="nav-item"><a class="btn-md border border-light rounded-circle f-1 ml-2 circle"><i class="fab fa-twitter twit"></i>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="btn-md border border-light rounded-circle f-2 ml-2 circle"><i class="fab fa-linkedin-in link"></i>
                      </a>
                  </li>
              </ul> 
          </div>
      </div>
         
  </div>
</footer>
  
</body>
</html>