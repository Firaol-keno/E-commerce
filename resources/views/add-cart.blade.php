<!doctype html>
<html lang="en">
  
<!-- Mirrored from codervent.com/fobia/demo/ltr/ecommerce-shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 06:38:16 GMT -->
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

    <title>Cart</title>
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
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
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


            <!--start shop cart-->
            <section class="shop-page">
              <div class="shop-container">

                <div class="card shadow-sm border-0">
                  <div class="card-body">
                    <div class="shop-cart">
                      <div class="row">
                        <div class="col-12 col-xl-8">
                          <div class="shop-cart-list">                  
                            @foreach($cartItems as $item)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row align-items-center g-3">
                        <div class="col-12 col-lg-6">
                            <div class="d-lg-flex align-items-start gap-3">
                                <div class="cart-img text-center text-lg-start">
                                    <img src="{{ asset('thumbnails/' . $item->product->thumbnail) }}" class="rounded" width="130" alt="{{ $item->product->product_name }}">
                                </div>
                                <div class="cart-detail text-center text-lg-start">
                                    <h6 class="mb-2">{{ $item->product->product_name }}</h6>
                                    <p class="mb-0">Size: <span>{{ $item->size }}</span></p>
                                    <p class="mb-2">Color: <span>{{ $item->color }}</span></p>
                                    <h5 class="mb-0">${{ $item->product->product_price }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="cart-action text-center">
                                <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="number" class="form-control" name="quantity" value="{{ $item->quantity }}" min="1">
                                    <button type="submit" class="btn btn-primary mt-2" >Update</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="text-center">
                                <div class="d-flex gap-2 justify-content-center justify-content-lg-end">
                                    <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary btn-ecomm remove-from-cart"><i class='bx bx-x-circle'></i>Remove</button>
                                    </form>
                                    <a href="javascript:;" class="btn btn-outline-primary btn-ecomm"><i class='bx bx-heart mx-0'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
                            
                            
                            
                            <div class="card">
                              <div class="card-body">
                                <div class="d-lg-flex align-items-center gap-3">
                                  <a href="{{url('/list-view')}}" class="btn btn-primary btn-ecomm"><i class='bx bx-shopping-bag'></i> Continue Shoping</a>
                                  <a href="javascript:;" class="btn btn-light btn-ecomm ms-auto"><i class='bx bx-x-circle'></i> Clear Cart</a>
                                  <a href="javascript:;" class="btn btn-white btn-ecomm"><i class='bx bx-refresh'></i> Update Cart</a>
                                </div>
                              </div>
                            </div>
							
                          </div>
                        </div>
                        <div class="col-12 col-xl-4">
                          <div class="card">
                            <div class="card-body">
                             <div class="card">
                              <div class="card-body">
                                <p class="fs-5">Apply Discount Code</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Enter discount code">
                                  <button class="btn btn-primary btn-ecomm" type="button">Apply</button>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-body">
                                <p class="fs-5">Estimate Shipping and Tax</p>
                                <div class="my-3 border-top"></div>
                                <div class="mb-3">
                                  <label class="form-label">Country Name</label>
                                  <select class="form-select">
                                    <option selected>United States</option>
                                    <option value="1">Australia</option>
                                    <option value="2">India</option>
                                    <option value="3">Canada</option>
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label">State/Province</label>
                                  <select class="form-select">
                                    <option selected>California</option>
                                    <option value="1">Texas</option>
                                    <option value="2">Canada</option>
                                  </select>
                                </div>
                                <div class="mb-0">
                                  <label class="form-label">Zip/Postal Code</label>
                                  <input type="email" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="card mb-0">
                              <div class="card-body">
                                  <p class="mb-2">Subtotal: <span class="float-end">${{ $subtotal }}</span></p>
                                  <p class="mb-2">Shipping: <span class="float-end">${{ $shipping }}</span></p>
                                  <p class="mb-2">Taxes: <span class="float-end">${{ $taxes }}</span></p>
                                  <p class="mb-0">Discount: <span class="float-end">${{ $discount }}</span></p>
                                  <div class="my-3 border-top"></div>
                                  <h5 class="mb-0">Order Total: <span class="float-end">${{ $total }}</span></h5>
                                  <div class="my-4"></div>
                                  <div class="d-grid">
                                      <a href="{{url('/checkout-detail')}}" class="btn btn-primary btn-ecomm">Proceed to Checkout</a>
                                  </div>
                              </div>
                          </div>
                           </div>
                          </div>
                        </div>
                      </div>
                      <!--end row-->
                    </div>
                  </div>
                 </div>

              </div>
            </section>
            <!--end shop cart-->


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
    <script src="js/cart.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


  </body>

<!-- Mirrored from codervent.com/fobia/demo/ltr/ecommerce-shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 06:38:16 GMT -->
</html>