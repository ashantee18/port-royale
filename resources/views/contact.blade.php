@extends('includes.app')
@section('content')
<div class="banner">
  <div class="banner-image contact-banner">
    <h1>Contact Us</h1>
  </div>
</div>
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="icon-contact">
          <i class="icon-phone"></i>
        </div>
        <h5 class="contact-deets">Telephone Number:</h5>
        <p class="text-center"><br> (035) 527 5650</p>
      </div>
      <div class="col-md-4">
        <div class="icon-contact">
          <i class="icon-envelope"></i>
        </div>
        <h5 class="contact-deets">Email:</h5>
        <p class="text-center"><br> portroyalewaterpark@gmail.com</p>
      </div>
      <div class="col-md-4">
        <div class="icon-contact">
          <i class="icon-location-pin"></i>
        </div>
        <h5 class="contact-deets">Address:</h5>
        <p class="text-center">Sto. Niño Drive, Mangnao,<br> Dumaguete City, <br> Negros Oriental 6200</p>
      </div>
    </div>
    <div class="mapouter c-map">
      <div class="gmap_canvas">
      <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Port%20Royale%20WaterPark%20Sto.%20Ni%C3%B1o%20Drive%2C%20Mangnao%2C%20Dumaguete%20City%2C%20Negros%20Oriental%206200&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')
@stop
