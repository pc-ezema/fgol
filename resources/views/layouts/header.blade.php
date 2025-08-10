<!--=============== HEADER ===============-->
<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="contact-info">
            <span><i class="fas fa-phone-alt"></i> +234 800 123 4567</span>
            <span><i class="fas fa-envelope"></i> info@example.com</span>
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
            <li><a href="#">About Us</a></li>
            <li><a class="{{ (request()->is('our-operations')) ? 'activeMenu' : '' }}" href="{{ route('our-operations')}}">Operations</a></li>
            <li><a href="#">Sustainability</a></li>
            <li><a href="#">Innovation</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a class="{{ (request()->is('news-media')) ? 'activeMenu' : '' }}" href="{{ route('news-media')}}">News</a></li>
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
        <img src="{{url('assets/images/logo.png')}}" alt="{{config('app.name')}}" style="height: 50px;">
    </a>
    <div class="overlay-content">
        <li><a href="#">About Us</a></li>
        <li><a class="{{ (request()->is('our-operations')) ? 'activeMenu' : '' }}" href="{{ route('our-operations')}}">Operations</a></li>
        <li><a href="#">Sustainability</a></li>
        <li><a href="#">Innovation</a></li>
        <li><a href="#">Investor Relations</a></li>
        <li><a class="{{ (request()->is('news-media')) ? 'activeMenu' : '' }}" href="{{ route('news-media')}}">News</a></li>
        <li><a class="{{ (request()->is('careers')) ? 'activeMenu' : '' }}" href="{{ route('careers')}}">Careers</a></li>
        <li><a class="{{ (request()->is('contact-us')) ? 'activeMenu' : '' }}" href="{{ route('contact-us')}}">Contact Us</a></li>
    </div>
</div>