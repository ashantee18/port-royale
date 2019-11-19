@extends('includes.app')
@section('content')
<div class="banner">
  <div class="banner-image">
    <div class="container">
      <div class="banner-content">
      </div>
      <!-- <div class="banner-book">
        <form class="form-inline">
          <div class="row">
            <div class="col-md">
              <label class="" for="">Check In</label>
              <input type="date" class="form-control mb-2 mr-sm-2" id="">
            </div>
            <div class="col-md">
              <label class="" for="">Check Out</label>
              <input type="date" class="form-control mb-2 mr-sm-2" id="">
            </div>
            <div class="col-md">
              <label class="" for="">Rooms</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="">
            </div>
            <div class="col-md">
              <label for="">&nbsp;</label>
              <button type="submit" class="btn mb-2">Search</button>
            </div>
          </div>
        </form>
      </div> -->
    </div>
  </div>
</div>
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
      <hr>
      <h1>You are in for a treat!</h1>
    </div>
    <div class="treat">
      <div class="row">
        <div class="col-md">
          <img src="{{ asset('/img/1.jpg') }}" alt="">
        </div>
        <div class="col-md">
          <img src="{{ asset('/img/2.jpg') }}" alt="">
        </div>
        <div class="col-md">
          <img src="{{ asset('/img/3.jpg') }}" alt="">
        </div>
      </div>
    </div>
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
                <div class="img-guest dip">
                  <p>Take a Dip</p>
                </div>
              </div>
              <div class="col-md-8 left">
                <div class="img-guest dine">
                  <p>Dine with us!</p>
                </div>
              </div>
              <div class="col-md-12">
                <div class="img-guest stay">
                  <p>Stay with us!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md left">
            <div class="row">
              <div class="col-md-8 left right">
                <div class="img-guest bigger dip">
                  <p>Celebrate with us!</p>
                </div>
                <div class="img-guest smaller2 dip">
                  <p>Tag us!</p>
                </div>
              </div>
              <div class="col-md-4 left">
                <div class="img-guest smaller dip">
                  <p>Know Before <br> You Go</p>
                </div>
                <div class="img-guest smaller dip">
                  <p>Activities & Events</p>
                </div>
                <div class="img-guest smaller dip">
                  <p>Transportation Service</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="intro">
      <h1>Adventure Awaits you...</h1>
    </div>
  </div>
</div>
@include('includes.footer')
@stop
