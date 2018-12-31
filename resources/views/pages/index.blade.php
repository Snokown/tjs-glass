@extends('layouts.app')

@section('pageTitle')
    Home
@endsection

@section('assets')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div data-spy="scroll" data-target="#main-navbar" data-offset="0">

  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="http://lorempixel.com/1920/1080" alt="First slide">
        <div class="carousel-caption">
            <h5>This is slide 1</h5>
            <p>with some smaller text</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1920/1080" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img src="http://lorempixel.com/1920/1080" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div id="about" class="row">
    <div class="col-md-6 bg-primary p-5">
        <p class="text-white">Blue</p>
    </div>
    <div class="col-md-6 bg-danger p-5">
        <p class="text-white">Red</p>
    </div>
  </div>

</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/carousel.js')}}"></script>
@endsection