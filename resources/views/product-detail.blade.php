<!doctype html>
<html lang="en">
  
<!-- Mirrored from codervent.com/fobia/demo/ltr/ecommerce-product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 06:38:02 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- loader-->
	  <link href="assets/css/pace.min.css" rel="stylesheet" />
	  <script src="assets/js/pace.min.js"></script>

    <!--plugins-->
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="assets/css/dark-theme.css" rel="stylesheet" />
    <link href="assets/css/semi-dark.css" rel="stylesheet" />
    <link href="assets/css/header-colors.css" rel="stylesheet" />

    <title>Product Detail View</title>
  </head>
  <body>
    

 <!--start wrapper-->
    <div class="wrapper">
       <!--start sidebar -->
       <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
          <div>
            <img src="assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon">
          </div>
          <div>
            <h4 class="logo-text">Fobia</h4>
          </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
          <li>
            <a href="{{url('/')}}">
              <div class="parent-icon">
                <ion-icon name="home-outline"></ion-icon>
              </div>
              <div class="menu-title">Home</div>
            </a>
          </li>
          <li>
            <a href="{{url('/dashboard')}}">
              <div class="parent-icon">
                <ion-icon name="home-outline"></ion-icon>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>
            <ul>
              <li><a href="{{url('/grid-view')}}">
                  <ion-icon name="ellipse-outline"></ion-icon>Product Grid
                </a>
              </li>
              <li><a href= "{{url('/list-view')}}">
                  <ion-icon name="ellipse-outline"></ion-icon>Product List
                </a>
              </li>
              <li><a href="{{url('/product-detail')}}">
                  <ion-icon name="ellipse-outline"></ion-icon>Product Details
                </a>
              </li>
              <li><a href="{{url('/add-cart')}}">
                  <ion-icon name="ellipse-outline"></ion-icon>Shoping Cart
                </a>
              </li>
              <li><a href="{{url('/checkout-detail')}}">
                  <ion-icon name="ellipse-outline"></ion-icon>Checkout
                </a>
              </li>
              <li><a href="{{url('/shipping')}}">
                  <ion-icon name="ellipse-outline"></ion-icon>Shipping
                </a>
              </li>
              <li><a href="{{url('/payment')}}">
                  <ion-icon name="ellipse-outline"></ion-icon>Payment
                </a>
              </li>
              <li><a href="{{url('/cart-review')}}">
                  <ion-icon name="ellipse-outline"></ion-icon>Review Cart
                </a>
              </li>
              <li><a href="{{url('/checkout-complete')}}">
                  <ion-icon name="ellipse-outline"></ion-icon>Order Complete
                </a>
              </li>
              @if(Auth::user()->is_admin)
              <li><a href="{{url('/add-product')}}">
                <ion-icon name="ellipse-outline"></ion-icon>Add Product
              </a>
            </li>
            <li><a href="{{url('/add-category')}}">
              <ion-icon name="ellipse-outline"></ion-icon>Add Category
            </a>
          </li>
          <li><a href="{{url('/manage-user')}}">
            <ion-icon name="ellipse-outline"></ion-icon>Manage User
          </a>
        </li>
        <li><a href="{{url('/manage-product')}}">
          <ion-icon name="ellipse-outline"></ion-icon>Manage Product
        </a>
      </li>
          @endif
        </ul>         
        <li class="menu-label">Forms & Tables</li>
          <ul>
            <li> <a href="{{ url('/signin') }}">
              <ion-icon name="ellipse-outline"></ion-icon>Login
            </a>
            </li>
            <li> <a href="{{url('/')}}">
                <ion-icon name="ellipse-outline"></ion-icon>Logout
              </a>
            </li>
            <li> <a href="{{ url('/signup') }}">
              <ion-icon name="ellipse-outline"></ion-icon>Signup
            </a>
          </li>
          </ul>
          <li class="menu-label">Manage Profile</li>
          <li>
            <a href="{{url('/user-profile')}}">
              <div class="parent-icon">
                <ion-icon name="person-circle-outline"></ion-icon>
              </div>
              <div class="menu-title">User Profile</div>
            </a>
          </li>
          <li>
            <a href="{{url('/edit-profile')}}">
              <div class="parent-icon">
                <ion-icon name="create-outline"></ion-icon>
              </div>
              <div class="menu-title">Edit Profile</div>
            </a>
          </li>
          <li class="menu-label">Charts & Maps</li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon">
                <ion-icon name="bar-chart-outline"></ion-icon>
              </div>
              <div class="menu-title">Charts</div>
            </a>
            <ul>
              <li> <a href="charts-apex-chart.html">
                  <ion-icon name="ellipse-outline"></ion-icon>Apex
                </a>
              </li>
              <li> <a href="charts-chartjs.html">
                  <ion-icon name="ellipse-outline"></ion-icon>Chartjs
                </a>
              </li>
              <li> <a href="charts-peity.html">
                <ion-icon name="ellipse-outline"></ion-icon>Peity
              </a>
             </li>
             <li> <a href="charts-other.html">
              <ion-icon name="ellipse-outline"></ion-icon>Other Charts
              </a>
             </li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon">
                <ion-icon name="map-outline"></ion-icon>
              </div>
              <div class="menu-title">Maps</div>
            </a>
            <ul>
              <li> <a href="map-google-maps.html">
                  <ion-icon name="ellipse-outline"></ion-icon>Google Maps
                </a>
              </li>
              <li> <a href="map-vector-maps.html">
                  <ion-icon name="ellipse-outline"></ion-icon>Vector Maps
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-label">Others</li>
          <li>
            <ul>
              <li> <a class="has-arrow" href="javascript:;">
                  <ion-icon name="ellipse-outline"></ion-icon>Level One
                </a>
                <ul>
                  <li> <a class="has-arrow" href="javascript:;">
                      <ion-icon name="ellipse-outline"></ion-icon>Level Two
                    </a>
                    <ul>
                      <li> <a href="javascript:;">
                          <ion-icon name="ellipse-outline"></ion-icon>Level Three
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;">
              <div class="parent-icon">
                <ion-icon name="document-text-outline"></ion-icon>
              </div>
              <div class="menu-title">Documentation</div>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <div class="parent-icon">
                <ion-icon name="link-outline"></ion-icon>
              </div>
              <div class="menu-title">Support</div>
            </a>
          </li>
        </ul>
        <!--end navigation-->
      </aside>
      <!--end sidebar -->
  
      <!--start top header-->
      <header class="top-header">
        <nav class="navbar navbar-expand gap-3">
          <div class="toggle-icon">
            <ion-icon name="menu-outline"></ion-icon>
          </div>
         
          <form class="searchbar">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
              <ion-icon name="search-outline"></ion-icon>
            </div>
            <input class="form-control" type="text" placeholder="Search for anything">
            <div class="position-absolute top-50 translate-middle-y search-close-icon">
              <ion-icon name="close-outline"></ion-icon>
            </div>
          </form>
          <div class="top-navbar-right ms-auto">
  
            <ul class="navbar-nav align-items-center">
              <li class="nav-item">
                <a class="nav-link mobile-search-button" href="javascript:;">
                  <div class="">
                    <ion-icon name="search-outline"></ion-icon>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link dark-mode-icon" href="javascript:;">
                  <div class="mode-icon">
                    <ion-icon name="moon-outline"></ion-icon>
                  </div>
                </a>
              </li>
              <li class="nav-item dropdown dropdown-large dropdown-apps">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                  <div class="">
                    <ion-icon name="apps-outline"></ion-icon>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                  <div class="row row-cols-3 g-3 p-3">
                    <div class="col text-center">
                      <div class="app-box mx-auto bg-gradient-purple text-white">
                        <ion-icon name="cart-outline"></ion-icon>
                      </div>
                      <div class="app-title">Orders</div>
                    </div>
                    <div class="col text-center">
                      <div class="app-box mx-auto bg-gradient-info text-white">
                        <ion-icon name="people-outline"></ion-icon>
                      </div>
                      <div class="app-title">Teams</div>
                    </div>
                    <div class="col text-center">
                      <div class="app-box mx-auto bg-gradient-success text-white">
                        <ion-icon name="shield-checkmark-outline"></ion-icon>
                      </div>
                      <div class="app-title">Tasks</div>
                    </div>
                    <div class="col text-center">
                      <div class="app-box mx-auto bg-gradient-danger text-white">
                        <ion-icon name="videocam-outline"></ion-icon>
                      </div>
                      <div class="app-title">Media</div>
                    </div>
                    <div class="col text-center">
                      <div class="app-box mx-auto bg-gradient-warning text-white">
                        <ion-icon name="file-tray-outline"></ion-icon>
                      </div>
                      <div class="app-title">Files</div>
                    </div>
                    <div class="col text-center">
                      <div class="app-box mx-auto bg-gradient-branding text-white">
                        <ion-icon name="notifications-outline"></ion-icon>
                      </div>
                      <div class="app-title">Alerts</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                  <div class="position-relative">
                    <span class="notify-badge">8</span>
                    <ion-icon name="notifications-outline"></ion-icon>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="javascript:;">
                    <div class="msg-header">
                      <p class="msg-header-title">Notifications</p>
                      <p class="msg-header-clear ms-auto">Marks all as read</p>
                    </div>
                  </a>
                  <div class="header-notifications-list">
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-primary">
                          <ion-icon name="cart-outline"></ion-icon>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                              ago</span></h6>
                          <p class="msg-info">You have recived new orders</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-danger">
                          <ion-icon name="person-outline"></ion-icon>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                              ago</span></h6>
                          <p class="msg-info">5 new user registered</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-success">
                          <ion-icon name="document-outline"></ion-icon>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
                              ago</span></h6>
                          <p class="msg-info">The pdf files generated</p>
                        </div>
                      </div>
                    </a>
  
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-info">
                          <ion-icon name="checkmark-done-outline"></ion-icon>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New Product Approved <span class="msg-time float-end">2 hrs ago</span></h6>
                          <p class="msg-info">Your new product has approved</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-warning">
                          <ion-icon name="send-outline"></ion-icon>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
                              ago</span></h6>
                          <p class="msg-info">5.1 min avarage time response</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-danger">
                          <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
                              ago</span></h6>
                          <p class="msg-info">New customer comments recived</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-primary">
                          <ion-icon name="albums-outline"></ion-icon>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
                              ago</span></h6>
                          <p class="msg-info">24 new authors joined last week</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-success">
                          <ion-icon name="shield-outline"></ion-icon>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
                              ago</span></h6>
                          <p class="msg-info">Successfully shipped your item</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-warning">
                          <ion-icon name="cafe-outline"></ion-icon>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
                              ago</span></h6>
                          <p class="msg-info">45% less alerts last 4 weeks</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <a href="javascript:;">
                    <div class="text-center msg-footer">View All Notifications</div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-user-setting">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                  <div class="user-setting">
                    <img src="{{ asset('avatars/' . $currentUser->avatar) }}" class="user-img" alt="">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex flex-row align-items-center gap-2">
                        <img src="{{ asset('avatars/' . $currentUser->avatar) }}" alt="" class="rounded-circle" width="54" height="54">
                        <div class="">
                          <h6 class="mb-0 dropdown-user-name">{{$currentUser->firstname}} {{$currentUser->lastname}}</h6>
                          <small class="mb-0 dropdown-user-designation text-secondary">{{$currentUser->phone_number}}</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{url('/user-profile')}}">
                      <div class="d-flex align-items-center">
                        <div class="">
                          <ion-icon name="person-outline"></ion-icon>
                        </div>
                        <div class="ms-3"><span>Profile</span></div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="">
                          <ion-icon name="settings-outline"></ion-icon>
                        </div>
                        <div class="ms-3"><span>Setting</span></div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{url('/dashboard')}}">
                      <div class="d-flex align-items-center">
                        <div class="">
                          <ion-icon name="speedometer-outline"></ion-icon>
                        </div>
                        <div class="ms-3"><span>Dashboard</span></div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="">
                          <ion-icon name="wallet-outline"></ion-icon>
                        </div>
                        <div class="ms-3"><span>Earnings</span></div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="">
                          <ion-icon name="cloud-download-outline"></ion-icon>
                        </div>
                        <div class="ms-3"><span>Downloads</span></div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{url('/')}}">
                      <div class="d-flex align-items-center">
                        <div class="">
                          <ion-icon name="log-out-outline"></ion-icon>
                        </div>
                        <div class="ms-3"><span>Logout</span></div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
  
            </ul>
  
          </div>
        </nav>
      </header>
    <!--end top header-->


        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
          <!-- start page content-->
         <div class="page-content">

          <!--start breadcrumb-->
          <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">eCommerce</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                </ol>
              </nav>
            </div>
            <div class="ms-auto">
              <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Settings</button>
                <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else here</a>
                  <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <!--end breadcrumb-->
          <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4">
            <div class="col">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-start gap-2">
                    <div>
                      <p class="mb-0 fs-6">Total Revenue</p>
                    </div>
                    <div class="ms-auto widget-icon-small text-white bg-gradient-purple">
                      <ion-icon name="wallet-outline"></ion-icon>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mt-3">
                    <div>
                      <h4 class="mb-0">$92,854</h4>
                    </div>
                    <div class="ms-auto">+6.32%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-start gap-2">
                    <div>
                      <p class="mb-0 fs-6">Total Customer</p>
                    </div>
                    <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                      <ion-icon name="people-outline"></ion-icon>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mt-3">
                    <div>
                      <h4 class="mb-0">48,789</h4>
                    </div>
                    <div class="ms-auto">+12.45%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-start gap-2">
                    <div>
                      <p class="mb-0 fs-6">Total Orders</p>
                    </div>
                    <div class="ms-auto widget-icon-small text-white bg-gradient-danger">
                      <ion-icon name="bag-handle-outline"></ion-icon>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mt-3">
                    <div>
                      <h4 class="mb-0">88,234</h4>
                    </div>
                    <div class="ms-auto">+3.12%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-start gap-2">
                    <div>
                      <p class="mb-0 fs-6">Conversion Rate</p>
                    </div>
                    <div class="ms-auto widget-icon-small text-white bg-gradient-success">
                      <ion-icon name="bar-chart-outline"></ion-icon>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mt-3">
                    <div>
                      <h4 class="mb-0">48.76%</h4>
                    </div>
                    <div class="ms-auto">+8.52%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>  

          <!--start product detail-->
      @foreach($products as $product)
          <section class="shop-page">
            <div class="shop-container">

              <div class="card shadow-sm border-0">
                <div class="card-body">
                   
                  <div class="product-detail-card">
                    <div class="product-detail-body">
                      <div class="row g-0">
                        <div class="col-12 col-lg-5">
                          <div class="image-zoom-section">
                            <div class="product-gallery owl-carousel owl-theme border rounded mb-3 p-3" data-slider-id="1">
                              <div class="item">
                                <img src="{{ asset('thumbnails/' . $product->thumbnail) }}" class="img-fluid" alt="">
                              </div>
                              <div class="item">
                                <img src="assets/images/product-gallery/02.png" class="img-fluid" alt="">
                              </div>
                              <div class="item">
                                <img src="assets/images/product-gallery/03.png" class="img-fluid" alt="">
                              </div>
                              <div class="item">
                                <img src="assets/images/product-gallery/04.png" class="img-fluid" alt="">
                              </div>
                            </div>
                            <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                              <button class="owl-thumb-item">
                                <img src="assets/images/product-gallery/01.png" class="" alt="">
                              </button>
                              <button class="owl-thumb-item">
                                <img src="assets/images/product-gallery/02.png" class="" alt="">
                              </button>
                              <button class="owl-thumb-item">
                                <img src="assets/images/product-gallery/03.png" class="" alt="">
                              </button>
                              <button class="owl-thumb-item">
                                <img src="assets/images/product-gallery/04.png" class="" alt="">
                              </button>
                            </div>
                          </div>
                        </div>
                        
                        
                        <div class="col-12 col-lg-7">
                          <div class="product-info-section p-3">
                            <h3 class="mt-3 mt-lg-0 mb-0">{{ $product->product_name }}</h3>
                            <div class="product-rating d-flex align-items-center mt-2">
                              <div class="rates cursor-pointer font-13">	<i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-light-4"></i>
                              </div>
                              <div class="ms-1">
                                <p class="mb-0">(24 Ratings)</p>
                              </div>
                            </div>
                            <div class="d-flex align-items-center mt-3 gap-2">
                              <h5 class="mb-0 text-decoration-line-through text-light-3">$49.0</h5>
                              <h4 class="mb-0">${{ $product->product_price }}</h4>
                            </div>
                            <div class="mt-3">
                              <h6>Discription :</h6>
                              <p class="mb-0">{{ $product->product_description }}</p>
                            </div>
                            <dl class="row mt-3">	<dt class="col-sm-3">Product Code</dt>
                              <dd class="col-sm-9">{{ $product->product_code }}</dd>	<dt class="col-sm-3">Delivery</dt>
                              <dd class="col-sm-9">Russia, USA, and Europe</dd>
                            </dl>
                            <div class="row row-cols-auto align-items-center mt-3">
                              <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="row row-cols-auto align-items-center mt-3">
                                    <div class="col">
                                        <label class="form-label">Quantity</label>
                                        <select name="quantity" class="form-select form-select-sm">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Size</label>
                                        <select name="size" class="form-select form-select-sm">
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XS">XS</option>
                                            <option value="XL">XL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 mt-3">
                                    <button type="submit" class="btn btn-primary btn-ecomm">
                                        <i class="bx bxs-cart-add"></i> Add to Cart
                                    </button>
                                    <a href="javascript:;" class="btn btn-light btn-ecomm">
                                        <i class="bx bx-heart"></i> Add to Wishlist
                                    </a>
                                </div>
                            </form>
                        </div>

                            <hr/>
                            <div class="product-sharing">
                              <ul class="list-inline">
                                <li class="list-inline-item "> <a href="javascript:;" class="bg-facebook"><i class='bx bxl-facebook'></i></a>
                                </li>
                                <li class="list-inline-item">	<a href="javascript:;" class="bg-linkedin"><i class='bx bxl-linkedin'></i></a>
                                </li>
                                <li class="list-inline-item">	<a href="javascript:;" class="bg-twitter"><i class='bx bxl-twitter'></i></a>
                                </li>
                                <li class="list-inline-item">	<a href="javascript:;" class="bg-gradient-purple"><i class='bx bxl-instagram'></i></a>
                                </li>
                                <li class="list-inline-item">	<a href="javascript:;" class="bg-google"><i class='bx bxl-google'></i></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--end row-->
                    </div>
                  </div>


                  <!--start product more info-->
                  <div class="product-more-info mt-4">
                    <ul class="nav nav-tabs mb-0" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#discription" role="tab" aria-selected="true">
                          <div class="d-flex align-items-center">
                            <div class="tab-title text-uppercase fw-500">Description</div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#more-info" role="tab" aria-selected="false">
                          <div class="d-flex align-items-center">
                            <div class="tab-title text-uppercase fw-500">More Info</div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#tags" role="tab" aria-selected="false">
                          <div class="d-flex align-items-center">
                            <div class="tab-title text-uppercase fw-500">Tags</div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#reviews" role="tab" aria-selected="false">
                          <div class="d-flex align-items-center">
                            <div class="tab-title text-uppercase fw-500">(3) Reviews</div>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content pt-3">
                      <div class="tab-pane fade" id="discription" role="tabpanel">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
                        <ul>
                          <li>Not just for commute</li>
                          <li>Branded tongue and cuff</li>
                          <li>Super fast and amazing</li>
                          <li>Lorem sed do eiusmod tempor</li>
                        </ul>
                        <p class="mb-1">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone.</p>
                        <p class="mb-1">Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
                      </div>
                      <div class="tab-pane fade" id="more-info" role="tabpanel">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                      </div>
                      <div class="tab-pane fade" id="tags" role="tabpanel">
                        <div class="tags-box w-50">	<a href="javascript:;" class="tag-link">Cloths</a>
                          <a href="javascript:;" class="tag-link">Electronis</a>
                          <a href="javascript:;" class="tag-link">Furniture</a>
                          <a href="javascript:;" class="tag-link">Sports</a>
                          <a href="javascript:;" class="tag-link">Men Wear</a>
                          <a href="javascript:;" class="tag-link">Women Wear</a>
                          <a href="javascript:;" class="tag-link">Laptops</a>
                          <a href="javascript:;" class="tag-link">Formal Shirts</a>
                          <a href="javascript:;" class="tag-link">Topwear</a>
                          <a href="javascript:;" class="tag-link">Headphones</a>
                          <a href="javascript:;" class="tag-link">Bottom Wear</a>
                          <a href="javascript:;" class="tag-link">Bags</a>
                          <a href="javascript:;" class="tag-link">Sofa</a>
                          <a href="javascript:;" class="tag-link">Shoes</a>
                        </div>
                      </div>
                      <div class="tab-pane fade show active" id="reviews" role="tabpanel">
                        <div class="row">
                          <div class="col col-lg-8">
                            <div class="product-review">
                              <h5 class="mb-4">3 Reviews For The Product</h5>
                              <div class="review-list">
                                <div class="d-flex align-items-start">
                                  <div class="review-user">
                                    <img src="assets/images/avatars/01.png" width="65" height="65" class="rounded-circle" alt="" />
                                  </div>
                                  <div class="review-content ms-3">
                                    <div class="rates cursor-pointer fs-6">	<i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star"></i>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                      <h6 class="mb-0">James Caviness</h6>
                                      <p class="mb-0 ms-auto">February 16, 2021</p>
                                    </div>
                                    <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan</p>
                                  </div>
                                </div>
                                <hr/>
                                <div class="d-flex align-items-start">
                                  <div class="review-user">
                                    <img src="assets/images/avatars/02.png" width="65" height="65" class="rounded-circle" alt="" />
                                  </div>
                                  <div class="review-content ms-3">
                                    <div class="rates cursor-pointer fs-6">	<i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star"></i>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                      <h6 class="mb-0">David Buckley</h6>
                                      <p class="mb-0 ms-auto">February 22, 2021</p>
                                    </div>
                                    <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan</p>
                                  </div>
                                </div>
                                <hr/>
                                <div class="d-flex align-items-start">
                                  <div class="review-user">
                                    <img src="assets/images/avatars/03.png" width="65" height="65" class="rounded-circle" alt="" />
                                  </div>
                                  <div class="review-content ms-3">
                                    <div class="rates cursor-pointer fs-6">	<i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star"></i>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                      <h6 class="mb-0">Peter Costanzo</h6>
                                      <p class="mb-0 ms-auto">February 26, 2021</p>
                                    </div>
                                    <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col col-lg-4">
                            <div class="add-review">
                              <div class="form-body p-3 rounded border bg-light">
                                <h5 class="mb-4">Write a Review</h5>
                                <div class="mb-3">
                                  <label class="form-label">Your Name</label>
                                  <input type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                  <label class="form-label">Your Email</label>
                                  <input type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                  <label class="form-label">Rating</label>
                                  <select class="form-select">
                                    <option selected>Choose Rating</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                    <option value="3">5</option>
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label">Example textarea</label>
                                  <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="d-grid">
                                  <button type="button" class="btn btn-primary btn-ecomm">Submit a Review</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end row-->
                      </div>
                    </div>
                  </div>
              <!--end product more info-->

              <!--start similar products-->
                      <div class="d-flex align-items-center mt-3">
                        <h5 class="mb-0">Similar Products</h5>
                        <div class="d-flex align-items-center gap-0 ms-auto">	<a href="javascript:;" class="owl_prev_item fs-2"><i class='bx bx-chevron-left'></i></a>
                          <a href="javascript:;" class="owl_next_item fs-2"><i class='bx bx-chevron-right'></i></a>
                        </div>
                      </div>
                      <hr/>
                      <div class="product-grid">
                        <div class="similar-products owl-carousel owl-theme">
                          <div class="item">
                            <div class="card product-card">
                              <a href="javascript:;" class="position-absolute end-0 top-0 m-3">
									<div class="product-wishlist"> <i class="bx bx-heart"></i>
									</div>
								</a>
                              <img src="assets/images/similar-products/01.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <div class="product-info">
                                  <a href="javascript:;">
                                    <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                  </a>
                                  <a href="ecommerce-product-details.html">
                                    <h6 class="product-name mb-2">Product Short Name</h6>
                                  </a>
                                  <div class="d-flex align-items-center">
                                    <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                      <span class="fs-5">$49.00</span>
                                    </div>
                                    <div class="cursor-pointer ms-auto">	<span>5.0</span>  <i class="bx bxs-star text-warning"></i>
                                    </div>
                                  </div>
                                  <div class="product-action mt-2">
                                    <div class="d-grid gap-2">
                                      <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card product-card">
                              <a href="javascript:;" class="position-absolute end-0 top-0 m-3">
									<div class="product-wishlist"> <i class="bx bx-heart"></i>
									</div>
								</a>
                              <img src="assets/images/similar-products/02.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <div class="product-info">
                                  <a href="javascript:;">
                                    <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                  </a>
                                  <a href="ecommerce-product-details.html">
                                    <h6 class="product-name mb-2">Product Short Name</h6>
                                  </a>
                                  <div class="d-flex align-items-center">
                                    <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                      <span class="fs-5">$49.00</span>
                                    </div>
                                    <div class="cursor-pointer ms-auto">	<span>5.0</span>  <i class="bx bxs-star text-warning"></i>
                                    </div>
                                  </div>
                                  <div class="product-action mt-2">
                                    <div class="d-grid gap-2">
                                      <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card product-card">
                              <a href="javascript:;" class="position-absolute end-0 top-0 m-3">
									<div class="product-wishlist"> <i class="bx bx-heart"></i>
									</div>
								</a>
                              <img src="assets/images/similar-products/03.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <div class="product-info">
                                  <a href="javascript:;">
                                    <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                  </a>
                                  <a href="ecommerce-product-details.html">
                                    <h6 class="product-name mb-2">Product Short Name</h6>
                                  </a>
                                  <div class="d-flex align-items-center">
                                    <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                      <span class="fs-5">$49.00</span>
                                    </div>
                                    <div class="cursor-pointer ms-auto">	<span>4.9</span>  <i class="bx bxs-star text-warning"></i>
                                    </div>
                                  </div>
                                  <div class="product-action mt-2">
                                    <div class="d-grid gap-2">
                                      <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card product-card">
                              <a href="javascript:;" class="position-absolute end-0 top-0 m-3">
									<div class="product-wishlist"> <i class="bx bx-heart"></i>
									</div>
								</a>
                              <img src="assets/images/similar-products/04.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <div class="product-info">
                                  <a href="javascript:;">
                                    <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                  </a>
                                  <a href="ecommerce-product-details.html">
                                    <h6 class="product-name mb-2">Product Short Name</h6>
                                  </a>
                                  <div class="d-flex align-items-center">
                                    <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                      <span class="fs-5">$49.00</span>
                                    </div>
                                    <div class="cursor-pointer ms-auto">	<span>5.0</span>  <i class="bx bxs-star text-warning"></i>
                                    </div>
                                  </div>
                                  <div class="product-action mt-2">
                                    <div class="d-grid gap-2">
                                      <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card product-card">
                              <a href="javascript:;" class="position-absolute end-0 top-0 m-3">
									<div class="product-wishlist"> <i class="bx bx-heart"></i>
									</div>
								</a>
                              <img src="assets/images/similar-products/05.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <div class="product-info">
                                  <a href="javascript:;">
                                    <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                  </a>
                                  <a href="ecommerce-product-details.html">
                                    <h6 class="product-name mb-2">Product Short Name</h6>
                                  </a>
                                  <div class="d-flex align-items-center">
                                    <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                      <span class="fs-5">$49.00</span>
                                    </div>
                                    <div class="cursor-pointer ms-auto">	<span>3.9</span>  <i class="bx bxs-star text-warning"></i>
                                    </div>
                                  </div>
                                  <div class="product-action mt-2">
                                    <div class="d-grid gap-2">
                                      <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card product-card">
                              <a href="javascript:;" class="position-absolute end-0 top-0 m-3">
									<div class="product-wishlist"> <i class="bx bx-heart"></i>
									</div>
								</a>
                              <img src="assets/images/similar-products/06.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <div class="product-info">
                                  <a href="javascript:;">
                                    <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                  </a>
                                  <a href="ecommerce-product-details.html">
                                    <h6 class="product-name mb-2">Product Short Name</h6>
                                  </a>
                                  <div class="d-flex align-items-center">
                                    <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                      <span class="fs-5">$49.00</span>
                                    </div>
                                    <div class="cursor-pointer ms-auto">	<span>5.0</span>  <i class="bx bxs-star text-warning"></i>
                                    </div>
                                  </div>
                                  <div class="product-action mt-2">
                                    <div class="d-grid gap-2">
                                      <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card product-card">
                              <a href="javascript:;" class="position-absolute end-0 top-0 m-3">
									<div class="product-wishlist"> <i class="bx bx-heart"></i>
									</div>
								</a>
                              <img src="assets/images/similar-products/07.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <div class="product-info">
                                  <a href="javascript:;">
                                    <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                  </a>
                                  <a href="ecommerce-product-details.html">
                                    <h6 class="product-name mb-2">Product Short Name</h6>
                                  </a>
                                  <div class="d-flex align-items-center">
                                    <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                      <span class="fs-5">$49.00</span>
                                    </div>
                                    <div class="cursor-pointer ms-auto">	<span>5.0</span>  <i class="bx bxs-star text-warning"></i>
                                    </div>
                                  </div>
                                  <div class="product-action mt-2">
                                    <div class="d-grid gap-2">
                                      <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                
                  <!--end similar products-->                  
                </div>
              </div>					
					</div>
				</section>
				<!--end product detail-->
        @endforeach

          </div>
          <!-- end page content-->
         </div>
         


         <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
         <!--End Back To Top Button-->
  
         <!--start switcher-->
         <div class="switcher-body">
          <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><ion-icon name="color-palette-sharp" class="me-0"></ion-icon></button>
          <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
              <h6 class="mb-0">Theme Variation</h6>
              <hr>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
                <label class="form-check-label" for="LightTheme">Light</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                <label class="form-check-label" for="DarkTheme">Dark</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" value="option3">
                <label class="form-check-label" for="SemiDark">Semi Dark</label>
              </div>
              <hr/>
              <h6 class="mb-0">Header Colors</h6>
              <hr/>
              <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                  <div class="col">
                    <div class="indigator headercolor1" id="headercolor1"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor2" id="headercolor2"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor3" id="headercolor3"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor4" id="headercolor4"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor5" id="headercolor5"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor6" id="headercolor6"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor7" id="headercolor7"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor8" id="headercolor8"></div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
         </div>
         <!--end switcher-->


         <!--start overlay-->
          <div class="overlay nav-toggle-icon"></div>
         <!--end overlay-->

     </div>
  <!--end wrapper-->


    <!-- JS Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
	  <script src="assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
    <script src="assets/js/product-details.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


  </body>

<!-- Mirrored from codervent.com/fobia/demo/ltr/ecommerce-product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 06:38:15 GMT -->
</html>