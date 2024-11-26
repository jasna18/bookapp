<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Haze Foods - Products</title>
</head>
<body>
    <header class="bg-light p-3">
        <div class="container">
            <h1 class="logo">Haze Foods</h1>
            <nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar">
      <button class="navbar-toggler " 
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarNavDropdown01" 
                        aria-controls="navbarNavDropdown01"
                        aria-expanded="false" 
                        aria-label="Toggle navigation"
                        style="outline-color:#fff">
                    <span class="navbar-toggler-icon"></span>
          </button>

                <div class="collapse navbar-collapse"
                     id="navbarNavDropdown01">

                    <ul class="navbar-nav mx-auto ">
                    <li class="nav-item active">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About </a>
                    </li>
                   <li class="nav-item">
                   <a class="nav-link" href="#">Features</a>
                   </li>
                   <li class="nav-item">
                   <a class="nav-link" href="#">Trending Now  </a>
                   </li>
                     <li class="nav-item">
                   <a class="nav-link" href="#">Best Sellers</a>
                   </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                   </li>
                        <!--dropdown item of menu-->
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link dropdown-toggle" 
                               href="#" id="navbarDropdown" 
                               role="button" data-toggle="dropdown" 
                               aria-haspopup="true"
                               aria-expanded="false">
                              Books
                            </a>
                          
                            <!--dropdown sub items of menu-->
                            <div class="dropdown-menu mt-0 w-100 
                                        shadow border-outline-success" 
                                 aria-labelledby="navbarDropdown">
                                 <div class="container">
                                 <div class="row">
                                 <div class="col">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                                  <a class="dropdown-item" href="#">
                                    Something else here
                                  </a>
                                <a class="dropdown-item" href="#">Action1</a>
                                <a class="dropdown-item" href="#">
                                  Another action2
                                </a>
                                  <a class="dropdown-item" href="#">
                                    Something else here3
                                  </a>
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
                                <a class="dropdown-item" href="#">
                                  Another action2
                                </a>
                                  <a class="dropdown-item" href="#">
                                    Something else here3
                                  </a>
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
                                <a class="dropdown-item" href="#">
                                  Another action2
                                </a>
                                  <a class="dropdown-item" href="#">
                                    Something else here3
                                  </a>
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
                                <a class="dropdown-item" href="#">
                                  Another action2
                                </a>
                                  <a class="dropdown-item" href="#">
                                    Something else here3
                                  </a>
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
                                <a class="dropdown-item" href="#">
                                  Another action2
                                </a>
                                  <a class="dropdown-item" href="#">
                                    Something else here3
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    Something else here3
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    Something else here3
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    Something else here3
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    Something else here3
                                  </a>
                                </div>
                              </div> 
                          </div>
                        </li>
                    </ul>
                  
                 </div>
            </nav>
        </div>
    </header>

    <main class="container mt-5">
        <h2>Our Products</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300?text=Product+1" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Delicious organic apples, perfect for snacking or baking.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300?text=Product+2" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Freshly picked strawberries, sweet and juicy.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300?text=Product+3" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Nutritious kale, perfect for salads and smoothies.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300?text=Product+4" class="card-img-top" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Product 4</h5>
                        <p class="card-text">Succulent tomatoes, ideal for sauces and salads.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300?text=Product+5" class="card-img-top" alt="Product 5">
                    <div class="card-body">
                        <h5 class="card-title">Product 5</h5>
                        <p class="card-text">Crisp cucumbers, refreshing and hydrating.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300?text=Product+6" class="card-img-top" alt="Product 6">
                    <div class="card-body">
                        <h5 class="card-title">Product 6</h5>
                        <p class="card-text">Sweet oranges, packed with vitamin C.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
