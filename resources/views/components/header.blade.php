<header id="header" class="header-section">
    <div class="container">
        <nav class="navbar ">
            <a href="#" class="navbar-brand"><img src="img/logo-dark-01.png" alt="techara studios" style="object-fit: fit; height: 80px; width: auto;"></a>
            <div class="d-flex menu-wrap">
               <div id="mainmenu" class="mainmenu">
                   <ul class="nav">
                        <li><a data-scroll class="nav-link {{ (request()->routeIs('home')) ? 'active' : '' }}" href="{{ route('home') }}">Home<span class="sr-only">(current)</span></a></li>
                        <li><a data-scroll class="nav-link {{ (request()->routeIs('about')) ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        {{-- <li><a data-scroll class="nav-link" href="#feature">Features</a></li>
                        <li><a data-scroll class="nav-link" href="#reviews">Reviews</a></li>
                        <li><a data-scroll class="nav-link" href="#pricing">Pricing</a></li> --}}
                        {{-- <li><a data-scroll class="nav-link" href="#faq">Faqs</a></li> --}}
                        <li><a class="nav-link {{ (request()->routeIs('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
               </div>
               <div class="header-right">
                    <button type="button" data-toggle="modal" data-target="#getstarted" class="menu-btn anim-btn">Get Started</button>
                </div>
            </div>
        </nav>
    </div>
</header>

@include('components.getting-started')
