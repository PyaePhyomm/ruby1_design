<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - @yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-dark">
    
        <!-- navbar  -->
    <nav class="navbar navbar-expand-lg bg-body-info bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand ps-5" href="#"><b>MANDALAY HOTEL</b> </a>
          <button class="navbar-toggler text-white bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item ">
                <a class="nav-link active text-white" aria-current="page" href="{{url('customer')}}">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white" href="{{url('room')}}">Room</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white" href="contact.html">Contact</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <li class="nav-item">
                <a class="nav-link text-white" href="booking.html">Booking</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      @yield('content')
      
</body>
<footer>
  <div class="row">
    <div class="col-md-4 p-5 text-center">
      <h2 class="text-white">About Hotel</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, pariatur est, perspiciatis quae harum animi eveniet officia provident aliquam nihil nam veniam obcaecati dolorem corporis fugiat delectus sequi officiis. Labore!</p>
    </div>
    <div class="col-md-4 p-5 text-center">
      <h2 class="text-white">Explore</h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Room</a></li>
        <li><a href="#">Booking</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="col-md-4 p-5 text-center">
      <h2 class="text-white">Contact</h2>
      <p>73rd Street, Between Tha Zin And Ngu Shwe Wah Streets, Chanmytharzi Township,
        Mandalay, Union of Myanmar</p>
        <i class="bi bi-facebook"></i>
        <i class="bi bi-whatsapp"></i>
        <i class="bi bi-tiktok"></i>
    </div>
  </div>
</footer>
</html>