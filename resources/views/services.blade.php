@extends('includes.app')
@section('content')
<div class="banner">
  <div class="banner-image service-banner">
    <h1>Services</h1>
  </div>
</div>
<div class="content">
  <div class="container">
    <h1 class="text-center">Entrance</h1><br>
    <h2 class="text-center"><u>OPENING HOURS: 8:00AM TO 10:00PM</u></h2><br>
    <div class="row s-imgs">
      <div class="col-md-4">
        <img src="{{ asset('/img/services/1e.jpg') }}" alt="" class="w-100 s-img">
      </div>
      <div class="col-md-4">
        <img src="{{ asset('/img/services/2e.jpg') }}" alt="" class="w-100 s-img">
      </div>
      <div class="col-md-4">
        <img src="{{ asset('/img/services/3e.jpg') }}" alt="" class="w-100 s-img">
      </div>
    </div>
    <br><br>
    <h5 class="text-center">ALL-DAY access with unlimited use of water attractions</h5>
    <p class="text-center">
      *Rates are subject to change without prior notice.
    </p>
    <br><br>
    <hr>
    <br><br>
    @include('includes.rental')
  </div>
</div>
<div class="content gcontent">
  <div class="container">
    <h1 class="text-center">Hotel</h1><br><br>
    <p class="text-center">
      We are glad to reveal our new poolside rooms. Each has its own private cabanas and is equipped with good amenities for your quality stay.
      <br><br>
      <a href="{{url('contact')}}"><u><b>Click here</b></u></a> for details. <br><br>
      Stay tuned.. more rooms are coming soon.
    </p>
  </div>
</div>
<div class="content" id="restaurant">
  <div class="container">
    <h1 class="text-center">Food and Beverages</h1><br><br>
    <h3 class="text-center">"PORT ROYALE RESTAURANT"</h3><br>
    <p class="text-center">
      <b>OPENING HOURS: 7:00AM to 10:00PM </b><br>
      Serves Breakfast, Lunch and Dinner <br><br>
      A true taste of Filipino cuisine with menu that is handpicked for your utmost dining experience.
      The restaurant itself has an amazing view of the beach bringing you a fresh and tropical atmosphere.
    </p>
    <br><br>
    <div class="row item-center">
      <div class="col-md-6">
        <h3 class="text-center">"AMANZI POOL BAR"</h3><br>
        <p class="text-center">
          <b>Opening hours: </b><br>
          Refreshing shakes, juices and cocktails that go perfectly with scrumptious snacks<br><br>
          Nothing beats enjoying yout drink of choice paired with mouthwatering treats while still lounging inside our crystal pool. Hurry now,
          Amanzi Pool Bar is buzzed to serve you!
        </p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('/img/services/bar.jpg') }}" alt="" class="w-100">
      </div>
    </div>

  </div>
</div>
<div class="content gcontent" id="function">
  <div class="container">
    <h1 class="text-center">Function and Events</h1><br><br>
    <p class="text-center">
      Plan your celebrations with us. Port Royale Waterpark Resort is a wonderful venue for various events with its function rooms that can cater
      from small to large amounts of guests. <br><br>
      Call our office or personally inquire our exclusive package offers.
    </p>
  </div>
</div>
<div class="content" id="transpo">
  <div class="container">
    <h1 class="text-center">Transportation</h1><br><br>
    <p class="text-center">
      We offer shuttle van service from airport to the resort and vice versa. Plan ahead and let us know of your intended destinations.
      We might be able to take you there! <br><br>
      Explore the island on your own, motorcycle rentals coming soon..
    </p>
  </div>
</div>
<div class="content gcontent">
  <div class="container">
    <h1 class="text-center">Spa and Relaxation</h1><br><br>
    <p class="text-center">
      We did not forget about the people who only want relaxation. Enjoy our spa and massage services, the beachfront breeze and gentle bubbling Jacuzzi.
      <br><br>
      Inquire Front Desk for rates and packages.
    </p>
  </div>
</div>
@include('includes.footer')
@stop
