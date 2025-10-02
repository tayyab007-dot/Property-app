<div>
    <!-- Hero Section -->
    <div class="relative bg-gray-900 overflow-hidden">
        {{-- <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-gray-900 sm:pb-16 md:pb-20 lg:max-w-4xl lg:w-full lg:pb-28 xl:pb-32">
                <div class="pt-10 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
                    <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="text-center" data-aos="fade-up">
                            <div class="text-center" data-aos="fade-up">
                                <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                                    <span class="block">Find Your Dream</span>
                                    <span class="block text-indigo-400">Property Today</span>
                                </h1>
                                <p
                                    class="mt-3 max-w-md mx-auto text-base text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                                    Discover the perfect property that matches your lifestyle with our extensive
                                    collection of homes for sale and rent.
                                </p>

                                <!-- Search Bar -->
                                <div class="mt-8 max-w-lg mx-auto sm:flex sm:max-w-xl">
                                    <div class="min-w-0 flex-1">
                                        <label for="search" class="sr-only">Search properties</label>
                                        <div class="relative rounded-md shadow-sm">
                                            <input wire:model.live.debounce.300ms="search" id="search"
                                                class="block w-full pl-10 pr-3 py-4 border border-transparent rounded-md leading-5 bg-gray-700 text-gray-300 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500 sm:text-sm"
                                                placeholder="Search by location, property type, or keywords..."
                                                type="search">
                                        </div>
                                    </div>
                                    <div class="mt-3 sm:mt-0 sm:ml-3">
                                        <button type="button"
                                            class="w-full flex items-center justify-center px-6 py-4 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500 md:py-4 md:text-lg md:px-8">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                    src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80"
                    alt="Luxury home">
            </div>
        </div> --}}

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

        <!-- Property Listings -->
        <div class="bg-white dark:bg-gray-900 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Filters -->
                <div class="mb-8 bg-white dark:bg-gray-800 rounded-lg shadow p-4" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                        <div class="flex-1">
                            <h2 class="fw-bold text-3xl font-bold mb-4" style="color:#181ccf;">
                                {{ $properties->total() }} Properties Found
                            </h2>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <select wire:model.live="sortBy"
                                    class="block appearance-none w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="newest">Newest First</option>
                                    <option value="price_asc">Price: Low to High</option>
                                    <option value="price_desc">Price: High to Low</option>
                                    <option value="featured">Featured</option>
                                </select>
                            </div>
                            <button @click="showFilters = !showFilters"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm text-sm font-medium text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <i class="fa-solid fa-filter mr-2"></i>
                                Filters
                            </button>
                        </div>
                    </div>

                    <!-- Advanced Filters -->
                    <div x-show="showFilters" class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Property Type -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Property
                                    Type</label>
                                <select wire:model.live="propertyType"
                                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md dark:bg-gray-700 dark:text-white">
                                    <option value="">All Types</option>
                                    <option value="house">House</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="villa">Villa</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="land">Land</option>
                                </select>
                            </div>

                            <!-- Price Range -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Price
                                    Range</label>
                                <div class="flex space-x-2">
                                    <input type="number" wire:model.live="minPrice" placeholder="Min"
                                        class="w-1/2 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-white">
                                    <input type="number" wire:model.live="maxPrice" placeholder="Max"
                                        class="w-1/2 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-white">
                                </div>
                            </div>

                            <!-- Bedrooms -->
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Bedrooms</label>
                                <select wire:model.live="bedrooms"
                                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md dark:bg-gray-700 dark:text-white">
                                    <option value="">Any</option>
                                    <option value="1">1+</option>
                                    <option value="2">2+</option>
                                    <option value="3">3+</option>
                                    <option value="4">4+</option>
                                    <option value="5">5+</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Grid -->
                <div class="row">
                    @forelse($properties as $property)
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                            <div class="property-item-new">
                                <div class="property-image">
                                    @if(!empty($property->featured) && $property->featured)
                                        <span class="badge-featured">Featured</span>
                                    @endif
                                    <div class="property-actions">
                                        <a href="#" class="property-action-btn" title="Save"><i
                                                class="fa-regular fa-heart"></i></a>
                                        <a href="#" class="property-action-btn" title="Share"><i
                                                class="fa-solid fa-share-nodes"></i></a>
                                    </div>
                                    <a href="{{ route('properties.show', $property) }}">
                                        @if($property->images->count() > 0)
                                            <img src="{{ asset('storage/' . $property->images->first()->path) }}"
                                                alt="{{ $property->title }}" class="img-fluid">
                                        @else
                                            <img src="/property-template/images/img_1.jpg" alt="Default Image"
                                                class="img-fluid">
                                        @endif
                                    </a>
                                    <div class="property-status">{{ $property->status }}</div>
                                </div>
                                <div class="property-content-new">
                                    <h3 class="property-title"><a
                                            href="{{ route('properties.show', $property) }}">{{ $property->title }}</a></h3>
                                    <p class="property-address"><i class="fa-solid fa-location-dot"></i>
                                        {{ $property->address }}, {{ $property->city }}</p>
                                    <div class="property-price">${{ number_format($property->price) }}</div>
                                    <div class="property-specs">
                                        <span><i class="fa-solid fa-bed"></i> {{ $property->bedrooms }} Beds</span>
                                        <span><i class="fa-solid fa-bath"></i> {{ $property->bathrooms }} Baths</span>
                                        <span><i class="fa-solid fa-ruler-combined"></i>
                                            {{ number_format($property->area) }} sqft</span>
                                    </div>
                                    <a href="{{ route('properties.show', $property) }}" class="btn btn-primary-new">View
                                        Details</a>
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

                <!-- Pagination -->
                @if($properties->hasPages())
                    <div class="mt-8">
                        {{ $properties->links() }}
                    </div>
                @endif
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-indigo-700" data-aos="fade-up">
            <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">Looking to list your property?</span>
                    <span class="block">Start working with us today.</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-indigo-200">
                    Join thousands of property owners who trust us to help them sell or rent their properties quickly
                    and at the best price.
                </p>
                <a href="#"
                    class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
                    List Your Property
                </a>
            </div>
        </div>

        @push('scripts')
            <script>
                // Initialize Alpine.js for filters
                document.addEventListener('alpine:init', () => {
                    Alpine.data('propertySearch', () => ({
                        showFilters: false,
                        init() {
                            // Initialize any component-specific Alpine.js logic here
                        }
                    }));
                });
            </script>
        @endpush
    </div>