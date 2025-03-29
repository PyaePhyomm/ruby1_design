@extends('master')
@section('title', 'Room')
@section('content')
<div class="container">
        <!-- start carousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="{{url('/images/room1.avif')}}" class="d-block w-100 h-img img-fluid " alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="{{url('/images/room2.jpg')}}" class="d-block w-100 h-img" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{url('/images/room3.webp')}}" class="d-block w-100 h-img" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  <!-- end carousel -->

      <!-- choose room  -->
       <h1 class="text-white my-4 titleBar p-2">Choose Room</h1>
       <div class="row">
        <div class="col-md-3 text-center">
          <!-- <span >Checkin</span> -->
          <label for="Checkin" class="fs-5 me-2">Checkin </label>
            <input type="date" name="Checkin" id="Checkin" class="p-3">
        </div>
        <div class="col-md-3 text-center">
          <label for="Checkout" class="fs-5 me-2">Checkout </label>
          <!-- <span >Checkout</span> -->
            <input type="date" name="Checkout" id="Checkout" class="p-3">

        </div>
        <div class="col-md-3 text-center">
          <label for="roomType">Select Room Type:</label>
          <select name="roomType" id="roomType" class="p-3">
            <option value="standard">Standard</option>
            <option value="economy">Economy</option>
            <option value="premium">Premium</option>
          </select>
        </div>
        <div class="col-md-3 text-center">
          <input type="submit" value="Search" class="p-3 btn btn-primary">
        </div>
        <!-- <div class="col-md-3 text-center personNo">
          <span class="fs-5"> Number of Person</span><br>
          <i class="bi bi-dash-circle fs-4 "></i>
          <span class="fs-4">2</span>
          <i class="bi bi-plus-circle fs-4 "></i>
        </div>
        <div class="col-md-3 text-center roomNo">
          <span class="fs-5"> Number of Room</span><br>
          <i class="bi bi-dash-circle fs-4  "></i>
          <span class="fs-4">1</span>
          <i class="bi bi-plus-circle fs-4"></i>
        </div> -->

       </div>
      </div>

      <!-- Room catalog -->
       <div class="row">
        <div class="col-md-4 cards  gx-5">
          <img src="{{url('/images/room1.avif')}}" class="w-100 height:100px; pb-3 " alt="img1">
          <div class="cardInfo">
            <h5 class="text-white">Standard Double</h5>
            <i class="bi bi-car-front-fill text-success"><span class="mx-2 text-success">Free self parking</span> </i><br>
            <i class="bi bi-buildings-fill"><span class="px-2">City Veiw</span></i><br>
            <i class="bi bi-person-fill"><span class="px-2">Sleeps 2</span></i><br>
            <i class="bi bi-wifi"><span class="px-2">Free WiFi</span></i><br>
            <i class="fa fa-bed"><span class="px-2">1 Double Bed</span></i>
          </div>
          <div class="row">
            <div class="col-md-8">
              <p class="text-success fs-3">80000 MMK <span class="fs-6">per night</span> </p>

            </div>
            <div class="col-md-4 text-center">
              <input type="submit" value="Book Now" class="btn btn-primary p-2">
            </div>
          </div>
        </div>
        <div class="col-md-4 cards  gx-5">
          <img src="{{url('/images/room2.jpg')}}" class="w-100 height:100px; pb-3 " alt="img1">
          <div class="cardInfo">
            <h5 class="text-white">Standard Double</h5>
            <i class="bi bi-car-front-fill text-success"><span class="mx-2 text-success">Free self parking</span> </i><br>
            <i class="bi bi-buildings-fill"><span class="px-2">City Veiw</span></i><br>
            <i class="bi bi-person-fill"><span class="px-2">Sleeps 2</span></i><br>
            <i class="bi bi-wifi"><span class="px-2">Free WiFi</span></i><br>
            <i class="fa fa-bed"><span class="px-2">1 Double Bed</span></i>
          </div>
          <div class="row">
            <div class="col-md-8">
              <p class="text-success fs-3">80000 MMK <span class="fs-6">per night</span> </p>

            </div>
            <div class="col-md-4 text-center">
            <input type="submit" value="Book Now" class="btn btn-primary p-2">
            </div>
          </div>
        </div>
        <div class="col-md-4 cards  gx-5">
          <img src="{{url('/images/room3.webp')}}" class="w-100 height:100px; pb-3 " alt="img1">
          <div class="cardInfo">
            <h5 class="text-white">Standard Double</h5>
            <i class="bi bi-car-front-fill text-success"><span class="mx-2 text-success">Free self parking</span> </i><br>
            <i class="bi bi-buildings-fill"><span class="px-2">City Veiw</span></i><br>
            <i class="bi bi-person-fill"><span class="px-2">Sleeps 2</span></i><br>
            <i class="bi bi-wifi"><span class="px-2">Free WiFi</span></i><br>
            <i class="fa fa-bed"><span class="px-2">1 Double Bed</span></i>
          </div>
          <div class="row">
            <div class="col-md-8">
              <p class="text-success fs-3">80000 MMK <span class="fs-6">per night</span> </p>

            </div>
            <div class="col-md-4 text-center">
            <input type="submit" value="Book Now" class="btn btn-primary p-2">
            </div>
          </div>
        </div>
        <div class="col-md-4 cards  gx-5">
          <img src="{{url('/images/room1.avif')}}" class="w-100 height:100px; pb-3 " alt="img1">
          <div class="cardInfo">
            <h5 class="text-white">Standard Double</h5>
            <i class="bi bi-car-front-fill text-success"><span class="mx-2 text-success">Free self parking</span> </i><br>
            <i class="bi bi-buildings-fill"><span class="px-2">City Veiw</span></i><br>
            <i class="bi bi-person-fill"><span class="px-2">Sleeps 2</span></i><br>
            <i class="bi bi-wifi"><span class="px-2">Free WiFi</span></i><br>
            <i class="fa fa-bed"><span class="px-2">1 Double Bed</span></i>
          </div>
          <div class="row">
            <div class="col-md-8">
              <p class="text-success fs-3">80000 MMK <span class="fs-6">per night</span> </p>

            </div>
            <div class="col-md-4 text-center">
            <input type="submit" value="Book Now" class="btn btn-primary p-2">
            </div>
          </div>
        </div>
        <div class="col-md-4 cards  gx-5">
          <img src="{{url('/images/room3.webp')}}" class="w-100 height:100px; pb-3 " alt="img1">
          <div class="cardInfo">
            <h5 class="text-white">Standard Double</h5>
            <i class="bi bi-car-front-fill text-success"><span class="mx-2 text-success">Free self parking</span> </i><br>
            <i class="bi bi-buildings-fill"><span class="px-2">City Veiw</span></i><br>
            <i class="bi bi-person-fill"><span class="px-2">Sleeps 2</span></i><br>
            <i class="bi bi-wifi"><span class="px-2">Free WiFi</span></i><br>
            <i class="fa fa-bed"><span class="px-2">1 Double Bed</span></i>
          </div>
          <div class="row">
            <div class="col-md-8">
              <p class="text-success fs-3">80000 MMK <span class="fs-6">per night</span> </p>

            </div>
            <div class="col-md-4 text-center">
            <input type="submit" value="Book Now" class="btn btn-primary p-2">
            </div>
          </div>
        </div>

        
       </div>

@endsection