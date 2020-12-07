@extends('layouts.main')


@section('content')
 <!-- Hero Section-->
    <section class="hero py-6">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb pl-0 ">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Your profile        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading">Your profile</h1>
          <div><p class="lead text-muted">Maecenas sollicitudin. In rutrum. In convallis. Nunc tincidunt ante vitae massa. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Fusce dui leo, imperdiet in.</p></div>
        </div>
      </div>
    </section>
    <section class="pb-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-xl-9 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="mb-5">Change your password</h3>
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-label" for="password_old">Old password</label>
                      <input class="form-control" id="password_old" type="password">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-label" for="password_1">New password</label>
                      <input class="form-control" id="password_1" type="password">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-label" for="password_2">Retype new password</label>
                      <input class="form-control" id="password_2" type="password">
                    </div>
                  </div>
                </div>
                <div class="mt-4">
                  <button class="btn btn-dark" type="submit"><i class="far fa-save mr-2"></i>Change password</button>
                </div>
              </form>
            </div>
            <hr class="mb-5">
            <h3 class="mb-5">Personal details</h3>
            <form>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label" for="firstname">Firstname</label>
                    <input class="form-control" id="firstname" type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label" for="lastname">Lastname</label>
                    <input class="form-control" id="lastname" type="text">
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label" for="company">Company</label>
                    <input class="form-control" id="company" type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label" for="street">Street</label>
                    <input class="form-control" id="street" type="text">
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label class="form-label" for="city">Company</label>
                    <input class="form-control" id="city" type="text">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label class="form-label" for="zip">ZIP</label>
                    <input class="form-control" id="zip" type="text">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label class="form-label" for="state">State</label>
                    <select class="form-control" id="state"></select>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label class="form-label" for="country">Country</label>
                    <select class="form-control" id="country"></select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label" for="phone">Telephone</label>
                    <input class="form-control" id="phone" type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label" for="emailAccount">Email</label>
                    <input class="form-control" id="emailAccount" type="text">
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="mt-4"></div>
              <button class="btn btn-dark" type="submit"><i class="far fa-save mr-2"></i>Save changes</button>
            </form>
          </div>
          <!-- Customer Sidebar-->
          <div class="col-xl-3 col-lg-4 mb-5">
            <div class="customer-sidebar card border-0"> 
              <div class="customer-profile"><a class="d-inline-block" href="customer-account.html#"><img class="img-fluid rounded-circle customer-image" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/avatar/avatar-0.jpg" alt=""></a>
                <h5>Jane Doe</h5>
                <p class="text-muted text-sm mb-0">Los Angeles, CA</p>
              </div>
              <nav class="list-group customer-nav"><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-orders.html"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#paper-bag-1"> </use>
                    </svg>Orders</span>
                  <div class="badge badge-pill badge-dark font-weight-normal px-3">5</div></a><a class="active list-group-item d-flex justify-content-between align-items-center" href="customer-account.html"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#male-user-1"> </use>
                    </svg>Profile</span></a><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-addresses.html"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#real-estate-1"> </use>
                    </svg>Addresses</span></a><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-wishlist.html"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#heart-1"> </use>
                    </svg>Wishlist</span></a><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-login.html"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#exit-1"> </use>
                    </svg>Log out</span></a>
              </nav>
            </div>
          </div>
          <!-- /Customer Sidebar-->
        </div>
      </div>
    </section>
    <!-- Sidebar Cart Modal-->
    <div class="modal fade modal-right" id="sidebarCart" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content sidebar-cart-content">
          <div class="modal-header border-0">
            <button class="close modal-close close-rotate" type="button" data-dismiss="modal" aria-label="Close">
              <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
          </div>
          <div class="modal-body px-5 sidebar-cart-body">
            <!-- Empty cart snippet-->
            <!-- In case of empty cart - display this snippet + remove .d-none-->
            <div class="d-none text-center mb-5">
              <svg class="svg-icon w-3rem h-3rem svg-icon-light mb-4 text-muted">
                <use xlink:href="#retail-bag-1"> </use>
              </svg>
              <p>Your cart is empty </p>
            </div>
            <!-- Empty cart snippet end-->
            <div class="sidebar-cart-product-wrapper custom-scrollbar">
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="customer-account.html#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="customer-account.html#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="customer-account.html#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="customer-account.html#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="customer-account.html#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="customer-account.html#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer sidebar-cart-footer shadow">
            <div class="w-100">
              <h5 class="mb-4">Subtotal: <span class="float-right">$465.32</span></h5><a class="btn btn-outline-dark btn-block mb-3" href="cart.html">View cart</a><a class="btn btn-dark btn-block" href="checkout.html">Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sidebar Modal Right-->
    <div class="modal fade modal-right" id="sidebarRight" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button class="close close-rotate" type="button" data-dismiss="modal" aria-label="Close">
              <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
          </div>
          <div class="modal-body px-5 pb-5">
            <div>
              <h5 class="mb-5" data-aos="zoom-in" data-aos-delay="50">Varkala</h5>
              <ul class="nav flex-column mb-5">
                <li class="nav-item active"><a class="nav-link pl-0" href="customer-account.html#">Home </a></li>
                <li class="nav-item"><a class="nav-link pl-0" href="customer-account.html#">Link</a></li>
                <li class="nav-item"><a class="nav-link pl-0 disabled" href="customer-account.html#">Disabled</a></li>
                <li class="nav-item dropdown"><a class="nav-link pl-0 dropdown-toggle" id="navbarDropdownMenuLink" href="customer-account.html#" data-target="#sidebarSubmenu" data-toggle="collapse" aria-haspopup="true" aria-expanded="false">Dropdown link</a>
                  <div class="collapse" id="sidebarSubmenu">
                    <ul class="nav flex-column ml-3">
                      <li class="nav-item"><a class="nav-link pl-0" href="customer-account.html#">Action</a></li>
                      <li class="nav-item"><a class="nav-link pl-0" href="customer-account.html#">Another action</a></li>
                      <li class="nav-item"><a class="nav-link pl-0" href="customer-account.html#">Something else here                </a></li>
                    </ul>
                  </div>
                </li>
              </ul>
              <ul class="list-inline mb-4">
                <li class="list-inline-item mr-2"><i class="fab fa-facebook-f"> </i></li>
                <li class="list-inline-item mr-2"><i class="fab fa-twitter"> </i></li>
                <li class="list-inline-item mr-2">
                  <svg class="svg-icon mr-2">
                    <use xlink:href="#calls-1"> </use>
                  </svg>020-800-456-747
                </li>
              </ul>
              <p class="text-sm text-muted mb-0">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Modal    -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button class="close close-absolute" type="button" data-dismiss="modal" aria-label="Close">
            <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
              <use xlink:href="#close-1"> </use>
            </svg>
          </button>
          <div class="modal-body p-5">
            <ul class="nav list-inline" role="tablist">
              <li class="list-inline-item"><a class="nav-link nav-link-lg active" data-toggle="tab" href="customer-account.html#loginModalTabLogin" role="tab" id="loginModalLinkLogin" aria-controls="loginModalTabLogin" aria-selected="true">Login</a></li>
              <li class="list-inline-item"><a class="nav-link nav-link-lg" data-toggle="tab" href="customer-account.html#loginModalTabRegister" role="tab" id="loginModalLinkRegister" aria-controls="loginModalTabRegister" aria-selected="false">Register</a></li>
            </ul>
            <hr class="mb-3">
            <div class="tab-content">
              <div class="tab-pane active fade show px-3" id="loginModalTabLogin" role="tabpanel" aria-labelledby="loginModalLinkLogin">
                <form action="customer-orders.html" method="get">
                  <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" id="email" type="text">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <label class="form-label" for="loginPassword"> Password</label>
                      </div>
                      <div class="col-auto"><a class="form-text small" href="customer-account.html#">Forgot password?</a></div>
                    </div>
                    <input class="form-control" name="loginPassword" id="loginPassword" placeholder="Password" type="password" required data-msg="Please enter your password">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="loginRemember" type="checkbox">
                      <label class="custom-control-label text-muted" for="loginRemember"> <span class="text-sm">Remember me for 30 days</span></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-block btn-outline-dark" type="submit"><i class="fa fa-sign-in-alt mr-2"></i> Log in</button>
                  </div>
                </form>
                <hr class="my-3 hr-text letter-spacing-2" data-content="OR">
                <div class="text-center">
                  <button class="btn btn btn-outline-primary letter-spacing-0" data-toggle="tooltip" title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                  <button class="btn btn btn-outline-muted letter-spacing-0" data-toggle="tooltip" title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google</span></button>
                </div>
              </div>
              <div class="tab-pane fade px-3" id="loginModalTabRegister" role="tabpanel" aria-labelledby="loginModalLinkRegister">
                <p class="text-muted text-sm">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit.                                            </p>
                <form action="customer-orders.html" method="get">
                  <div class="form-group">
                    <label class="form-label" for="registerName">Name</label>
                    <input class="form-control" id="registerName" type="text">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="registerEmail">Email</label>
                    <input class="form-control" id="registerEmail" type="text">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="registerPassword">Password</label>
                    <input class="form-control" id="registerPassword" type="password">
                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-block btn-outline-dark" type="submit"><i class="far fa-user mr-2"></i>Register                       </button>
                  </div>
                </form>
                <hr class="my-3 hr-text letter-spacing-2" data-content="OR CONNECT WITH">
                <div class="text-center">
                  <button class="btn btn btn-outline-primary letter-spacing-0" data-toggle="tooltip" title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                  <button class="btn btn btn-outline-muted letter-spacing-0" data-toggle="tooltip" title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google                                      </span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection