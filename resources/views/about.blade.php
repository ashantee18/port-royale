@extends('includes.app')
@section('content')
<div class="banner">
  <div class="banner-image about-banner">
        <h1>About Us</h1> 
  </div>
</div>
<div class="content">
  <div class="container">
    <h1 class="text-center">History</h1><br>
    <p class="text-center">
      Port Royale Waterpark Resort is actually inspired by the historical pirate city of "Port Royale", which was located in
      Jamaica during the 17th century. "Port Royal" was the peak destination for pirates voyaging across the Caribbean Sea.
      It was well known that it even catered to some of the most notorious names in the world of piracy. Captain Morgan, Calico Jack
      and even Blackbeard himself! Want to know more about these fascinating tales?
      Visit our resort and discover what then happened to the city amidst its wealth and famed glory days. Trust us, it's a very compelling story.
    </p>
    <br>
    <hr>
    <br>
    <div class="row">
      <div class="col-md-4">
        <img class="w-100"src="{{ asset('/img/about/1.jpg') }}" alt="">
      </div>
      <div class="col-md-4">
        <img class="w-100"src="{{ asset('/img/about/2.jpg') }}" alt="">
      </div>
      <div class="col-md-4">
        <img class="w-100"src="{{ asset('/img/about/3.jpg') }}" alt="">
      </div>
    </div>
    <br>
    <hr>
    <br>
    <h1 class="text-center">About Us</h1><br>
    <p class="text-center">
      Port Royale Waterpark Resort proudly stands at the convenient location of Sto. Nino Drive, Mangnao, Dumaguete City.
      It is the first of its kind for the beautiful city and its gentle people. We are delighted to introduce our Olympic sized 50-meter swimming pool alongside
      our 20-meter kiddie pool--both brought to life by thematic elements and interactive water design. For those who prefer relaxation, our bubbling
      Jacuzzi is just perfect for basking under the sun. We then take you on an adventure with our two thrilling tube slides, and of course, our
      ultimate master slide that is made only for the brave-hearted.
      <br><br>
      What's more, we allow our guests to bring their own food for maximum personalized enjoyment. At the same time, we offer our very own food and cuisine
      whose menu is specifically created to cater the popular appetite. As we aim to offer next level wholesome vacation experiences, we bring you our every
      own hotel amenities for a comfortable and memorable stay. Function event bookings are also available for everyone who desires to celebrate their
      occasions with us.
      <br><br>
      A slow shift from clear sunny day to a bright moonlit evening, Port Royale has its own distinct charm at night.
      With this, we look forward to creating different kinds of experiences with our valued guests.
    </p>
  </div>
</div>
@include('includes.footer')
@stop
