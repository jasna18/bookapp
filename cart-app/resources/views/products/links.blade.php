                <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="{{ route('products') }}">Products</a></li>
                            <!-- <h1 class="logo"><a href="{{ route('home') }}">Haze Foods</a></h1> -->
