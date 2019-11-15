@extends('includes.app')
@section('content')
<div class="banner">
  <div class="banner-image">
    <div class="container">
      <div class="banner-content">
        <h1 class="text-center">LOREM IPSUM DOLOR SIT AMET</h1><br>
      </div>
      <div class="banner-book">
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
      </div>
    </div>
  </div>
</div>
@stop
