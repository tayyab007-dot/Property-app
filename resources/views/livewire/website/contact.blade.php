{{-- resources/views/livewire/contact.blade.php --}}
@section('hero')
  <div class="hero page-inner overlay" style="background-image: url('/property-template/images/hero_bg_1.jpg')">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9 text-center mt-5">
          <h1 class="heading" data-aos="fade-up">Contact Us</h1>
          <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
            <ol class="breadcrumb text-center justify-content-center">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active text-white-50" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection

<div class="section section-contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-info-new">
          <h3 class="contact-title">Get in Touch</h3>
          <p class="contact-description">We'd love to hear from you. Whether you have a question about our properties,
            services, or anything else, our team is ready to answer all your questions.</p>
          <div class="info-item">
            <div class="info-icon"><i class="fa-solid fa-map-marker-alt"></i></div>
            <div class="info-text">
              <h4>Location:</h4>
              <p>43 Raymouth Rd. Baltemoer, London 3910</p>
            </div>
          </div>
          <div class="info-item">
            <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
            <div class="info-text">
              <h4>Email:</h4>
              <p>info@yourcompany.com</p>
            </div>
          </div>
          <div class="info-item">
            <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
            <div class="info-text">
              <h4>Call:</h4>
              <p>+1 1234 55488 55</p>
            </div>
          </div>
        </div>
      </div>


      {{-- <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
        <div class="contact-form-new">
          <h3 class="form-title">Send us a message</h3>
          <form action="#">
            <div class="row">
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="col-md-6 mb-3">
                <input type="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="col-12 mb-3">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="col-12 mb-3">
                <textarea cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="col-12">
                <input type="submit" value="Send Message" class="btn btn-primary-new w-100">
              </div>
            </div>
          </form>
        </div>
      </div> --}}

 {{-- <livewire:order-form :property="$property" /> --}}

{{-- <div class="grid grid-cols-4 gap-4"> --}}
      {{-- <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">

    <h1 class="text-3xl font-bold text-gray-800 col-span-6 mb-6 text-center">Contact Us</h1>

    <p class="text-gray-600 text-center mb-10 col-span-6">
        Have questions or inquiries? Fill out the form below, and we’ll get back to you soon.
    </p>

    <livewire:order-form class="col-span-6" />
</div> --}}

<div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
    <div class="bg-white shadow-xl rounded-2xl p-8 sticky top-10 w-full">

        <h1 class="text-3xl font-bold text-gray-800 mb-2 text-center">Contact Us</h1>

        <p class="text-gray-600 text-center ">
            Have questions or inquiries? Fill out the form below, and we’ll get back to you soon.
        </p>

        {{-- ✅ Place form directly here --}}
        <livewire:order-form />
    </div>
</div>





  <!-- footer section -->
  {{-- <div class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h3>Contact</h3>
            <address>Office 58 Genixstack, 2nd floor, Haripur</address>
            <ul class="list-unstyled links">
              <li><a href="tel://11234567890">+92 3705020977</a></li>
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li>
                <a href="mailto:info@mydomain.com">info@mydomain.com</a>
              </li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Sources</h3>
            <ul class="list-unstyled float-start links">
              <li><a href="{{ route('about') }}">About us</a></li>
              <li><a href="{{ route('services') }}">Services</a></li>
              <li><a href="{{ route('properties') }}">Properties</a></li>
              <li><a href="{{ route('contact') }}">Contact Us</a></li>

            </ul>

          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Links</h3>
            <ul class="list-unstyled links">
              <li><a href="{{ route('properties') }}">Our proerties</a></li>
              <li><a href="{{ route('about') }}">About us</a></li>
              <li><a href="{{ route('contact') }}">Contact us</a></li>
            </ul>

            <ul class="list-unstyled social">
              <li>
                <a href="#"><span class="icon-instagram"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-twitter"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-facebook"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-linkedin"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-pinterest"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-dribbble"></span></a>
              </li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

          <p>
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            . All Rights Reserved. Genixstack; Designed Muhammad Tayyab
            <!-- License information: https://untree.co/license/ -->
          </p>
          <div>
            Distributed by
            <a href="https://themewagon.com/" target="_blank">themewagon</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div> --}}
</div>