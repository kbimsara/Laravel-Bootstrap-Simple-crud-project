<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<title>Home</title>
</head>

<body>
  <!--NavBar/Start-->
  <nav class="navbar sticky-top navbar-expand-lg bg-white shadow">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="font-size: larger;">||||</span>
      </button>
      <div class="collapse navbar-collapse justify-content-center text-dark" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="/"
                      style="font-size: medium;">Home</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="/about"
                      style="font-size: medium;">About</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="/reg"
                      style="font-size: medium;">Register</a></li>
              <li class="nav-item"><a class="nav-link" href="/login"
                      style="font-size: medium;">Login</a></li>
          </ul>
      </div>
  </nav>
  <!--NavBar/End-->
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{URL('src/1.jpg')}}" class="d-block w-100" alt="Image">
        </div>
        <div class="carousel-item">
          <img src="{{URL('src/2.jpg')}}" class="d-block w-100" alt="Image">
        </div>
        <div class="carousel-item">
          <img src="{{URL('src/3.jpg')}}" class="d-block w-100" alt="Image">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
    <div class="container-fluid justify-content-center">
        <center>
                <h3 class="m-4 ">This is Head text</h3>
                <p class="m-2">A common form of Lorem ipsum reads: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </center>
    </div>

    <footer class="bg-white text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3">
        © 2023 Copyright:
        <a class="text-dark" href="#">Kavindu Bimsara</a>
      </div>
      <!-- Copyright -->
    </footer>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>