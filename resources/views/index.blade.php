@extends('includes.app')
@section('content')
@include('includes.banner')

<div class="content">
  <div class="container">
    <div class="intro">
      <h1>Welcome to Port Royale Waterpark Resort!</h1>
      <br>
      <p>
        Prepare for a thrilling experience as you step in the world of pirates and adventure. <br><br>
        Inspired by the most infamous pirate city during the 17th century,
        Port Royale offers up-close oceanic experiences through captivating storytelling,
        interactive water creation and brand new facilities.
        <br><br>
        A true ensemble of old tales and the new age,
      </p><br>
    </div>
  </div>
</div>
<div class="content b-content">
  <div class="container">
    <h1 class="text-center">You are in for a treat!</h1>
    <div class="treat">
      <div class="row">
        <div class="col-md">
          <img src="{{ asset('/img/home/c1.jpg') }}" alt="">
        </div>
        <div class="col-md">
          <img src="{{ asset('/img/home/c2.jpg') }}" alt="">
        </div>
        <div class="col-md">
          <img src="{{ asset('/img/home/c3.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="content">
  <div class="container">
    <div class="intro">
      <h4>OPENING HOURS: 8:00AM TO 10:00PM</h4>
      <br>
      <p>Beat the heat while taking a dip in our pools while we provide comfort for your every need.</p>
    </div>
    <hr>
    <div class="intro">
      <h2>Be Our Guest</h2>
      <div class="guest">
        <div class="row">
          <div class="col-md">
            <div class="row">
              <div class="col-md-4 right">
                <a href="{{ url('services#rental') }}">
                  <div class="img-guest dip">
                    <p>Take a Dip</p>
                  </div>
                </a>
              </div>
              <div class="col-md-8 left">
                <a href="{{ url('services#restaurant') }}">
                  <div class="img-guest dine">
                    <p>Dine with us!</p>
                  </div>
                </a>
              </div>
              <div class="col-md-12">
                <a href="{{ url('hotel') }}">
                  <div class="img-guest stay">
                    <p>Stay with us!</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md left">
            <div class="row">
              <div class="col-md-8 left right">
                <a href="{{ url('services#function') }}">
                  <div class="img-guest bigger celeb">
                    <p>Celebrate with us!</p>
                  </div>
                </a>
                <a href="{{ url('contact') }}">
                  <div class="img-guest smaller2 tag">
                    <p>Tag us!</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 left">
                <a href="{{ url('') }}">
                  <div class="img-guest smaller know">
                    <p>Know Before <br> You Go</p>
                  </div>
                </a>
                <a href="{{ url('news') }}">
                  <div class="img-guest smaller act">
                    <p>Activities & Events</p>
                  </div>
                </a>
                <a href="{{ url('services#transpo') }}">
                  <div class="img-guest smaller transpo">
                    <p>Transportation Service</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="content o-content">
  <div class="container">
    <div class="intro">
      <h1>Adventure awaits you...</h1>
    </div>
    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Port%20Royale%20WaterPark%20Sto.%20Ni%C3%B1o%20Drive%2C%20Mangnao%2C%20Dumaguete%20City%2C%20Negros%20Oriental%206200&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')
@stop
