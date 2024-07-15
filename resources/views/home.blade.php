<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Ecommerce</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles/shared/general.css">
  <link rel="stylesheet" href="styles/shared/amazon-header.css">
   <link rel="stylesheet" href="styles/pages/amazon.css">
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand"href="{{ url('/') }}">
            <span>Shop</span>
          </a>
          <div class="navbar-nav">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
            <a class="nav-link" href="about.html">About</a>
           <!-- <a class="nav-link" href="do.html">What we do</a>-->
            <!--<a class="nav-link" href="portfolio.html">Portfolio</a>-->
            <a class="nav-link" href="contact.html">Contact us</a>
              <a class="cart-link header-link" href="{{url('/add-cart')}}">
                <img class="cart-icon" src="images/icons/cart-icon.png">
                <div class="cart-quantity js-cart-quantity"><span id="cart-count">0</span></div>    
                <div class="cart-text">Cart</div>
              </a>
          <div class="user_option">
            <a href="#" id="userIcon">
              <img src="images/user.png" alt="User Icon">
            </a>
            <div id="userMenu" class="user_menu">
              <p>Welcome Guest</p>
              <a href="{{ url('/signin') }}" class="btn btn-primary">Sign In</a>
              <a  href="{{ url('/signup') }}"class="btn btn-secondary">Sign Up</a>
            </div>
          </div>
        </div>
        </nav>
      </div>
    </header>
  </div>

  <section class="who_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/products/plain-hooded-fleece-sweatshirt-yellow.jpg" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Welcome!
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
              veniam, quis nostrud
            </p>
            <div>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- who section -->

  

  <!-- end who section -->


  <!-- work section -->
  <section class="work_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          CREATIVE WORKS
        </h2>
        <p>
          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation
        </p>
      </div>
      <div class="work_container layout_padding2">
        <div class="box b-1">
          <img src="images/products/6-piece-non-stick-baking-set.webp" alt="">
        </div>
        <div class="box b-2">
          <img src="images/products/backpack.jpg" alt="">

        </div>
        <div class="box b-3">
          <img src="images/products/coffeemaker-with-glass-carafe-black.jpg" alt="">

        </div>
        <div class="box b-4">
          <img src="images/products/cotton-bath-towels-teal.webp" alt="">

        </div>
      </div>
    </div>
  </section>



  <div class="main">
     <div class="container">
    <div class="heading_container">
      <h2>
        Available products
      </h2>
      <p>
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation
      </p>
    </div>
    </div>
    <div class="products-grid" js-products-grid>
      <!-- Since We generate an HTML with a JS-->
      @foreach($products as $product)
      <div class="product-container">
          <div class="product-image-container">
            <img class="product-image"
              src="{{ asset('thumbnails/' . $product->thumbnail) }}">
          </div>
  
          <div class="product-name limit-text-to-2-lines">
            {{ $product->category->title }}
          </div>
          <div class="product-name limit-text-to-2-lines">
            {{ $product->product_name }}
          </div>
          <div class="product-rating-container">
            <img class="product-rating-stars"
              src="images/ratings/rating-45.png">
            <div class="product-rating-count link-primary">
              87
            </div>
          </div>
          <div class="product-price">
            ${{ $product->product_price }}
          </div>
          <div class="product-spacer"></div>
          <div class="added-to-cart">
            <img src="images/icons/checkmark.png">
            Added
          </div>
          <form action="{{ route('carts.store') }}" method="POST">
            @csrf 
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input placeholder="Quantity" type="number" class="form-control" name="quantity" value="{{ $product->quantity }}" min="1">
            <button type="submit" class="add-to-cart-button">
              Add to Cart
            </button>
        </form>
        </div>
        @endforeach
      </div>
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About Shop
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location-white.png" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Informations
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div>
                <a href="">
                  <div class="insta-box b-1">
                    <img src="images/insta.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-2">
                    <img src="images/insta.png" alt="">
                  </div>
                </a>
              </div>

              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="images/insta.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="images/insta.png" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="images/insta.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="images/insta.png" alt="">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2024 All Rights Reserved By
      <a href="https://html.design/"></a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->
  <script>
    // Function to fetch and update cart count
    function updateCartCount() {
        $.ajax({
            url: '{{ route('cart.count') }}',
            type: 'GET',
            success: function(response) {
                $('#cart-count').text(response.count);
            }
        });
    }

    updateCartCount();

    function stopUpdatingCartCount() {
        $('#cart-count').text('0'); // Reset cart count display
}
</script>
  <script src="js/script.js"></script>
  <script src="js/cart.js"></script>
</body>
</html>