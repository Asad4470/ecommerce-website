<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.html");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>ecommerce Website</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header" id="header">
      <!-- Top Nav -->
      <div class="top-nav">
        <div class="container d-flex">
          <ul class="d-flex">
          </ul>
        </div>
      </div>
      <div class="navigation">
        <div class="nav-center container d-flex">
          <a href="index.html" class="logo">
            <img src="./images/logo.png" alt="Dans Logo" style="width: 150px; height: auto;">
          </a>
  
          <ul class="nav-list d-flex">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="product.html" class="nav-link">Shop</a>
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
                        <a href="#" class="nav-link"><?php echo "Welcome " . $_SESSION['username'] ?></a>
            </li>
          </ul>
  
          <div class="icons d-flex">
            <a href="login.html" class="icon">
                <i class="bx bx-user"></i>
            </a>
            <a href="settings.php" class="icon">
                <i class="bx bx-cog"></i>
            </a>

            <a href="logout.php" class ="icon">
               <i class="bx bx-log-out"></i>
            </a>
          </div>
        </div>
      </div>

    <div class="hero">
      <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <span class="">New Inspiration 2024</span>
                  <h1 class="">NEW COLLECTION!</h1>
                  <p>Trending from Office  and Home style collection</p>
                  <a href="product.html" class="hero-btn">SHOP NOW</a>
                </div>
                <div class="right">
                    <img class="img1" src="./images/show.png" alt="">
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <span>New Inspiration 2022</span>
                  <h1>THE PERFECT MATCH!</h1>
                  <p>Trending from men's and women's  style collection</p>
                  <a href="product.html" class="hero-btn">SHOP NOW</a>
                </div>
                <div class="right">
                  <img class="img2" src="./images/hero-2.png" alt="">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </header>

    <!-- Categories Section -->
    <section class="section category">
      <div class="cat-center">
        <div class="cat">
          <img src="./images/banner/b33.jpg" alt="" />
          <div>
            <p>Mens collection</p>
          </div>
        </div>
        <div class="cat">
          <img src="./images/banner/b18.jpg" alt="" />
          <div>
            <p>Girls Collection</p>
          </div>
        </div>
        <div class="cat">
          <img src="./images/banner/b34.jpg" alt="" />
          <div>
            <p>Kids Collection</p>
          </div>
        </div>
      </div>
    </section>

    <!-- New Arrivals -->
    <section class="section new-arrival">
      <div class="title">
        <h1>NEW ARRIVALS</h1>
        <p>All the latest picked from designer of our store</p>
      </div>

      <div class="product-center">
        <div class="product-item">
          <div class="overlay">
            <a href="productDetails.html" class="product-thumb">
              <img src="./images/products/f1.jpg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Men</span>
            <a href="productDetails.html">Classical shirt</a>
            <h4>$1500</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/products/f2.jpg" alt="" />
            </a>
            <span class="discount">50%</span>
          </div>

          <div class="product-info">
            <span>Men</span>
            <a href="">Limited Edition</a>
            <h4>$1900</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/products/f6.jpg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Men</span>
            <a href="">Limited Edition</a>
            <h4>$2500</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/products/n3.jpg" alt="" />
            </a>
            <span class="discount">50%</span>
          </div>
          <div class="product-info">
            <span>Men</span>
            <a href="">official Shirt</a>
            <h4>$900</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/products/f8.jpg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Girls</span>
            <a href="">New-arrival</a>
            <h4>$3000</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/products/f6.jpg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Girls</span>
            <a href=""> New-arrival </a>
            <h4>$3800</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/banner/b35.jpg" alt="" />
            </a>
            <span class="discount">50%</span>
          </div>
          <div class="product-info">
            <span>Kids</span>
            <a href="">New-arrival</a>
            <h4>$4000</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/banner/b36.jpg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Kids</span>
            <a href="">New-arrival </a>
            <h4>$4000</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Featured -->

    <!-- Contact -->
    <section class="section contact">
      <div class="row">
        <div class="col">
          <h2>EXCELLENT SUPPORT</h2>
          <p>We love our customers and they can reach us any time
          of day we will be at your service 24/7</p>
          <a href="contact.html" class="btn btn-1">Contact</a>
        </div>
        <div class="col">
          <form action="">
            <div>
              <input type="email" placeholder="Email Address">
            <a href="">Send</a>
            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="row">
        <div class="col d-flex">
          <h4>INFORMATION</h4>
          <a href="about.html">About us</a>
          <a href="contact.html">Contact Us</a>
          <a href="">Term & Conditions</a>
          <a href="">Shipping Guide</a>
        </div>
        <div class="col d-flex">
          <h4>USEFUL LINK</h4>
          <a href="">Online Store</a>
          <a href="">Customer Services</a>
          <a href="">Promotion</a>
          <a href="">Top Brands</a>
        </div>
        <div class="col d-flex">
          <span><i class='bx bxl-facebook-square'></i></span>
          <span><i class='bx bxl-instagram-alt' ></i></span>
          <span><i class='bx bxl-github' ></i></span>
          <span><i class='bx bxl-twitter' ></i></span>
          <span><i class='bx bxl-pinterest' ></i></span>
        </div>
      </div>
    </footer>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</html>
