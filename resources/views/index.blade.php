@extends('layouts.main')


@section('content')
        <div class="swiper-container home-slider" style="height: 95vh; min-height: 600px;">
      <!-- Additional required wrapper-->
      <div class="swiper-wrapper">
        <!-- Slides-->
        <div class="swiper-slide bg-cover bg-cover-right" style="background-image: url('https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/photo/home-1-plain.jpg');">
          <div class="container-fluid px-lg-6 px-xl-7 h-100">
            <div class="row h-100 align-items-center" data-swiper-parallax="-500">
              <div class="col-lg-6">
                <p class="subtitle letter-spacing-3 mb-3 text-dark font-weight-light">Our all-time favourites</p>
                <h2 class="display-1 mb-3" style="line-height: 1">Blouses &amp; Tops</h2>
                <p class="text-muted mb-5">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit</p><a class="btn btn-dark" href="index.html#">Discover more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide bg-cover" style="background-image: url('https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/photo/home-2-plain.jpg');">
          <div class="container-fluid px-lg-6 px-xl-7 h-100">
            <div class="row h-100 justify-content-center align-items-center text-center" data-swiper-parallax="-500">
              <div class="col-lg-6">
                <p class="subtitle letter-spacing-3 mb-3 text-dark font-weight-light">Blue &amp; White</p>
                <h2 class="display-1 mb-3" style="line-height: 1">Linen and denim</h2><a class="btn btn-dark" href="index.html#">Start shopping</a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide bg-cover" style="background-image: url('https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/photo/home-3-plain.jpg');">
          <div class="container-fluid px-lg-6 px-xl-7 h-100">
            <div class="row h-100 align-items-center" data-swiper-parallax="-500">
              <div class="col-lg-6 offset-lg-6">
                <p class="subtitle letter-spacing-3 mb-3 text-primary font-weight-light mb-4">Sneakers</p>
                <h2 class="display-1 mb-5" style="line-height: 1">For every occassion</h2><a class="btn btn-dark" href="index.html#">Start shopping</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-nav d-none d-lg-block">
        <div class="swiper-button-prev" id="homePrev"></div>
        <div class="swiper-button-next" id="homeNext"></div>
      </div>
    </div>
@endsection