<!--=============== HEADER ===============-->
<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="contact-info">
            <span><i class="fas fa-phone-alt"></i> +234 803 074 3653</span>
            <span><i class="fas fa-envelope"></i> sales@farmglobal.org</span>
        </div>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>

<header class="custom-header">
    <!-- Logo -->
    <a href="{{ route('index') }}" class="logo">
        <img src="{{url('assets/images/logo.png')}}" alt="{{config('app.name')}}">
    </a>

    <!-- Desktop Nav -->
    <nav class="nav" id="nav-menu">
        <ul>
            <li><a class="{{ (request()->is('about-us')) ? 'activeMenu' : '' }}" href="{{ route('about-us')}}">About Us</a></li>
            <li><a class="{{ (request()->is('our-operations')) ? 'activeMenu' : '' }}" href="{{ route('our-operations')}}">Operations</a></li>
            <li><a class="{{ (request()->is('sustainability')) ? 'activeMenu' : '' }}" href="{{ route('sustainability')}}">Sustainability</a></li>
            <li><a class="{{ (request()->is('innovation-technology')) ? 'activeMenu' : '' }}" href="{{ route('innovation-technology')}}">Innovation</a></li>
            <li><a class="{{ (request()->is('investor-relations')) ? 'activeMenu' : '' }}" href="{{ route('investor-relations')}}">Investor Relations</a></li>
            <li><a class="{{ (request()->is('news-media')) ? 'activeMenu' : '' }}" href="#">News</a></li>
            <li><a class="{{ (request()->is('careers')) ? 'activeMenu' : '' }}" href="{{ route('careers')}}">Careers</a></li>
            <li><a class="{{ (request()->is('contact-us')) ? 'activeMenu' : '' }}" href="{{ route('contact-us')}}">Contact Us</a></li>
        </ul>
    </nav>

    <!-- Hamburger -->
    <button class="hamburger" id="menu-toggle">☰</button>
</header>

<!-- Overlay Menu -->
<div id="mobileMenu" class="overlay">
    <button class="close-btn" id="menu-close">&times;</button>
    <a href="{{ route('index') }}" class="logo">
        <img src="{{url('assets/images/logo.png')}}" alt="{{config('app.name')}}" style="height: 100px;">
    </a>
    <div class="overlay-content">
        <li><a class="{{ (request()->is('about-us')) ? 'activeMenu' : '' }}" href="{{ route('about-us')}}">About Us</a></li>
        <li><a class="{{ (request()->is('our-operations')) ? 'activeMenu' : '' }}" href="{{ route('our-operations')}}">Operations</a></li>
        <li><a class="{{ (request()->is('sustainability')) ? 'activeMenu' : '' }}" href="{{ route('sustainability')}}">Sustainability</a></li>
        <li><a class="{{ (request()->is('innovation-technology')) ? 'activeMenu' : '' }}" href="{{ route('innovation-technology')}}">Innovation</a></li>
        <li><a class="{{ (request()->is('investor-relations')) ? 'activeMenu' : '' }}" href="{{ route('investor-relations')}}">Investor Relations</a></li>
        <li><a class="{{ (request()->is('news-media')) ? 'activeMenu' : '' }}" href="#">News</a></li>
        <li><a class="{{ (request()->is('careers')) ? 'activeMenu' : '' }}" href="{{ route('careers')}}">Careers</a></li>
        <li><a class="{{ (request()->is('contact-us')) ? 'activeMenu' : '' }}" href="{{ route('contact-us')}}">Contact Us</a></li>
    </div>
</div>