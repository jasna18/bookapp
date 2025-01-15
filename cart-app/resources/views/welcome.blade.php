       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/stylenew.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styleslider.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!--bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <title>
        @yield('title', 'H&H Books      - Home')
    </title>
    <style>
        /* Container Wrapper */
        .container {
            position: relative;
            width:100%;
            /* width: 1106px; */
            margin: 0 auto;
        }

        /* Swiper container */
        .swiper-container {
            width: 100%;
            overflow: hidden;
        }

        /* Swiper slide card */
        .swiper-slide {
            flex: 0 0 calc(20% - 16.1px); /* Default card width */
            padding-top: 3px;
            height: auto;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }


        /* Navigation buttons */
        .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            top: 70%;
            transform: translateY(-50%);
            width: 35px;
            height: 35px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
            cursor: pointer;
            z-index: 10;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .swiper-button-prev {
            left: 0;
            margin-left: -8px;
        }
        .swiper-button-next:hover
        .swiper-button-prev:hover{
            background-color:#970747;;
        }

        .swiper-button-next {
            right: 0;
            margin-right: -8px;;
        }
        /* Hide buttons dynamically */
        .swiper-button-disabled {
                    display: none !important;
                }

         /* Change arrow size for previous button */
        .swiper-button-prev::after {
            font-size: 15px !important; /* Adjust arrow size */
        }

        /* Change arrow size for next button */
        .swiper-button-next::after {
            font-size: 15px !important;/*djust arrow size */
        }
        
        /* Responsive styles */
        @media screen and (max-width: 1200px) {
            .container {
                width: calc(100% - 4px); /* Fill the screen with 2px margin on left and right */
                margin: 0 auto;
            }

            .swiper-slide {
                flex: 0 0 calc(33.33% - 15px); /* Adjust card size to fit 3 cards */
            }

            .swiper-button-next,
            .swiper-button-prev {
                display: none; /* Hide navigation buttons */ 
            }
        }

        @media screen and (max-width: 768px) {
            .swiper-slide {
                flex: 0 0 calc(50% - 15px); /* Adjust card size to fit 2 cards */
            }
            .container{
                width: calc(100% - 50px); /* Fill the screen with 2px margin on left and right */
                margin: 0 auto;
            }
        }

        @media screen and (max-width: 576px) {
            .swiper-slide {
                flex: 0 0 calc(50% - 15px); /* Single card per row with margin */
            }
            .container{
                width: calc(100% - 45px); /* Fill the screen with 2px margin on left and right */
                margin: 0 auto;
            }
            .new{
                font-size: 17px;
                /* font-weight:normal; */
            }
        }
        @media screen and (max-width: 364px) {
            .new {
                font-size: 15px;
            }
        }

        @media screen and (max-width: 240px) {
            .swiper-slide {
                flex: 0 0 calc(50% - 15px);
                height:auto; /* Single card per row with margin */
            }
            .container{
                width: calc(100% - 5px); /* Fill the screen with 2px margin on left and right */
                margin: 0 auto;
        
        }
    } .card-img-top {
    max-width: 80%;
    height: 230PX;
    border-radius: 5px;
    padding-top:30px;
    /* padding-bottom: 10px; */
    padding-left: 10px ;
    padding-right:10px ;
}

.card-body {
    margin-top:20px;
}

.card-title {
    font-size: 1rem;
    font-weight: bold;
    margin-bottom: 5px;
}

.card-text {
    font-size: 0.9rem;
    color: #555;
    margin-bottom: 10px;
}

.btn-cart {
    padding: 8px 12px;
    font-size: 0.9rem;
    border-radius: 5px;
    cursor: pointer;
    background-color:#770536;
    color: #f9f9f9;
}

    
    </style>
    </head>
<body>
<main>
<header class="bg-light">
            <div class="top-row col-12 p-2">Free delivery all over UAE on orders above 200DHS</div>
            <!-- <div class="second-row col-12 p-2">November dates are open now-></div> -->
            <div class="hidden-xs third-row col-12 p-20 d-none d-lg-block">
            <h1 class="logow">H&H Books</h1>
</div>
<!-- overlay div -->
<div id="myNav" class="overlay"  >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <div class="overlay-content">
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>
</div>
 <!--  -->
           <nav class="navbar navbar-expand-lg navbar-light pt-10">
             <div class="container-fluid" >
              <h1 class="logom d-md-block d-lg-none">H&H Books</h1>
             <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="" 
                    aria-controls="" aria-expanded="false" aria-label="Toggle navigation" style="outline-color:#fff" 
                      onclick="openNav()"> <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav mx-auto " >
                    <li class="nav-item active">
                    <a class="nav-link navbar-link-spacing" href="#">Home</a>

                   </li>
                   <li class="nav-item">
                    <a class="nav-link navbar-link-spacing" href="#">About</a>

                    </li>
                   <li class="nav-item">
                   <a class="nav-link navbar-link-spacing" href="#">Features</a>
                   </li>
                   <li class="nav-item">
                   <a class="nav-link navbar-link-spacing" href="#">Trending Now  </a>
                   </li>
                   <li class="nav-item">
                   <a class="nav-link navbar-link-spacing" href="#">Childerens special </a>
                   </li>
                     <li class="nav-item">
                   <a class="nav-link navbar-link-spacing" href="#">Best Sellers</a>
                   </li>
                  <li class="nav-item">
                    <a class="nav-link navbar-link-spacing" href="contact.html">Contact Us</a>
                   </li> 
                        <!--dropdown item book-->
                         <li class="nav-item dropdown position-static"> 
                          <a class="nav-link navbar-link-spacing dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                            Books
                        </a> 
                          
                            <!--dropdown sub items of menu book-->
                        <div class="dropdown-menu mt-0 w-100" style="border-top-color:#970747;" aria-labelledby="navbarDropdown">
                          <div class="container d-flex justify-content-center">
                            <div class="row ">
                              <div class="col ">
                                   <a class="dropdown-item" href="#">Action</a>
                                     <a class="dropdown-item" href="#">Another action </a>
                                       <a class="dropdown-item" href="#">Something else here </a>
                                         <a class="dropdown-item" href="#">Action1</a>
                                 </div>
                                  <div class="col">
                                    <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">
                                         Another action
                                         </a>
                                           <a class="dropdown-item" href="#">
                                             Something else here
                                              </a>
                                                 <a class="dropdown-item" href="#">Action1</a>
                                  </div>     
                                   <div class="col">
                                      <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">
                                           Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                              Something else here
                                                </a>
                                              <a class="dropdown-item" href="#">Action1</a>              
                                    </div>
                                   <div class="col">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">
                                            Another action
                                          </a>
                                            <a class="dropdown-item" href="#">
                                              Something else here
                                            </a>
                                          <a class="dropdown-item" href="#">Action1</a>
                                </div>
                              </div> 
                            </div>
                         </div>
                       </li>
                    </ul>
                </div>
            </div> 
        </nav> 
     </header>   
     <!-- slider -->
  <div class="slideshow-container border slider-spacing">
      <div class="mySlides fade">
        <img src= "{{asset('images/banner-1.jpg')}}"  style="width:100%" height="100%" alt="1">
      </div>

      <div class="mySlides fade">
        <img src="{{asset('images/banner-2.jpg') }}" style="width:100%" height="100%"  alt="2">
      </div>

      <div class="mySlides fade">
        <img src="{{asset('images/banner-4.jpg') }}" style="width:100%" height="100%"  alt="3">
      </div>

      <div style="text-align:center;padding-top:10px;">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>
      <div class="container mt-4">
      <div class="row">
    <div class="col-6 mb-4 text-left new">New Releases</div>
    <div class="col-6  text-right mb-4 text"><button class="btn" id="view-all-btn" onclick="myFunction()">view all</button>
    </div>
  </div>
      <div class="swiper-container swiper1">
      <div class="swiper-wrapper">
                <!-- Product cards -->
                <div class="swiper-slide">
                    <img src="{{asset('images/output-1.jpg') }}" class="card-img-top img-fluid" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Description for <br> Product 1.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-2.jpg') }}" class="card-img-top img-fluid" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Description for <br> Product 2.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-3.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Description for <br> Product 3.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 4</h5>
                        <p class="card-text">Description for <br> Product 4.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-5.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 5</h5>
                        <p class="card-text">Description for <br> Product 5.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-6.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 6</h5>
                        <p class="card-text">Description for <br> Product 6.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 7</h5>
                        <p class="card-text">Description for <br> Product 7.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 8</h5>
                        <p class="card-text">Description for <br> Product 8.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 9</h5>
                        <p class="card-text">Description for <br> Product 9.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 10</h5>
                        <p class="card-text">Description for <br> Product 10.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 11</h5>
                        <p class="card-text">Description for <br> Product 11.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 12</h5>
                        <p class="card-text">Description for <br> Product 12.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 13</h5>
                        <p class="card-text">Description for <br> Product 13.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 14</h5>
                        <p class="card-text">Description for <br> Product 14.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 15</h5>
                        <p class="card-text">Description for <br> Product 15.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
               <!-- swiper wrapper ends -->
            </div>
            <!-- Add more products as needed -->
            <!-- Navigation buttons -->
            <div class="swiper-button-prev swiper1-prev"></div>
            <div class="swiper-button-next swiper1-next"></div>
            <!-- swiper container ends -->
      </div>
      <!-- conatiner ends herr -->
    </div>
 <!-- 30%^OFF DIV STARTS  -->
 <div class="container mt-4">
 <div class="row">
    <div class="col-6 mb-4 text-left new">30% off</div>
    <div class="col-6  text-right mb-4"><button class="btn" id="view-all-btn" onclick="myFunction()">view all</button> </div>
    </div>
 <div class="swiper-container swiper2">
 <div class="swiper-wrapper">
                <!-- Product cards -->
                <div class="swiper-slide">
                    <img src="{{asset('images/output-6.jpg') }}" class="card-img-top img-fluid" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Description for <br> Product 1.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-6.jpg') }}" class="card-img-top img-fluid" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Description for <br> Product 2.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-5.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Description for <br> Product 3.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 4</h5>
                        <p class="card-text">Description for <br> Product 4.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-3.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 5</h5>
                        <p class="card-text">Description for <br> Product 5.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-2.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 6</h5>
                        <p class="card-text">Description for <br> Product 6.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-1.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 7</h5>
                        <p class="card-text">Description for <br> Product 7.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 8</h5>
                        <p class="card-text">Description for <br> Product 8.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 9</h5>
                        <p class="card-text">Description for <br> Product 9.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 10</h5>
                        <p class="card-text">Description for <br> Product 10.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 11</h5>
                        <p class="card-text">Description for <br> Product 11.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 12</h5>
                        <p class="card-text">Description for <br> Product 12.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 13</h5>
                        <p class="card-text">Description for <br> Product 13.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 14</h5>
                        <p class="card-text">Description for <br> Product 14.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 15</h5>
                        <p class="card-text">Description for <br> Product 15.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
               <!-- swiper wrapper ends -->
            </div>
            <!-- Add more products as needed -->
            <!-- Navigation buttons -->
            <div class="swiper-button-prev swiper2-prev"></div>
            <div class="swiper-button-next swiper2-next"></div>
            <!-- swiper container ends -->
            </div>
             <!-- conatiner ends here  -->
    </div>
      <!-- slider end -->
</div> 

<footer class="footer">
    <div class="footer-container">
        <p>&copy; 2024 My Website. All Rights Reserved.</p>
        <ul class="footer-links">
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/privacy">Privacy Policy</a></li>
            <li><a href="/terms">Terms of Service</a></li>
        </ul>
    </div>
</footer>


<!-- body -->
 <!-- end -->
    </body>
    </main>
     <script>
function openNav() 
{
  document.getElementById("myNav").style.width = "100%"

}
function closeNav() {
  document.getElementById("myNav").style.width = "0%"
}
</script>

<script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" actives", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " actives";
  setTimeout(showSlides, 1580); // Change image every 2 seconds
}
    </script>

<script>
function myFunction(){  // Redirect to the new page where all cards are shown
    window.location.href ="{{ route('all_new_release') }}";
};
    </script>

 </main>

    <!--bootsrtap js-->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<!-- <script type="text/javascript" src="{{asset('assets/js/slider.js')}}"></script>   -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        // Initialize the first swiper
        const swiper1 = new Swiper('.swiper1', {
            slidesPerView: "auto",
            slidesPerGroup: 5,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper1-next',
                prevEl: '.swiper1-prev',
            },
            loop: false,
            centeredSlides: false,
        });

        // Initialize the second swiper
        const swiper2 = new Swiper('.swiper2', {
            slidesPerView: "auto",
            slidesPerGroup: 5,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper2-next',
                prevEl: '.swiper2-prev',
            },
            loop: false,
            centeredSlides: false,
        });
    </script>
</body>
</html>