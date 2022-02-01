<header id="header" class="header-section">
    <div class="container">
        <nav class="navbar ">
            <a href="#" class="navbar-brand"><img src="img/logo-dark-01.png" alt="techara studios" style="object-fit: fit; height: 80px; width: auto;"></a>
            <div class="d-flex menu-wrap">
               <div id="mainmenu" class="mainmenu">
                   <ul class="nav">
                        <li><a data-scroll class="nav-link {{ (request()->routeIs('home')) ? 'active' : '' }}" href="{{ route('home') }}">Home<span class="sr-only">(current)</span></a></li>
                        <li><a data-scroll class="nav-link {{ (request()->routeIs('about')) ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
                        <li>
                            <a href="#">Services</a>
                            <ul>
                                <li><a href="#">Software Development</a></li>
                                <li><a href="#">Maintenance & Support</a></li>
                                <li><a href="#">App Development</a></li>
                                <li><a href="#">Software Architecture</a></li>
                                <li><a href="#">Cloud Management</a></li>
                            </ul>
                        </li>
                        {{-- <li><a data-scroll class="nav-link" href="#feature">Features</a></li>
                        <li><a data-scroll class="nav-link" href="#reviews">Reviews</a></li>
                        <li><a data-scroll class="nav-link" href="#pricing">Pricing</a></li> --}}
                        {{-- <li><a data-scroll class="nav-link" href="#faq">Faqs</a></li> --}}
                        <li><a class="nav-link {{ (request()->routeIs('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
               </div>
               <div class="header-right">
                     <a class="menu-btn anim-btn" href="#">Get Started<span></span></a>
                </div>
            </div>
        </nav>
    </div>
</header>
