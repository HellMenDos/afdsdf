@extends('layouts.main')


@section('content')
    <div class="container-fluid container-fluid-px py-6">
      <div class="row">
        <!-- Grid -->
        <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
          <!-- Hero Content-->
          <div class="hero-content pb-5">
            <h1>Jackets and tops</h1>
            <div class="row">   
              <div class="col-xl-8"><p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>                </div>
            </div>
          </div>
          <!-- Breadcrumbs -->
          <ol class="breadcrumb undefined">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Shop                                   </li>
          </ol>
          <header class="product-grid-header">
            <div class="mr-3 mb-3">
               Showing <strong>1-12 </strong>of <strong>158 </strong>products</div>
            <div class="mr-3 mb-3"><span class="mr-2">Show</span><a class="product-grid-header-show active" href="category-full.html#">12    </a><a class="product-grid-header-show " href="category-full.html#">24    </a><a class="product-grid-header-show " href="category-full.html#">All    </a>
            </div>
            <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-2">Sort by</span>
              <select class="selectpicker" name="sort" id="form_sort" data-style="btn-selectpicker border-0" title="">
                <option value="sortBy_0">Default     </option>
                <option value="sortBy_1">Popularity     </option>
                <option value="sortBy_2">Rating     </option>
                <option value="sortBy_3">Newest first     </option>
              </select>
            </div>
          </header>
          <div class="row">


            <div class="col-xl-3 col-sm-4 col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-secondary">Fresh</div><a href="detail-1.html">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0987188250_1_1_1.jpg" alt="product"/><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0987188250_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="category-full.html#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="category-full.html#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="category-full.html#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">White Tee</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>

          </div>
          <nav class="d-flex justify-content-center mb-5 mt-3" aria-label="page navigation">
            <ul class="pagination">
              <li class="page-item"><a class="page-arrow" href="category-full.html#" aria-label="Previous"><span aria-hidden="true"> 
                    <svg class="svg-icon page-icon">
                      <use xlink:href="#angle-left-1"> </use>
                    </svg></span><span class="sr-only">Previous</span></a></li>
              <li class="page-item active"><a class="page-link" href="category-full.html#">1       </a></li>
              <li class="page-item"><a class="page-link" href="category-full.html#">2       </a></li>
              <li class="page-item"><a class="page-link" href="category-full.html#">3       </a></li>
              <li class="page-item"><a class="page-link" href="category-full.html#">4       </a></li>
              <li class="page-item"><a class="page-link" href="category-full.html#">5 </a></li>
              <li class="page-item"><a class="page-arrow" href="category-full.html#" aria-label="Next"><span aria-hidden="true"> 
                    <svg class="svg-icon page-icon">
                      <use xlink:href="#angle-right-1"> </use>
                    </svg></span><span class="sr-only">Next     </span></a></li>
            </ul>
          </nav>
        </div>
        <!-- Sidebar-->
        <div class="sidebar col-xl-3 col-lg-4 pr-xl-5 order-lg-1">
          <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-toggle="collapse" href="category-full.html#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">Product Categories<span class="block-toggler-icon"></span></a>
            <div class="expand-lg collapse" id="categoriesMenu" role="menu">
              <h5 class="sidebar-heading d-none d-lg-block">Category  </h5>
              <div class="sidebar-icon-menu mt-4 mt-lg-0"> 
                <div class="sidebar-icon-menu-item active" data-toggle="collapse" data-target="#subcategories_0" aria-expanded aria-controls="subcategories_0" role="menuitem"> 
                  <div class="d-flex align-items-center">
                    <svg class="svg-icon sidebar-icon">
                      <use xlink:href="#trousers-1"> </use>
                    </svg><a class="sidebar-icon-menu-link font-weight-bold mr-2" href="category-full.html#">Trousers</a><span class="sidebar-icon-menu-count"> 120</span>
                  </div>
                  <div class="collapse show" id="subcategories_0">
                    <ul class="sidebar-icon-menu sidebar-icon-submenu">
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="category-full.html#">Lorem ipsum   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="category-full.html#">Dolor   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="category-full.html#">Sit amet   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="category-full.html#">Donec vitae   </a></li>
                    </ul>
                  </div>
                </div>
                <div class="sidebar-icon-menu-item" data-toggle="collapse" data-target="#subcategories_1" aria-controls="subcategories_1" role="menuitem"> 
                  <div class="d-flex align-items-center">
                    <svg class="svg-icon sidebar-icon">
                      <use xlink:href="#suit-1"> </use>
                    </svg><a class="sidebar-icon-menu-link font-weight-bold mr-2" href="category-full.html#">Jackets</a><span class="sidebar-icon-menu-count"> 55</span>
                  </div>
                  <div class="collapse" id="subcategories_1">
                    <ul class="sidebar-icon-menu sidebar-icon-submenu">
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="category-full.html#">Lorem ipsum   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="category-full.html#">Dolor   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="category-full.html#">Sit amet   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="category-full.html#">Donec vitae   </a></li>
                    </ul>
                  </div>
                </div>
                <div class="sidebar-icon-menu-item" data-toggle="collapse" data-target="#subcategories_2" aria-controls="subcategories_2" role="menuitem"> 
                  <div class="d-flex align-items-center">
                    <svg class="svg-icon sidebar-icon">
                      <use xlink:href="#shirt5-1"> </use>
                    </svg><a class="sidebar-icon-menu-link font-weight-bold mr-2" href="category-full.html#">T-Shirts</a><span class="sidebar-icon-menu-count"> 33</span>
                  </div>
                  <div class="collapse" id="subcategories_2">
                    <ul class="sidebar-icon-menu sidebar-icon-submenu">
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="category-full.html#">Sit amet   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="category-full.html#">Donec vitae   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="category-full.html#">Lorem ipsum   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="category-full.html#">Dolor   </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-toggle="collapse" href="category-full.html#priceFilterMenu" aria-expanded="false" aria-controls="priceFilterMenu">Filter by price<span class="block-toggler-icon"></span></a>
            <div class="expand-lg collapse" id="priceFilterMenu">
              <h5 class="sidebar-heading d-none d-lg-block">Price  </h5>
              <div class="mt-4 mt-lg-0" id="slider-snap"> </div>
              <div class="nouislider-values">
                <div class="min">From $<span id="slider-snap-value-lower"></span></div>
                <div class="max">To $<span id="slider-snap-value-upper"></span></div>
                <input class="slider-snap-input" type="hidden" name="pricefrom" id="slider-snap-input-lower" value="40">
                <input class="slider-snap-input" type="hidden" name="priceto" id="slider-snap-input-upper" value="110">
              </div>
            </div>
          </div>
          <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-toggle="collapse" href="category-full.html#brandFilterMenu" aria-expanded="true" aria-controls="brandFilterMenu">Filter by brand<span class="block-toggler-icon"></span></a>
            <!-- Brand filter menu - this menu has .show class, so is expanded by default-->
            <div class="expand-lg collapse show" id="brandFilterMenu">
              <h5 class="sidebar-heading d-none d-lg-block">Brands </h5>
              <form class="mt-4 mt-lg-0" action="category-full.html#"> 
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="brand0" type="checkbox" name="clothes-brand" checked>
                    <label class="custom-control-label" for="brand0">Calvin Klein <small>(18)</small></label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="brand1" type="checkbox" name="clothes-brand" checked>
                    <label class="custom-control-label" for="brand1">Levi Strauss <small>(30)</small></label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="brand2" type="checkbox" name="clothes-brand">
                    <label class="custom-control-label" for="brand2">Hugo Boss <small>(120)</small></label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="brand3" type="checkbox" name="clothes-brand">
                    <label class="custom-control-label" for="brand3">Tomi Hilfiger <small>(70)</small></label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="brand4" type="checkbox" name="clothes-brand">
                    <label class="custom-control-label" for="brand4">Tom Ford  <small>(110)</small></label>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="sidebar-block px-3 px-lg-0"> <a class="d-lg-none block-toggler" data-toggle="collapse" href="category-full.html#sizeFilterMenu" aria-expanded="false" aria-controls="sizeFilterMenu">Filter by size<span class="block-toggler-icon"></span></a>
            <!-- Size filter menu-->
            <div class="expand-lg collapse" id="sizeFilterMenu"> 
              <h5 class="sidebar-heading d-none d-lg-block">Size </h5>
              <form class="mt-4 mt-lg-0" action="category-full.html#">  
                <div class="form-group mb-1">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="size0" type="radio" name="size" checked>
                    <label class="custom-control-label" for="size0">Small</label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="size1" type="radio" name="size">
                    <label class="custom-control-label" for="size1">Medium</label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="size2" type="radio" name="size">
                    <label class="custom-control-label" for="size2">Large</label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="size3" type="radio" name="size">
                    <label class="custom-control-label" for="size3">X-Large</label>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-toggle="collapse" href="category-full.html#colourFilterMenu" aria-expanded="false" aria-controls="colourFilterMenu">Filter by colour<span class="block-toggler-icon"></span></a>
            <!-- Size filter menu-->
            <div class="expand-lg collapse" id="colourFilterMenu">
              <h5 class="sidebar-heading d-none d-lg-block">Colour </h5>
              <div class="mt-4 mt-lg-0"> 
                <ul class="list-inline mb-0 colours-wrapper">
                  <li class="list-inline-item">
                    <label class="btn-colour" for="colour_sidebar_Blue" style="background-color: #668cb9" data-allow-multiple> </label>
                    <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Blue" id="colour_sidebar_Blue">
                  </li>
                  <li class="list-inline-item">
                    <label class="btn-colour" for="colour_sidebar_White" style="background-color: #fff" data-allow-multiple> </label>
                    <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_White" id="colour_sidebar_White">
                  </li>
                  <li class="list-inline-item">
                    <label class="btn-colour" for="colour_sidebar_Violet" style="background-color: #8b6ea4" data-allow-multiple> </label>
                    <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Violet" id="colour_sidebar_Violet">
                  </li>
                  <li class="list-inline-item">
                    <label class="btn-colour" for="colour_sidebar_Red" style="background-color: #dd6265" data-allow-multiple> </label>
                    <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Red" id="colour_sidebar_Red">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- /Sidebar end-->
      </div>
    </div>
    <!-- Sidebar Cart Modal-->

@endsection