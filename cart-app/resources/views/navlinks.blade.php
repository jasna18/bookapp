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
                    <a class="nav-link navbar-link-spacing {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link  navbar-link-spacing {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About </a>
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
                        <div class="dropdown-menu mt-0 w-100" style="border-top-color:#ffece6;" aria-labelledby="navbarDropdown">
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
     <script>
function openNav() 
{
  document.getElementById("myNav").style.width = "100%"

}
function closeNav() {
  document.getElementById("myNav").style.width = "0%"
}
</script>