<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Property</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background-color: #f8f9fa;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1973&q=80') no-repeat center center;
            background-size: cover;
            padding: 100px 0;
            color: white;
        }

        .breadcrumb {
            background: transparent;
            justify-content: center;
        }

        .breadcrumb-item a {
            color: #fff;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: rgba(255, 255, 255, 0.8);
        }

        .section {
            padding: 80px 0;
        }

        .heading {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .text-primary {
            color: #3b5d50 !important;
        }

        .feature-h {
            margin-bottom: 30px;
        }

        .wrap-icon {
            width: 60px;
            height: 60px;
            background-color: #3b5d50;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .img-about {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .counter-wrap {
            text-align: center;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .number {
            font-size: 2.5rem;
            font-weight: 700;
            display: block;
        }

        .sec-testimonials {
            background-color: #fff;
        }

        .testimonial {
            text-align: center;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin: 15px;
        }

        .testimonial img {
            border: 5px solid #3b5d50;
        }

        .social li {
            margin: 0 5px;
        }

        .social a {
            color: #3b5d50;
            font-size: 18px;
        }

        #testimonial-nav {
            font-weight: 600;
        }

        #testimonial-nav span {
            cursor: pointer;
            margin: 0 10px;
        }

        .testimonial-slider-wrap {
            position: relative;
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        .dots::before {
            content: "";
            position: absolute;
            width: 100px;
            height: 100px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='25' cy='25' r='5' fill='%233b5d50' opacity='0.2'/%3E%3Ccircle cx='25' cy='75' r='5' fill='%233b5d50' opacity='0.2'/%3E%3Ccircle cx='75' cy='25' r='5' fill='%233b5d50' opacity='0.2'/%3E%3Ccircle cx='75' cy='75' r='5' fill='%233b5d50' opacity='0.2'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            top: -30px;
            left: -30px;
            z-index: -1;
        }
    </style>
</head>

<body>
    <!-- Livewire Component Content (single root element) -->
    <div>
        <!-- Hero Section -->
        <div class="hero page-inner overlay">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center mt-5">
                        <h1 class="heading" data-aos="fade-up">About</h1>

                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                            <ol class="breadcrumb text-center justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active text-white-50" aria-current="page">
                                    About
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Content Section -->
       
        @include('partials.about')

        <!-- Features Section 1 -->
     
        @include('partials.feature')

        <!-- Stats Section -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                        <img src="https://images.unsplash.com/photo-1574362848149-11496d93a7c7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=784&q=80"
                            alt="Luxury living room" class="img-fluid rounded shadow" />
                    </div>
                    <div class="col-md-4 mt-lg-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=958&q=80"
                            alt="Modern kitchen" class="img-fluid rounded shadow" />
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
                            alt="Beautiful bedroom" class="img-fluid rounded shadow" />
                    </div>
                </div>
                <div class="row section-counter mt-5">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="counter-wrap mb-5 mb-lg-0">
                            <span class="number"><span class="countup text-primary">2917</span></span>
                            <span class="caption text-black-50"># of Buy Properties</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="counter-wrap mb-5 mb-lg-0">
                            <span class="number"><span class="countup text-primary">3918</span></span>
                            <span class="caption text-black-50"># of Sell Properties</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="counter-wrap mb-5 mb-lg-0">
                            <span class="number"><span class="countup text-primary">38928</span></span>
                            <span class="caption text-black-50"># of All Properties</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <div class="counter-wrap mb-5 mb-lg-0">
                            <span class="number"><span class="countup text-primary">1291</span></span>
                            <span class="caption text-black-50"># of Agents</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- My Team section -->
       

    @include('partials.team')



         <!-- footer section -->
   

    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple counter animation for statistics
        document.addEventListener('DOMContentLoaded', function () {
            const counters = document.querySelectorAll('.countup');
            const speed = 200;

            counters.forEach(counter => {
                const target = +counter.innerText;
                const count = +counter.innerText;
                const increment = Math.ceil(target / speed);

                let current = 0;

                const updateCount = () => {
                    if (current < target) {
                        current += increment;
                        if (current > target) current = target;
                        counter.innerText = current.toLocaleString();
                        setTimeout(updateCount, 1);
                    }
                };

                // Start counting when element is in viewport
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCount();
                            observer.unobserve(entry.target);
                        }
                    });
                });

                observer.observe(counter);
            });
        });
    </script>

   
</body>

</html>