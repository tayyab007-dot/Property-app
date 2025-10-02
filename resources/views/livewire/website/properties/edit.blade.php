




{{-- @extends('layouts.app') --}}

@section('hero')
<div class="hero page-inner overlay" style="background-image: url('/property-template/images/hero_bg_1.jpg')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Properties</h1>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">Properties</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

<div>

    <div class="bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="lg:grid lg:grid-cols-12 lg:gap-12">
                <div class="lg:col-span-8">
                    




<div class="mb-8 rounded-lg overflow-hidden relative shadow-lg">
    @if($property->images->count() > 0)
        {{-- Big Main Image --}}
        <div class="relative mb-4">
            <img id="main-property-image" 
                 src="{{ asset('storage/' . $property->images->first()->path) }}" 
                 alt="{{ $property->title }}" 
                 class="w-full h-auto object-cover rounded-lg max-h-[550px] hover:opacity-95 transition-opacity duration-300"
                 onclick="openLightbox(0)">
        </div>

        {{-- Thumbnails --}}
        <div class="grid grid-cols-3 md:grid-cols-4 gap-3">
            @foreach($property->images as $index => $image)
                <div>
                    <img src="{{ asset('storage/' . $image->path) }}" 
                         alt="{{ $property->title }}" 
                         class="w-full h-28 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-indigo-500 transition"
                         onclick="changeMainImage('{{ asset('storage/' . $image->path) }}', {{ $index }})">
                </div>
            @endforeach
        </div>
    @endif
</div>










    










                    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8 mb-8">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 border-b border-gray-200 dark:border-gray-700 pb-4">
                            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
                                {{ $property->title }}
                            </h2>
                            <span class="text-3xl font-bold text-indigo-600 dark:text-indigo-400 mt-2 sm:mt-0">
                                ${{ number_format($property->price) }}
                                @if($property->type === 'rent')
                                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">/mo</span>
                                @endif
                            </span>
                        </div>
                        
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 text-center">
                            <div class="flex flex-col items-center p-4 bg-indigo-50 dark:bg-indigo-900/20 rounded-lg">
                                <i class="fa-solid fa-house-user h-8 w-8 text-indigo-600 dark:text-indigo-400 mb-2"></i>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Type</dt>
                                <dd class="mt-1 text-base font-semibold text-gray-900 dark:text-white">{{ ucfirst($property->property_type) }}</dd>
                            </div>
                            <div class="flex flex-col items-center p-4 bg-indigo-50 dark:bg-indigo-900/20 rounded-lg">
                                <i class="fa-solid fa-bed h-8 w-8 text-indigo-600 dark:text-indigo-400 mb-2"></i>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Bedrooms</dt>
                                <dd class="mt-1 text-base font-semibold text-gray-900 dark:text-white">{{ $property->bedrooms }}</dd>
                            </div>
                            <div class="flex flex-col items-center p-4 bg-indigo-50 dark:bg-indigo-900/20 rounded-lg">
                                <i class="fa-solid fa-bath h-8 w-8 text-indigo-600 dark:text-indigo-400 mb-2"></i>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Bathrooms</dt>
                                <dd class="mt-1 text-base font-semibold text-gray-900 dark:text-white">{{ $property->bathrooms }}</dd>
                            </div>
                            <div class="flex flex-col items-center p-4 bg-indigo-50 dark:bg-indigo-900/20 rounded-lg">
                                <i class="fa-solid fa-ruler-combined h-8 w-8 text-indigo-600 dark:text-indigo-400 mb-2"></i>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Area</dt>
                                <dd class="mt-1 text-base font-semibold text-gray-900 dark:text-white">{{ number_format($property->area) }} sqft</dd>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8 mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Description</h2>
                        <div class="prose dark:prose-invert max-w-none text-gray-700 dark:text-gray-300">
                            <p class="leading-relaxed">
                                {!! nl2br(e($property->description)) !!}
                            </p>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Amenities</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                            @if($property->amenities)
                                @foreach(explode(',', $property->amenities) as $amenity)
                                    <div class="flex items-center text-gray-700 dark:text-gray-300">
                                        <i class="fa-solid fa-circle-check h-5 w-5 text-green-500 mr-3"></i>
                                        <span>{{ trim($amenity) }}</span>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-gray-500 dark:text-gray-400">No amenities listed.</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mt-12 lg:mt-0 lg:col-span-4 space-y-8">
                    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8 sticky top-10">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Contact Agent</h2>
                        <div class="flex items-center mb-6">
                            <div class="h-20 w-20 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-3xl font-semibold">
                                {{ strtoupper(substr($property->agent->name ?? 'A', 0, 1)) }}
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-medium text-gray-900 dark:text-white">{{ $property->agent->name ?? 'Agent Name' }}</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Real Estate Agent</p>
                            </div>
                        </div>
                        <form class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Your Name</label>
                                <input type="text" id="name" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                <input type="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
                                <input type="tel" id="phone" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                                <textarea id="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3"></textarea>
                            </div>
                            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Schedule a Tour</h2>
                        <form class="space-y-4">
                            <div>
                                <label for="tour-date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Select Date</label>
                                <input type="date" id="tour-date" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3">
                            </div>
                            <div>
                                <label for="tour-time" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Select Time</label>
                                <select id="tour-time" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3">
                                    <option>9:00 AM</option>
                                    <option>10:00 AM</option>
                                    <option>11:00 AM</option>
                                    <option>1:00 PM</option>
                                    <option>2:00 PM</option>
                                    <option>3:00 PM</option>
                                    <option>4:00 PM</option>
                                </select>
                            </div>
                            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                                Schedule Tour
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 dark:bg-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                    Similar Properties
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300 sm:mt-4">
                    Check out these similar properties you might be interested in.
                </p>
            </div>

            <div class="mt-12 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($similarProperties as $similarProperty)
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative h-48">
                            @if($similarProperty->images->count() > 0)
                                <img src="{{ asset('storage/' . $similarProperty->images->first()->path) }}" alt="{{ $similarProperty->title }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                    <i class="fa-solid fa-house h-12 w-12 text-gray-400"></i>
                                </div>
                            @endif
                            <div class="absolute top-2 right-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900/30 dark:text-indigo-200">
                                    {{ ucfirst($similarProperty->status) }}
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                <a href="{{ route('properties.show', $similarProperty) }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">
                                    {{ $similarProperty->title }}
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                {{ $similarProperty->address }}
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-lg font-bold text-indigo-600 dark:text-indigo-400">
                                    ${{ number_format($similarProperty->price) }}
                                    @if($similarProperty->type === 'rent')
                                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">/mo</span>
                                    @endif
                                </span>
                                <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                                    <span class="flex items-center">
                                        <i class="fa-solid fa-bed h-4 w-4 mr-1"></i>
                                        {{ $similarProperty->bedrooms }}
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fa-solid fa-bath h-4 w-4 mr-1"></i>
                                        {{ $similarProperty->bathrooms }}
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fa-solid fa-ruler-combined h-4 w-4 mr-1"></i>
                                        {{ number_format($similarProperty->area) }} sqft
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
   
</div>

{{-- @push('scripts')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.property-gallery', {
                loop: true, // Enable infinite loop
                autoplay: {
                    delay: 4000, // Auto-rotate every 4 seconds
                    disableOnInteraction: false, // Continue autoplay even after user interaction
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true, // Allow clicking pagination bullets to navigate
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                // Optional: Add some styling to the navigation buttons to make them more prominent
                on: {
                    init: function () {
                        // Custom styling for navigation buttons (example)
                        const navButtons = document.querySelectorAll('.swiper-button-next, .swiper-button-prev');
                        navButtons.forEach(button => {
                            button.style.color = 'white'; // Make arrows white
                            button.style.backgroundColor = 'rgba(0,0,0,0.5)'; // Semi-transparent black background
                            button.style.borderRadius = '50%'; // Make them round
                            button.style.width = '40px';
                            button.style.height = '40px';
                            button.style.display = 'flex';
                            button.style.alignItems = 'center';
                            button.style.justifyContent = 'center';
                            button.style.setProperty('--swiper-navigation-size', '20px'); // Adjust icon size
                        });
                    },
                },
            });
        });
    </script>
@endpush --}}


@push('styles')
    <style>
        .lightbox {
            display: none; /* Initially hidden */
            position: fixed;
            z-index: 9999; /* Ensure it's above everything */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .lightbox.active {
            display: flex;
            opacity: 1;
            visibility: visible;
            justify-content: center;
            align-items: center;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 4px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transform: scale(0.95);
            transition: transform 0.3s ease;
        }

        .lightbox.active img {
            transform: scale(1);
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 30px;
            cursor: pointer;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .lightbox-close:hover {
            background-color: rgba(0, 0, 0, 0.8);
            border-color: rgba(255, 255, 255, 0.2);
            transform: scale(1.1);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            cursor: pointer;
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            opacity: 0.7;
        }

        .lightbox-nav:hover {
            background-color: rgba(0, 0, 0, 0.8);
            border-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-50%) scale(1.1);
            opacity: 1;
        }

        .lightbox-prev {
            left: 20px;
        }

        .lightbox-next {
            right: 20px;
        }

        .property-image {
            cursor: zoom-in;
            transition: all 0.3s ease, opacity 0.2s ease-in-out;
            opacity: 1;
        }

        .property-image:hover {
            transform: scale(1.02);
        }

        .property-image-thumbnail {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .property-image-thumbnail:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize variables in the global scope
            window.currentImageIndex = 0;
            window.allImages = @json($property->images->map(function($image) {
                return asset('storage/' . $image->path);
            }));

            // Function to update the main image with smooth transition
            function updateMainImage(index) {
                const mainImage = document.getElementById('main-property-image');
                if (mainImage && window.allImages[index]) {
                    mainImage.style.opacity = '0';
                    setTimeout(() => {
                        mainImage.src = window.allImages[index];
                        mainImage.style.opacity = '1';
                    }, 200);
                    window.currentImageIndex = index;
                }
            }

            // Setup navigation buttons
            const prevButton = document.querySelector('.absolute.left-4 button');
            const nextButton = document.querySelector('.absolute.right-4 button');
            
            if (prevButton) {
                prevButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    const newIndex = (currentImageIndex - 1 + window.allImages.length) % window.allImages.length;
                    updateMainImage(newIndex);
                });
            }
            
            if (nextButton) {
                nextButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    const newIndex = (currentImageIndex + 1) % window.allImages.length;
                    updateMainImage(newIndex);
                });
            }

            // Add keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (e.key === 'ArrowLeft') {
                    const newIndex = (currentImageIndex - 1 + window.allImages.length) % window.allImages.length;
                    updateMainImage(newIndex);
                } else if (e.key === 'ArrowRight') {
                    const newIndex = (currentImageIndex + 1) % window.allImages.length;
                    updateMainImage(newIndex);
                }
            });

            // Initialize main image transition
            const mainImage = document.getElementById('main-property-image');
            if (mainImage) {
                mainImage.style.transition = 'opacity 0.2s ease-in-out';
            }
        });
    </script>

            // Preload images for smooth transitions
            images.forEach(src => {
                const img = new Image();
                img.src = src;
            });

            function changeMainImage(imagePath) {
                const mainImage = document.getElementById('main-property-image');
                if (mainImage) {
                    mainImage.src = imagePath;
                }
            }

            function openLightbox(index) {
                currentImageIndex = index;
                const lightbox = document.getElementById('lightbox');
                const lightboxImg = document.getElementById('lightbox-image');
                
                if (lightbox && lightboxImg) {
                    lightboxImg.src = images[index];
                    lightbox.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
            }

            function closeLightbox() {
                const lightbox = document.getElementById('lightbox');
                if (lightbox) {
                    lightbox.classList.remove('active');
                    document.body.style.overflow = '';
                }
            }

            function navigateLightbox(direction) {
                currentImageIndex = (currentImageIndex + direction + images.length) % images.length;
                const lightboxImg = document.getElementById('lightbox-image');
                if (lightboxImg) {
                    lightboxImg.style.opacity = '0';
                    setTimeout(() => {
                        lightboxImg.src = images[currentImageIndex];
                        lightboxImg.style.opacity = '1';
                    }, 200);
                }
            }

            // Close lightbox when clicking outside the image
            const lightbox = document.getElementById('lightbox');
            if (lightbox) {
                lightbox.addEventListener('click', function(e) {
                    if (e.target === lightbox) {
                        closeLightbox();
                    }
                });
            }

            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (!document.getElementById('lightbox').classList.contains('active')) return;
                
                switch(e.key) {
                    case 'Escape':
                        closeLightbox();
                        break;
                    case 'ArrowLeft':
                        navigateLightbox(-1);
                        break;
                    case 'ArrowRight':
                        navigateLightbox(1);
                        break;
                }
            });

            // Touch events for mobile
            let touchStartX = 0;
            let touchEndX = 0;
            
            lightbox.addEventListener('touchstart', e => {
                touchStartX = e.changedTouches[0].screenX;
            }, false);
            
            lightbox.addEventListener('touchend', e => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            }, false);
            
            function handleSwipe() {
                const swipeThreshold = 50;
                const difference = touchStartX - touchEndX;
                
                if (Math.abs(difference) > swipeThreshold) {
                    if (difference > 0) {
                        // Swiped left
                        navigateLightbox(1);
                    } else {
                        // Swiped right
                        navigateLightbox(-1);
                    }
                }
            }

            // Initialize click handlers
            const mainImage = document.getElementById('main-property-image');
            if (mainImage) {
                mainImage.addEventListener('click', () => openLightbox(0));
            }

            const thumbnails = document.querySelectorAll('.property-image-thumbnail');
            thumbnails.forEach((thumb, index) => {
                thumb.addEventListener('click', () => openLightbox(index + 1));
            });

               function changeMainImage(src, index) {
        let mainImg = document.getElementById("main-property-image");
        mainImg.src = src;
        mainImg.setAttribute("onclick", `openLightbox(${index})`);
    }
        });
    </script>
@endpush

<!-- Add this at the end of your body content -->



