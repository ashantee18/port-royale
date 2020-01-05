@extends('includes.app')
@section('content')
<div class="banner">
  <div class="banner-image room-banner">
    <h1>Room Details</h1>
  </div>
</div>
<div class="content">
  <div class="container">
    <h1 class="text-center">Premier Triple</h1>
    <h4 class="text-center">PHP 5,800 per night</h4>
    <p class="text-center">
      Experience our very own poolside rooms, each with its own private cabana. <br><br>
      <b>Inclusive of: <br>
      Free entrance for 3 guests <br>
      Complimentary breakfast for 3 </b><br><br>
    </p>
    <div class="row">
      <div class="col-md-6">
        <img class="w-100"src="{{ asset('/img/home/c1.jpg') }}" alt="">
      </div>
      <div class="col-md-6">
        <p class="hotel-deets">
          <b>3 Single Beds <br></b>
          Electronic key card <br>
          Air-conditioned <br>
          Refrigerator <br>
          Desk with office chair <br>
          50’’ Flat Screen TV with Netflix <br>
          In-room safe <br>
          Shower with heater <br>
          Toilet with built-in bidet <br>
          Free Wifi coming soon <br>
          Personal cabana with table and chairs <br>
          Smart ceiling fan in cabana <br>
        </p>
      </div>
    </div>
  </div>
</div>
<div class="content gcontent">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-center">Deluxe Double</h3><br>
        <h4 class="text-center">PHP 2,500 per night</h4>
        <p class="text-center hotel-deets">
          <b>Inclusive of: <br>
          Free entrance for 2 guests<br><br>
          1 Double Bed</b><br>
          Air-conditioned<br>
          Refrigerator<br>
          Desk with chair<br>
          Ample universal outlets<br>
          Shower with heater<br>
          Cabinet for storage   <br>
        </p>
      </div>
      <div class="col-md-4">
        <h3 class="text-center">Deluxe Twin</h3><br>
        <h4 class="text-center">PHP 3,500 per night</h4>
        <p class="text-center hotel-deets">
          <b>Inclusive of: <br>
          Free entrance for 2 guests<br><br>
          2 Single Beds with Pullouts</b><br>
          Air-conditioned<br>
          Refrigerator<br>
          Desk with chair<br>
          Ample universal outlets<br>
          Shower with heater<br>
          Cabinet for storage   <br>
        </p>
      </div>
      <div class="col-md-4">
        <h3 class="text-center">Family Oceanview Room</h3><br>
        <h4 class="text-center">PHP 6,500 per night</h4>
        <p class="text-center  hotel-deets">
          <b>Inclusive of: <br>
          Free entrance for 6 guests<br><br>
          1 King and 4 Single Beds</b><br>
          Balcony facing the beach <br>
          Air-conditioned <br>
          Refrigerator <br>
          Desk with chair <br>
          Ample universal outlets <br>
          Shower with heater <br>
          Toilet with bidet <br>
          Cabinet for storage
        </p>
      </div>
    </div>
  </div>
</div>
<div class="content text-center center details">
  <div class="container">
    <p>
      Check-In 2:00 PM | Check-Out 12:00 NN <br><br>
      Book rooms via Call, Email or Walk-in. <br>
      Telephone Number: (035) 527 5650 <br>
      Email: portroyalewaterpark@gmail.com <br>
      Address: Sto. Niño Drive, Mangnao, Dumaguete City, Negros Oriental 6200 <br>
    </p>
    <hr>
    <h2>More rooms coming soon…</h2>
  </div>
</div>
@include('includes.footer')
@stop
