<div class="nav-contact">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <div class="nav-contact-contents">
          <div class="nav-icon-con">
            <p><i class="icon-phone icons"></i>&nbsp;(035) 527 5650</p>
          </div>
          <div class="nav-icon-con">
            <p>
              <i class="icon-location-pin icons"></i>&nbsp;Dumaguete City
            </p>
          </div>
          <div class="nav-icon-con">
            <p>
              <i class="icon-envelope icons"></i>&nbsp;portroyalewaterpark@gmail.com
            </p>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="nav-contact-contents right">
          <i class="icon-social-facebook icons"></i>
          <i class="icon-social-instagram icons"></i>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="logo-container">
  <img src="{{URL::asset('/img/logo2.png')}}"/>
</div>
<nav class="navbar navbar-expand-lg"> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('about') }}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('services') }}">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('hotel')}}">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('news')}}">News and Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
