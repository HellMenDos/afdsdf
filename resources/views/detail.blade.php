@extends('layouts.main')


@section('content')
<section>
      <div class="container-fluid px-xl-7 pt-5 pb-3 pb-lg-6">
        <div class="d-block" id="addToCartAlert">
          <div class="mb-4 mb-lg-5 alert alert-success" role="alert">
            <div class="d-flex align-items-center pr-3">
              <svg class="svg-icon d-none d-sm-block w-3rem h-3rem svg-icon-light flex-shrink-0 mr-3">
                <use xlink:href="#checked-circle-1"> </use>
              </svg>
              <p class="mb-0">Push-up jeans have been added to your cart. <br class="d-inline-block d-lg-none"><a href="cart.html" class="text-reset text-decoration-underline ml-lg-3">View Cart</a></p>
            </div>
            <button class="close close-absolute close-centered opacity-10 text-inherit" type="button" data-dismiss="alert" aria-label="Close">
              <svg class="svg-icon w-2rem h-2rem">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
          </div>
        </div>
        <ul class="breadcrumb undefined">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="category-full.html">Jeans</a></li>
          <li class="breadcrumb-item active">Push-up Jeans            </li>
        </ul>
        <div class="row">
          <div class="col-lg-6 col-xl-7 pt-4 order-2 order-lg-1 photoswipe-gallery"><a class="d-block mb-4" href="img/product/detail-3-gray.jpg" data-caption="Push-up Jeans 1 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
              <div data-toggle="zoom" data-image="img/product/detail-3-gray.jpg"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-3-gray.jpg" alt="Push-up Jeans 1"></div></a><a class="d-block mb-4" href="img/product/detail-1-gray.jpg" data-caption="Push-up Jeans 2 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
              <div data-toggle="zoom" data-image="img/product/detail-1-gray.jpg"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-1-gray.jpg" alt="Push-up Jeans 2"></div></a><a class="d-block mb-4" href="img/product/detail-2-gray.jpg" data-caption="Push-up Jeans 3 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
              <div data-toggle="zoom" data-image="img/product/detail-2-gray.jpg"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-2-gray.jpg" alt="Push-up Jeans 3"></div></a><a class="d-block mb-4" href="img/product/detail-4-gray.jpg" data-caption="Push-up Jeans 4 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
              <div data-toggle="zoom" data-image="img/product/detail-4-gray.jpg"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-4-gray.jpg" alt="Push-up Jeans 4"></div></a><a class="d-block mb-4" href="img/product/detail-5-gray.jpg" data-caption="Push-up Jeans 5 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
              <div data-toggle="zoom" data-image="img/product/detail-5-gray.jpg"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-5-gray.jpg" alt="Push-up Jeans 5"></div></a><a class="d-block mb-4" href="img/product/detail-6.jpg" data-caption="Push-up Jeans 6 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
              <div data-toggle="zoom" data-image="img/product/detail-6.jpg"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-6.jpg" alt="Push-up Jeans 6"></div></a>
          </div>
          <div class="col-lg-6 col-xl-4 pt-4 order-1 order-lg-2 ml-lg-auto">
            <div class="sticky-top" style="top: 100px;">
              <h1 class="mb-4">Push-up Jeans</h1>
              <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                <ul class="list-inline mb-2 mb-sm-0">
                  <li class="list-inline-item h4 font-weight-light mb-0">$65.00</li>
                  <li class="list-inline-item text-muted font-weight-light"> 
                    <del>$90.00</del>
                  </li>
                </ul>
                <div class="d-flex align-items-center text-sm">
                  <ul class="list-inline mr-2 mb-0">
                    <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                    <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                    <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                    <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                    <li class="list-inline-item mr-0"><i class="fa fa-star text-gray-300"></i></li>
                  </ul><span class="text-muted text-uppercase">25 reviews</span>
                </div>
              </div>
              <p class="mb-4 text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
              <form id="buyForm" action="detail-1.html#">
                <div class="row">
                  <div class="col-sm-6 col-lg-12 detail-option mb-4">
                    <h6 class="detail-option-heading">Size <span>(required)</span></h6>
                    <select class="selectpicker" name="size" data-style="btn-selectpicker">
                      <option value="value_0">Small</option>
                      <option value="value_1">Medium</option>
                      <option value="value_2">Large</option>
                    </select>
                  </div>
                  <div class="col-sm-6 col-lg-12 detail-option mb-5">
                    <h6 class="detail-option-heading">Type <span>(required)</span></h6>
                    <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_0"> Hoodie
                      <input class="input-invisible" type="radio" name="material" value="value_0" id="material_0" required>
                    </label>
                    <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_1"> College
                      <input class="input-invisible" type="radio" name="material" value="value_1" id="material_1" required>
                    </label>
                  </div>
                </div>
                <div class="input-group w-100 mb-4">
                  <input class="form-control form-control-lg detail-quantity" name="items" type="number" value="1">
                  <div class="input-group-append flex-grow-1">
                    <button class="btn btn-dark btn-block" type="submit"> <i class="fa fa-shopping-cart mr-2"></i>Add to Cart</button>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-6"><a href="detail-1.html#"> <i class="far fa-heart mr-2"></i>Add to wishlist </a></div>
                  <div class="col-6 text-right">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item mr-2"><a class="text-dark text-hover-primary" href="detail-1.html#"><i class="fab fa-facebook-f"> </i></a></li>
                      <li class="list-inline-item"><a class="text-dark text-hover-primary" href="detail-1.html#"><i class="fab fa-twitter"> </i></a></li>
                    </ul>
                  </div>
                </div>
                <ul class="list-unstyled">
                  <li><strong>Category:</strong> <a class="text-muted" href="detail-1.html#">Jeans</a></li>
                  <li><strong>Tags:</strong> <a class="text-muted" href="detail-1.html#">Leisure</a>, <a class="text-muted" href="detail-1.html#">Elegant</a></li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection