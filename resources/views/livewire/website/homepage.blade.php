
<div class="homepage-container">

    {{-- resources/views/livewire/homepage.blade.php --}}
    @section('hero')
        <div class="hero">
            <div class="hero-slide">
                <div class="img overlay" style="background-image: url('/property-template/images/hero_bg_3.jpg')"></div>
                <div class="img overlay" style="background-image: url('/property-template/images/hero_bg_2.jpg')"></div>
                <div class="img overlay" style="background-image: url('/property-template/images/hero_bg_1.jpg')"></div>
            </div>

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center">
                        <h1 class="heading" data-aos="fade-up">Easiest way to find your dream home</h1>
                        <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                            data-aos-delay="200">
                            <input type="text" class="form-control px-4"
                                placeholder="Your ZIP code or City. e.g. New York" />
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endsection


    {{-- resources/views/livewire/homepage.blade.php --}}
@section('hero')
<div class="hero position-relative">
    <!-- Hero Slides -->
    <div class="hero-slide">
        <div class="img overlay position-relative" style="background-image: url('/property-template/images/hero_bg_3.jpg')">
            <div class="bg-dark bg-opacity-50 position-absolute top-0 start-0 w-100 h-100"></div>
        </div>
        <div class="img overlay position-relative" style="background-image: url('/property-template/images/hero_bg_2.jpg')">
            <div class="bg-dark bg-opacity-50 position-absolute top-0 start-0 w-100 h-100"></div>
        </div>
        <div class="img overlay position-relative" style="background-image: url('/property-template/images/hero_bg_1.jpg')">
            <div class="bg-dark bg-opacity-50 position-absolute top-0 start-0 w-100 h-100"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="container position-absolute top-50 start-50 translate-middle text-center text-white">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <!-- Heading -->
                <h1 class="display-4 fw-bold mb-4" data-aos="fade-up" style="text-shadow: 0 3px 8px rgba(0,0,0,0.6);">
                    Find Your <span class="text-primary">Dream Home</span> With Ease
                </h1>

                <!-- Search Form -->
                <form action="#" class="bg-white rounded-pill shadow d-flex align-items-center p-2 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-delay="200">
                    <span class="px-3 text-muted"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Enter city, ZIP code or area...">
                    <button type="submit" class="btn btn-primary rounded-pill px-4">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


    <!-- Featured Properties Section -->
    <section class="py-12 bg-gray-50">
        
        <div class="container mx-auto px-4">
                        <div class="text-center mb-12 mt-3" data-aos="fade-up">
                <h2 class="fw-bold text-3xl font-bold mb-4" style="color:#005555;;">
                    Featured Properties
                    <span class="border-b-2 border-gray-800"></span>
                </h2>
                <p class="text-gray-600 mt-2">Discover our latest properties</p>
            </div>
            {{-- <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap bg-white rounded-lg shadow-lg">
                        <div class="property-slider">
                            @foreach ($featuredProperties as $property)
                                <div class="property-item">
                                    <a href="{{ route('properties.show', $property) }}" class="img">
                                        @if($property->images->count() > 0)
                                            <img src="{{ asset('storage/' . $property->images->first()->path) }}"
                                                alt="{{ $property->title }}" class="w-full h-48 object-cover rounded-lg">
                                        @else
                                            <img src="{{ url('/property-template/images/img_1.jpg') }}" alt="Image"
                                                class="w-full h-48 object-cover rounded-lg">
                                        @endif
                                    </a>
                                    <div class="property-content p-4">
                                        <div class="price mb-2 text-lg font-bold">{{ number_format($property->price) }}</div>
                                        <div class="text-black-50">
                                            <span class="d-block mb-2">{{ $property->address }}</span>
                                            <span class="city d-block mb-3">{{ $property->city }}</span>
                                            <div class="specs d-flex mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <span class="icon-bed me-2"></span>
                                                    <span class="caption">{{ $property->bedrooms }} beds</span>
                                                </span>
                                                <span class="d-block d-flex align-items-center">
                                                    <span class="icon-bath me-2"></span>
                                                    <span class="caption">{{ $property->bathrooms }} baths</span>
                                                </span>
                                            </div>
                                            <a href="{{ route('properties.show', $property) }}"
                                                class="btn btn-primary py-2 px-3">See
                                                details</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev pl-4" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                            <span class="next pr-4" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div> --}}

          


           {{-- <div class="row">
    <div class="col-12">
                   <div class="property-slider-wrap" data-aos="fade-up" data-aos-delay="200">
            <div class="property-slider">
                @foreach ($featuredProperties as $property)
                    <div class="property-item">
                        <!-- Image -->
                        <a href="{{ route('properties.show', $property) }}" class="img">
                            @if($property->images->count() > 0)
                                <img src="{{ asset('storage/' . $property->images->first()->path) }}"
                                    alt="{{ $property->title }}"
                                    class="img-fluid"> 
                            @else
                                <img src="{{ url('/property-template/images/img_1.jpg') }}"
                                    alt="Image"
                                    class="img-fluid">
                            @endif
                        </a>

                        <!-- Content -->
                        <div class="property-content">
                            <div class="price mb-2"><span>${{ number_format($property->price) }}</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">{{ $property->address }}, {{ $property->city }}</span>
                                <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">{{ $property->bedrooms }} beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">{{ $property->bathrooms }} baths</span>
                                    </span>
                                </div>

                                <a href="{{ route('properties.show', $property) }}"
                                   class="btn btn-primary py-2 px-3">See details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Slider Nav -->
            <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
            </div>
        </div>
    </div>
</div> --}}


     <div class="row">
                @forelse($featuredProperties as $property)
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                        <div class="property-item-new">
                            <div class="property-image">
                                @if(!empty($property->featured) && $property->featured)
                                    <span class="badge-featured">Featured</span>
                                @endif
                                <div class="property-actions">
                                    <a href="#" class="property-action-btn" title="Save"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#" class="property-action-btn" title="Share"><i class="fa-solid fa-share-nodes"></i></a>
                                </div>
                                <a href="{{ route('properties.show', $property) }}">
                                    @if($property->images->count() > 0)
                                        <img src="{{ asset('storage/' . $property->images->first()->path) }}" alt="{{ $property->title }}" class="img-fluid">
                                    @else
                                        <img src="/property-template/images/img_1.jpg" alt="Default Image" class="img-fluid">
                                    @endif
                                </a>
                                <div class="property-status">{{ $property->status }}</div>
                                <div class="property-status mr-65">{{ $property->type }}</div>

                            </div>
                            <div class="property-content-new">
                                <h3 class="property-title"><a href="{{ route('properties.show', $property) }}">{{ $property->title }}</a></h3>
                                <p class="property-address"><i class="fa-solid fa-location-dot"></i> {{ $property->address }}, {{ $property->city }}</p>
                                <div class="property-price">${{ number_format($property->price) }}</div>
                                <div class="property-specs">
                                    <span><i class="fa-solid fa-bed"></i> {{ $property->bedrooms }} Beds</span>
                                    <span><i class="fa-solid fa-bath"></i> {{ $property->bathrooms }} Baths</span>
                                    <span><i class="fa-solid fa-ruler-combined"></i> {{ number_format($property->area) }} sqft</span>
                                </div>
                                <a href="{{ route('properties.show', $property) }}" class="btn btn-primary-new">View Details</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <i class="fa-solid fa-house-circle-xmark mx-auto h-12 w-12 text-gray-400"></i>
                        <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No properties found</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                            Try adjusting your search or filter to find what you're looking for.
                        </p>
                        <div class="mt-6">
                            <button type="button" 
                                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <i class="fa-solid fa-plus -ml-1 mr-2 h-5 w-5"></i>
                                Add New Property
                            </button>
                        </div>
                    </div>
                @endforelse
            </div>


            @if($featuredProperties->count() > 0)
                <div class="text-center mt-6">
                    <a href="{{ route('properties') }}"
                       class="btn btn-primary py-2 px-3"
                        style="transition: all 0.15s ease-in-out">
                        View All Properties
                        {{-- <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" >
                        </svg> --}}
                    </a>
                </div>
            @endif



                  

    
    <!-- about section -->
    
   @include('partials.about')


    <!-- services section -->
    
    @include('partials.services')

    
    <!-- features section -->
    
@include('partials.feature')


    <!-- My Team section -->
   

    @include('partials.team')

   <!-- Call to Action -->
        <div class="bg-indigo-700" data-aos="fade-up">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Looking to list your property?</span>
                <span class="block">Start working with us today.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-indigo-200">
                Join thousands of property owners who trust us to help them sell or rent their properties quickly and at the best price.
            </p>
            <a href="#" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
                List Your Property
            </a>
        </div>
    </div>
        

    {{-- <!-- footer section ----}}
    


</div>






































{{-- <div class="homepage-container">

   
    @section('hero')
    <div class="hero position-relative">
        <!-- Hero Slides -->
        <div class="hero-slide">
            <div class="img overlay position-relative" style="background-image: url('{{ asset('property-template/images/hero_bg_3.jpg') }}')">
                <div class="bg-dark bg-opacity-50 position-absolute top-0 start-0 w-100 h-100"></div>
            </div>
            <div class="img overlay position-relative" style="background-image: url('{{ asset('property-template/images/hero_bg_2.jpg') }}')">
                <div class="bg-dark bg-opacity-50 position-absolute top-0 start-0 w-100 h-100"></div>
            </div>
            <div class="img overlay position-relative" style="background-image: url('{{ asset('property-template/images/hero_bg_1.jpg') }}')">
                <div class="bg-dark bg-opacity-50 position-absolute top-0 start-0 w-100 h-100"></div>
            </div>
        </div>

        <!-- Content -->
        <div class="container position-absolute top-50 start-50 translate-middle text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <!-- Heading -->
                    <h1 class="display-4 fw-bold mb-4" data-aos="fade-up" style="text-shadow: 0 3px 8px rgba(0,0,0,0.6);">
                        Find Your <span class="text-primary">Dream Home</span> With Ease
                    </h1>

                    <!-- Search Form -->
                    <form action="#" class="bg-white rounded-pill shadow d-flex align-items-center p-2 mx-auto"
                          style="max-width: 600px;"
                          data-aos="fade-up" data-aos-delay="200">
                        <span class="px-3 text-muted"><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control border-0 shadow-none"
                               placeholder="Enter city, ZIP code or area...">
                        <button type="submit" class="btn btn-primary rounded-pill px-4">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection


    <!-- Featured Properties Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 mt-3" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">
                    Featured Properties
                    <span class="border-b-2 border-gray-800"></span>
                </h2>
                <p class="text-gray-600 mt-2">Discover our latest properties</p>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap" data-aos="fade-up" data-aos-delay="200">
                        <div class="property-slider">
                            @foreach ($featuredProperties as $property)
                                <div class="property-item">
                                    <!-- Image -->
                                    <a href="{{ route('properties.show', $property) }}" class="img">
                                        @if($property->images->count() > 0)
                                            <img src="{{ asset('storage/' . $property->images->first()->path) }}"
                                                 alt="{{ $property->title }}" class="img-fluid">
                                        @else
                                            <img src="{{ asset('property-template/images/img_1.jpg') }}"
                                                 alt="Image" class="img-fluid">
                                        @endif
                                    </a>

                                    <!-- Content -->
                                    <div class="property-content">
                                        <div class="price mb-2"><span>${{ number_format($property->price) }}</span></div>
                                        <div>
                                            <span class="d-block mb-2 text-black-50">{{ $property->address }}, {{ $property->city }}</span>
                                            <div class="specs d-flex mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <span class="icon-bed me-2"></span>
                                                    <span class="caption">{{ $property->bedrooms }} beds</span>
                                                </span>
                                                <span class="d-block d-flex align-items-center">
                                                    <span class="icon-bath me-2"></span>
                                                    <span class="caption">{{ $property->bathrooms }} baths</span>
                                                </span>
                                            </div>
                                            <a href="{{ route('properties.show', $property) }}"
                                               class="btn btn-primary py-2 px-3">See details</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Slider Nav -->
                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>

            @if($featuredProperties->count() > 0)
                <div class="text-center mt-6">
                    <a href="{{ route('properties') }}"
                       class="btn btn-primary py-2 px-3"
                       style="transition: all 0.15s ease-in-out">
                        View All Properties
                    </a>
                </div>
            @endif
        </div>
    </section>


    <!-- About Section -->
    @include('partials.about')

    <!-- Services Section -->
    @include('partials.services')

    <!-- Features Section -->
    @include('partials.feature')

    <!-- My Team Section -->
    @include('partials.team')

    
                    <!-- Call to Action -->
<div class="bg-primary text-white py-5" data-aos="fade-up">
    <div class="container text-center">
        <h2 class="display-5 fw-bold">
            <span class="d-block">Looking to list your property?</span>
            <span class="d-block">Start working with us today.</span>
        </h2>
        <p class="mt-3 fs-5 text-light">
            Join thousands of property owners who trust us to help them sell or rent their properties quickly and at the best price.
        </p>
        <a href="#"
           class="btn btn-light btn-lg mt-4 px-4 py-2">
            List Your Property
        </a>
    </div>
</div>


</div> --}}
