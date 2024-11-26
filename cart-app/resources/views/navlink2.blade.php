
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