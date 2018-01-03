@extends('layouts.menu')
    
@section('content')
<div class="container">

  <div class="row" >
 <div class="col-md-5 col-md-offset-3" style="margin-top: 15%">
<img src="img/logo-slogan.png" alt="logo" class="img-responsive">
</div>
        <div class="col-md-10" style="margin-left: 50px; margin-top: 50px">
           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://5pgtruckparts.vitaminaonline.com.mx/images/banner-quienesomos.jpg" alt="">
      <div class="carousel-caption">
  
      </div>
    </div>
    <div class="item">
      <img src="http://5pgtruckparts.vitaminaonline.com.mx/images/banner-quienesomos.jpg" alt="">
      <div class="carousel-caption">
     
      </div>
    </div>
 
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>

    </div>
 
</div>
@endsection
