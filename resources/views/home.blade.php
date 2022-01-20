<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MyShop</title>
        <link rel="icon" href="assets/images/items/1.jpg" type="image/x-icon"/>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/css/ui.css" rel="stylesheet">
        <link href="/css/responsive.css" rel="stylesheet">
        
        <link href="/css/all.min.css" rel="stylesheet">
        <script src="/js/jquery.min.js" type="text/javascript"></script>
        <script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
                
    </head>
    <body>
       
<section class="header-main border-bottom">
  <div class="container">
<div class="row align-items-center">

  <div class="col-lg-2 col-6">
    <a href="#" class="brand-wrap">
      MyShop
    </a>
  </div>

  <div class="col-lg-6 col-12 col-sm-12">
    <form action="#" class="search">
      <div class="input-group w-100">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
    </form> 
  </div> 
  <div class="col-lg-4 col-sm-6 col-12">
    <div class="widgets-wrap float-md-right">
      <div class="widget-header  mr-3">
        <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
        <span class="badge badge-pill badge-danger notify">0</span>
      </div>
      <div class="widget-header icontext">
        <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
        <div class="text">
          <span class="text-muted">Welcome!</span>
          <div> 
            <a href="#">Sign in</a> |  
            <a href="#"> Register</a>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div> 
  </div>
</section>
<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i>     All category</strong></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Dress</a>
            <a class="dropdown-item" href="#">Top</a>
            <a class="dropdown-item" href="#">Pants</a>
            <a class="dropdown-item" href="#">Skirt</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Delivery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Payment</a>
        </li>
        <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> English </a>
            <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
            <li><a class="dropdown-item" href="#">Bahasa Indonesia</a></li>
            </ul>
        </li>
      </ul>
      </ul>
    </div> 
  </div> 
</nav>
</header> 

<!-- ========================= SECTION BANNER ========================= -->
<section class="section-intro padding-y-sm">
<div class="container">
<div class="intro-banner-wrap">
  <img src="assets/banner.png" class="img-fluid rounded">
</div>
</div> 
</section>
<!-- ========================= SECTION BANNER END// ========================= -->

<!-- ========================= SECTION FEATURE ========================= -->
<section class="section-content padding-y-sm">
<div class="container">
<article class="card card-body">
<div class="row">
  <div class="col-md-4">  
    <figure class="item-feature">
      <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
      <figcaption class="pt-3">
        <h5 class="title">Delivery</h5>
        <p>We provide various types of shipping services that you can choose and reach all over Indonesia.</p>
      </figcaption>
    </figure> 
  </div>
  <div class="col-md-4">
    <figure  class="item-feature">
      <span class="text-primary"><i class="fa fa-2x fa-landmark"></i></span>  
      <figcaption class="pt-3">
        <h5 class="title">Quality</h5>
        <p>The products we sell use good quality materials so they are comfortable to use and durable.
         </p>
      </figcaption>
    </figure> 
  </div>
    <div class="col-md-4">
    <figure  class="item-feature">
      <span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
      <figcaption class="pt-3">
        <h5 class="title">Security</h5>
        <p>With guaranteed security and provide convenience in transactions.
         </p>
      </figcaption>
    </figure> 
  </div>
</div>
</article>
</div> 
</section>
<!-- ========================= SECTION FEATURE END// ========================= -->

<!-- ========================= SECTION DRESS ========================= -->
<section class="section-content">
<div class="container">
<header class="section-heading">
  <h3 class="section-title">Dress</h3>
</header>
  
<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/blackDress.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Casual Dress</a>
        <span class="text-muted">Plain black sleeveless casual dress is usually used for casual events</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 52 reviews</span>
        </div>
        <div class="price mt-1">Rp 399.900</div> 
      </figcaption>
    </div>
  </div> 
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/brownDress.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Formal Dress</a>
        <span class="text-muted">Brown formal dress with belt, usually used for formal events</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 93 reviews</span>
        </div>
        <div class="price mt-1">Rp 698.899</div> 
      </figcaption>
    </div>
  </div> 
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/redDress.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Sabrina Dress</a>
        <span class="text-muted">Sabrina model red dress, can be used for semi-formal events</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 55 reviews</span>
        </div>
        <div class="price mt-1">Rp 399.998</div> 
      </figcaption>
    </div>
  </div> 
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/blueDress.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Gown</a>
        <span class="text-muted">Long blue party dress with floral embroidered pattern</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 63 reviews</span>
        </div>
        <div class="price mt-1">Rp 1.899.999</div> 
      </figcaption>
    </div>
  </div> 
</div> 
</div> 
</section>
<!-- ========================= SECTION DRESS END// ========================= -->

<!-- ========================= SECTION TOP ========================= -->
<section class="section-content">
<div class="container">
<header class="section-heading">
  <h3 class="section-title">Top</h3>
</header>
  
<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/blouse.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Blouse</a>
        <span class="text-muted">Long sleeve blouse with tassel variation on sleeves</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 182 reviews</span>
        </div>
        <div class="price mt-1">Rp 89.900</div> 
      </figcaption>
    </div>
  </div> 
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/kemejaPutih.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Shirt</a>
        <span class="text-muted">Long sleeve white shirt with striped pattern</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 234 reviews</span>
        </div>
        <div class="price mt-1">Rp 125.899</div> 
      </figcaption>
    </div>
  </div> 
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/kaosAbu.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">T-Shirt</a>
        <span class="text-muted">Plain gray casual t-shirt with no pattern</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 875 reviews</span>
        </div>
        <div class="price mt-1">Rp 67.999</div> 
      </figcaption>
    </div>
  </div> 
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/hoodie.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Hoodie</a>
        <span class="text-muted">Mint green hoodie with thick and quality material</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 567 reviews</span>
        </div>
        <div class="price mt-1">Rp 139.999</div> 
      </figcaption>
    </div>
  </div> 
</div> 
</div> 
</section>
<!-- ========================= SECTION TOP END// ========================= -->

<!-- ========================= SECTION PANTS ========================= -->
<section class="section-content">
<div class="container">
<header class="section-heading">
  <h3 class="section-title">Pants</h3>
</header>
  
<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/flanelpants.webp"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Flanel Pants</a>
        <span class="text-muted">Brown flannel pants with soft and comfortable material</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 202 reviews</span>
        </div>
        <div class="price mt-1">Rp 239.900</div> 
      </figcaption>
    </div>
  </div> 
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/joggerpants.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Jogger Pants</a>
        <span class="text-muted">Jogger pants that are comfortable to use</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 393 reviews</span>
        </div>
        <div class="price mt-1">Rp 90.899</div> 
      </figcaption>
    </div>
  </div> 
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/rippedjeans.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Ripped Jeans</a>
        <span class="text-muted">Ripped jeans casual that is fashionable and cool</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 355 reviews</span>
        </div>
        <div class="price mt-1">Rp 299.998</div> 
      </figcaption>
    </div>
  </div> 
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/kulot.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Cullotes</a>
        <span class="text-muted">Culottes pants with soft and comfortable material</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 363 reviews</span>
        </div>
        <div class="price mt-1">Rp 79.999</div> 
      </figcaption>
    </div>
  </div> 
</div> 
</div> 
</section>
<!-- ========================= SECTION PANTS END// ========================= -->

<!-- ========================= SECTION SKIRT ========================= -->
<section class="section-content">
<div class="container">
<header class="section-heading">
  <h3 class="section-title">Skirt</h3>
</header>
  
<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/tennis.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Tennis Skirt</a>
        <span class="text-muted">Comfortable and fashionable tennis skirt</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 352 reviews</span>
        </div>
        <div class="price mt-1">Rp 123.900</div> 
      </figcaption>
    </div>
  </div> 
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/flare.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Flare Skirt</a>
        <span class="text-muted">Beautiful and fashionable red flare skirt</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 293 reviews</span>
        </div>
        <div class="price mt-1">Rp 138.899</div> 
      </figcaption>
    </div>
  </div> 
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/skirtjeans.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Jeans Skirt</a>
        <span class="text-muted">Cool jeans skirt with fashionable belt</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 155 reviews</span>
        </div>
        <div class="price mt-1">Rp 399.998</div> 
      </figcaption>
    </div>
  </div> 
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/midi.jpeg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Midi Skirt</a>
        <span class="text-muted">Beautiful red midi skirt with pearl accessories</span>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 363 reviews</span>
        </div>
        <div class="price mt-1">Rp 299.999</div> 
      </figcaption>
    </div>
  </div> 
</div> 
</div> 
</section>
<!-- ========================= SECTION SKIRT END// ========================= -->

<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top bg">
  <div class="container">
    <section class="footer-top  padding-y">
      <div class="row">
        <aside class="col-md col-6">
          <h6 class="title">Company</h6>
          <ul class="list-unstyled">
            <li> <a href="#">About us</a></li>
            <li> <a href="#">Career</a></li>
            <li> <a href="#">Find a store</a></li>
            <li> <a href="#">Rules and terms</a></li>
            <li> <a href="#">Sitemap</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Help</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Contact us</a></li>
            <li> <a href="#">Money refund</a></li>
            <li> <a href="#">Order status</a></li>
            <li> <a href="#">Shipping info</a></li>
            <li> <a href="#">Open dispute</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Account</h6>
          <ul class="list-unstyled">
            <li> <a href="#"> User Login </a></li>
            <li> <a href="#"> User register </a></li>
            <li> <a href="#"> Account Setting </a></li>
            <li> <a href="#"> My Orders </a></li>
          </ul>
        </aside>
        <aside class="col-md">
          <h6 class="title">Social</h6>
          <ul class="list-unstyled">
            <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
            <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
            <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
            <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
          </ul>
        </aside>
      </div> 
    </section>  
    <section class="footer-bottom row">
      <div class="col-md-2">
        <p class="text-muted">   2022 MyShop </p>
      </div>
      <div class="col-md-8 text-md-center">
        <span  class="px-2">myshop@gmail.com</span>
        <span  class="px-2">+62-8123456788</span>
      </div>
      <div class="col-md-2 text-md-right text-muted">
        <i class="fab fa-lg fa-cc-visa"></i> 
        <i class="fab fa-lg fa-cc-paypal"></i> 
        <i class="fab fa-lg fa-cc-mastercard"></i>
      </div>
    </section>
  </div>
</footer>
<!-- ========================= FOOTER END // ========================= -->
        
    </body>
</html>