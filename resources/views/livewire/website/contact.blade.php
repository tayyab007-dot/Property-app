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
              <p>Top City plaza, Haripur Office : 58</p>
            </div>
          </div>
          <div class="info-item">
            <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
            <div class="info-text">
              <h4>Email:</h4>
              <p>landmarksestates@company.com</p>
            </div>
          </div>
          <div class="info-item">
            <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
            <div class="info-text">
              <h4>Call:</h4>
              <p>+92 3705020977</p>
            </div>
          </div>
        </div>
      </div>


      



<div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
   
    <div class="col-lg-20 shadow-xl rounded-2xl p-8 sticky top-10 w-full" data-aos="fade-up" data-aos-delay="100">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Contact Us</h1>

    <livewire:website.query.query-form />
</div>

</div>





</div>