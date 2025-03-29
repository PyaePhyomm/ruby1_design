@extends('master')
@section('title','Home')
@section('content')


<div class="bg-image">        
        <h1>Welcome to Hotel</h1>
        
      </div>
      
      <div class=" bg-dark pt-4">
        <h4 class="text-center text-warning ">Luxury amidst Myanmar's rich heritage</h4>
      <h1 class="text-center text-white">Experience the Ultimate Relaxation in Mandalay</h1>
      <div class="row roomRow">
        <div class="col-md-4 room">
          <div class="roomInfo h-50 w-25">
            <h2 class="text-center pt-3 text-white">Junior Suite</h2>
            <p class="px-5 text-center">The Junior Suite room at Mandalay<br> Hotel is a spacious and luxurious<br> accommodation...</p>
            <div class="row ">
              <div class="col-md-4 ">
                <div class="roomDetail">
                  <i class="bi bi-people text-warning text-center"></i><span class="text-white">1-3 persons</span>
                </div><br>
                <div class="roomDetail">
                  <i class="bi bi-cup-hot text-warning"></i><span>Breakfast</span>
                </div>
              </div>
              <div class="col-md-4 roomDetail">
                <i class="bi bi-water text-warning"></i><span>Swimming pool</span>
              </div>
              <div class="col-md-4 roomDetail">
                <i class="bi bi-wifi text-warning"></i><span>Free WiFi</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 ">
          <img class="roomPhoto" src="{{url('/images/Superior-Twin-Room-3.jpg')}}" alt="image">
        </div>
      </div>
      </div>
    <!-- hotel intro  -->
     <div class="row mt-5">
      <div class="col-md-6 intro">
        <span class=""><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
        <p class="hotelName">Mandalay Hotel</p>
        <h1 class="text-white">Luxuriate In A Haven Of Comfort & Style</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolores praesentium laudantium maxime nostrum sequi repellendus, temporibus eaque dolorum, ex vel sunt exercitationem? Commodi veniam, harum voluptatibus consectetur modi molestiae.</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, necessitatibus natus! Accusantium eos voluptate quaerat repudiandae. Repellendus, rem quod consequatur, earum recusandae quis sed ex a, excepturi vero libero! Accusantium.</p>
        <BR>
          <div class="row">
            <div class="col-md-2">
              <i class="bi bi-telephone-forward-fill "></i>
            </div>
            <div class="col-md-10 pt-2">
              <p>Reservation <br>
                <span class="phno">+959 123456789</span></p>
            </div>
          </div>
          
      </div>
      <div class="col-md-6 intro">
        <div class="row">
          <div class="col-md-6">
            <img src="{{url('/images/Mingalar-Mandalay-Hotel-Porte-LS.jpg')}}" alt="image" class="w-100 h-100 img1">
          </div>
          <div class="col-md-6">
            <img src="{{url('images/Photo-16-East-West-Lawn.jpg')}}" alt="images" class="w-100 h-50 pt-3">
          </div>
        </div>
      </div>
     </div>

@endsection