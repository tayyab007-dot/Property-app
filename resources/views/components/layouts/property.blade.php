


 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Your Name" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/property-template/favicon.png?v=1" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="/property-template/fonts/icomoon/style.css?v=1" />
    <link rel="stylesheet" href="/property-template/fonts/flaticon/font/flaticon.css?v=1" />
    <link rel="stylesheet" href="/property-template/css/tiny-slider.css?v=1" />
    <link rel="stylesheet" href="/property-template/css/aos.css?v=1" />
    <link rel="stylesheet" href="/property-template/css/style.css?v=1" />

    <!-- Your Existing Tailwind/Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>
        @hasSection('title')
            @yield('title')
        @else
            Property
        @endif
    </title>
</head>

<body>
    <!-- Mobile Menu -->
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <!-- Navigation -->
    {{-- <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap shadow-lg" style="background-color: #0a2c60;">
                <div class="site-navigation py-3">
                    <!-- Logo -->
                    <div class="d-flex align-items-center float-start">
                        <a href="/" class="logo m-0 d-flex align-items-center">
                            <img src="/property-template/images/Logo.png" alt="Property Logo" class="me-3" style="height: 75px; width: auto; filter: brightness(1.1) contrast(1.1);">
                        </a>
                    </div>

                    <!-- Brand -->
                    <div class="d-flex align-items-center float-start">
                        <a href="/" class="text-white" style="font-size: 1.5rem; letter-spacing: 0.3px; text-shadow: 1px 1px 2px rgba(0,0,0,0.2);">
                            <span class="fw-bold">Property</span>
                        </a>
                    </div>

                    <!-- Toggle Button for Mobile -->
                    <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>

                    <!-- Navigation Links -->
                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        <li class="{{ request()->is('/') ? 'active' : '' }}">
                            <a href="/" class="nav-link px-3 py-2 text-white hover:text-indigo-200 transition-colors duration-200 {{ request()->is('/') ? 'fw-bold' : '' }}">Home</a>
                        </li>
                        <li class="{{ request()->is('properties*') ? 'active' : '' }}">
                            <a href="{{ route('properties') }}" class="nav-link px-4 py-2 text-white hover:text-indigo-200 transition-colors duration-200 {{ request()->is('properties*') ? 'fw-bold' : '' }}">Properties</a>
                        </li>
                        <li class="{{ request()->is('services*') ? 'active' : '' }}">
                            <a href="{{ route('services') }}" class="nav-link px-4 py-2 text-white hover:text-indigo-200 transition-colors duration-200 {{ request()->is('services*') ? 'fw-bold' : '' }}">Services</a>
                        </li>
                        <li class="{{ request()->is('about*') ? 'active' : '' }}">
                            <a href="{{ route('about') }}" class="nav-link px-4 py-2 text-white hover:text-indigo-200 transition-colors duration-200 {{ request()->is('about*') ? 'fw-bold' : '' }}">About</a>
                        </li>
                        <li class="{{ request()->is('contact*') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}" class="nav-link px-4 py-2 ms-2 text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg transition-all duration-200 {{ request()->is('contact*') ? 'fw-bold' : '' }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> --}}



<!-- Navigation --> 
<nav class="site-nav" style="height: 115px;">
  <div class="container h-100">
    <div class="menu-bg-wrap shadow-lg h-100" style="background-color: #0a2c60;">
      <div class="site-navigation d-flex align-items-center justify-content-between h-100">

        <!-- Left Section (Logo + Brand) -->
        <div class="d-flex align-items-center">
          <!-- Logo -->
          <a href="/" class="logo d-flex align-items-center">
            <img src="/property-template/images/Logo4.png" 
                 alt="Property Logo" 
                 class="me-2" 
                 style="height: 111px; width: auto; filter: brightness(1.1) contrast(1.1);">
          </a>

          <!-- Brand -->
          <a href="/" class="text-white ms-2" 
             style="font-size: 1.3rem; letter-spacing: 0.2px;">
            <span class="fw-bold">Property</span>
          </a>
        </div>

        <!-- Navigation Links -->
        <ul class="js-clone-nav d-none d-lg-flex align-items-center m-0">
          <li class="{{ request()->is('/') ? 'active' : '' }}">
            <a href="/" class="nav-link px-3 text-white {{ request()->is('/') ? 'fw-bold' : '' }}">Home</a>
          </li>
          <li class="{{ request()->is('properties*') ? 'active' : '' }}">
            <a href="{{ route('properties') }}" class="nav-link px-3 text-white {{ request()->is('properties*') ? 'fw-bold' : '' }}">Properties</a>
          </li>
          <li class="{{ request()->is('services*') ? 'active' : '' }}">
            <a href="{{ route('services') }}" class="nav-link px-3 text-white {{ request()->is('services*') ? 'fw-bold' : '' }}">Services</a>
          </li>
          <li class="{{ request()->is('about*') ? 'active' : '' }}">
            <a href="{{ route('about') }}" class="nav-link px-3 text-white {{ request()->is('about*') ? 'fw-bold' : '' }}">About</a>
          </li>
          <li class="{{ request()->is('contact*') ? 'active' : '' }}">
            <a href="{{ route('contact') }}" class="nav-link px-3 ms-2 text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg {{ request()->is('contact*') ? 'fw-bold' : '' }}">Contact Us</a>
          </li>
        </ul>

        <!-- Toggle Button for Mobile -->
        <a href="#" class="burger light d-inline-block d-lg-none site-menu-toggle js-menu-toggle" 
           data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </div>
</nav>






    <!-- Dynamic Hero Section - Supports both Blade and Livewire -->
    @hasSection('hero')
        @yield('hero')
    @elseif(isset($hero))
        {{ $hero }}
    @endif

    <!-- Main Content - Supports both Blade sections and Livewire slots -->
    @hasSection('content')
        <main class="main-content">
            @yield('content')
        </main>
    @else
        <main class="main-content">
            {{ $slot }}
        </main>
    @endif

    <!-- Footer -->
    {{-- <footer class="site-footer">
        {{-- <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p>Property Template Footer - Will be replaced with proper partial</p>
                </div>
            </div>
        </div> 
    </footer> --}}


    <!-- Footer Section -->
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>About Property</h3>
                        <p>Your trusted partner in finding the perfect property. We are committed to providing exceptional service and expertise to help you achieve your real estate goals.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget">
                        <h3>Navigation</h3>
                        <ul class="list-unstyled float-start links">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('properties') }}">Properties</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget">
                        <h3>Services</h3>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">Property Management</a></li>
                            <li><a href="#">Real Estate Consulting</a></li>
                            <li><a href="#">Buy & Sell Properties</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Newsletter</h3>
                        <p>Stay updated with our latest properties and news. Subscribe to our newsletter.</p>
                        <form action="#" class="form-subscribe">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Email address" required>
                                <button class="btn btn-primary" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed by <a href="#">YourCompany</a></p>
                    <div>
                        <a href="#" class="social-icon"><span class="icon-facebook"></span></a>
                        <a href="#" class="social-icon"><span class="icon-twitter"></span></a>
                        <a href="#" class="social-icon"><span class="icon-linkedin"></span></a>
                        <a href="#" class="social-icon"><span class="icon-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Template JS -->
    <script src="/property-template/js/bootstrap.bundle.min.js?v=1"></script>
    <script src="/property-template/js/tiny-slider.js?v=1"></script>
    <script src="/property-template/js/aos.js?v=1"></script>
    <script src="/property-template/js/navbar.js?v=1"></script>
    <script src="/property-template/js/counter.js?v=1"></script>
    <script src="/property-template/js/custom.js?v=1"></script>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- AOS Initialization for Livewire -->
    <script>
        document.addEventListener('livewire:navigated', () => {
            AOS.init();
        });
    </script>

    <!-- After all other JS files -->
    <script src="/property-template/js/livewire-init.js?v=1"></script>

    <!-- Initialize AOS on initial page load -->
    <script>
        AOS.init();

    </script>
</body>

</html>












