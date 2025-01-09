<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styleslider.css')}}">


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!--bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <title>
        @yield('title', 'H&H Books      - Home')
    </title>
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
<div class="slideshow-container">
<div class="content mt-4">
    <h3 class="new">New Releases</h3>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Description for Product 1.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top" alt="Product 1">

                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Description for Product 2.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Description for Product 3.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Product 4</h5>
                        <p class="card-text">Description for Product 4.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top" alt="Product 5">
                    <div class="card-body">
                        <h5 class="card-title">Product 5</h5>
                        <p class="card-text">Description for Product 5.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top" alt="Product 6">
                    <div class="card-body">
                        <h5 class="card-title">Product 6</h5>
                        <p class="card-text">Description for Product 5.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top" alt="Product 7">
                    <div class="card-body">
                        <h5 class="card-title">Product 7</h5>
                        <p class="card-text">Description for Product 5.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top" alt="Product 8">
                    <div class="card-body">
                        <h5 class="card-title">Product 8</h5>
                        <p class="card-text">Description for Product 5.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top" alt="Product 8">
                    <div class="card-body">
                        <h5 class="card-title">Product 8</h5>
                        <p class="card-text">Description for Product 5.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top" alt="Product 9">
                    <div class="card-body">
                        <h5 class="card-title">Product 8</h5>
                        <p class="card-text">Description for Product 5.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top" alt="Product 8">
                    <div class="card-body">
                        <h5 class="card-title">Product 8</h5>
                        <p class="card-text">Description for Product 5.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset('images/output-4.jpg') }}" class="card-img-top" alt="Product 9">
                    <div class="card-body">
                        <h5 class="card-title">Product 8</h5>
                        <p class="card-text">Description for Product 5.</p>
                        <button class="btn btn-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
      <!-- row -->
      </div>
 <!-- content -->
 </div>
    <!-- slider contaimer end -->
</div>    
<!-- slider end -->
<!-- body -->

 <!-- end -->
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
