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

                    <!-- Gallery: big image + thumbnails -->
                    <div class="mb-8 rounded-lg overflow-hidden relative shadow-lg">
                        @if($property->images->count() > 0)
                            <div class="relative mb-4">
                                <img id="main-property-image"
                                    src="{{ asset('storage/' . $property->images->first()->path) }}"
                                    alt="{{ $property->title }}"
                                    class="w-full h-auto object-cover rounded-lg max-h-[550px] property-image hover:opacity-95 transition-opacity duration-300"
                                    style="cursor:zoom-in" data-index="0">
                                @if($property->images->count() > 1)
                                    <button id="prev-image" type="button"
                                        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white rounded-full p-2 z-10">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7" />
                                        </svg>
                                    </button>
                                    <button id="next-image" type="button"
                                        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white rounded-full p-2 z-10">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                @endif
                            </div>

                            <div id="property-thumbs" class="grid grid-cols-3 md:grid-cols-4 gap-3">
                                @foreach($property->images as $index => $image)
                                    <div>
                                        <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $property->title }}"
                                            class="property-thumb w-full h-28 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-indigo-500 transition"
                                            data-index="{{ $index }}" data-src="{{ asset('storage/' . $image->path) }}">
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div
                                class="aspect-w-16 aspect-h-9 bg-gray-200 dark:bg-gray-700 flex items-center justify-center h-[500px]">
                                <i class="fa-solid fa-image h-20 w-20 text-gray-400"></i>
                            </div>
                        @endif
                    </div>

                    <!-- Rest of your content kept intact -->
                    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8 mb-8">
                        <div
                            class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 border-b border-gray-200 dark:border-gray-700 pb-4">
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

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                            <div
                                class="group cursor-pointer transform transition-all duration-300 hover:-translate-y-1">
                                <div
                                    class="relative overflow-hidden bg-gradient-to-br from-indigo-50 to-white dark:from-indigo-900/40 dark:to-gray-800/95 rounded-xl shadow-sm hover:shadow-md transition-all p-6">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-indigo-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>
                                    <div class="relative flex flex-col items-center">
                                        <div
                                            class="relative p-4 mb-3 group-hover:scale-110 transition-all duration-300">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full opacity-20 group-hover:opacity-30 transform transition-all duration-300 scale-90 group-hover:scale-110">
                                            </div>
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-full opacity-0 group-hover:opacity-20 animate-pulse">
                                            </div>
                                            <div class="relative p-4 bg-white dark:bg-gray-800 rounded-full shadow-lg">
                                                <i
                                                    class="fa-solid fa-building-user text-2xl text-transparent bg-gradient-to-br from-indigo-600 to-purple-600 bg-clip-text"></i>
                                            </div>
                                        </div>
                                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Property
                                            Type</dt>
                                        <dd
                                            class="text-lg font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                                            {{ ucfirst($property->property_type) }}
                                        </dd>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="group cursor-pointer transform transition-all duration-300 hover:-translate-y-1">
                                <div
                                    class="relative overflow-hidden bg-gradient-to-br from-indigo-50 to-white dark:from-indigo-900/40 dark:to-gray-800/95 rounded-xl shadow-sm hover:shadow-md transition-all p-6">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-indigo-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>
                                    <div class="relative flex flex-col items-center">
                                        <div
                                            class="relative p-4 mb-3 group-hover:scale-110 transition-all duration-300">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full opacity-20 group-hover:opacity-30 transform transition-all duration-300 scale-90 group-hover:scale-110">
                                            </div>
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-full opacity-0 group-hover:opacity-20 animate-pulse">
                                            </div>
                                            <div class="relative p-4 bg-white dark:bg-gray-800 rounded-full shadow-lg">
                                                <i
                                                    class="fa-solid fa-bed text-2xl text-transparent bg-gradient-to-br from-indigo-600 to-purple-600 bg-clip-text"></i>
                                            </div>
                                        </div>
                                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Bedrooms
                                        </dt>
                                        <dd
                                            class="text-lg font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                                            {{ $property->bedrooms }}
                                        </dd>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="group cursor-pointer transform transition-all duration-300 hover:-translate-y-1">
                                <div
                                    class="relative overflow-hidden bg-gradient-to-br from-indigo-50 to-white dark:from-indigo-900/40 dark:to-gray-800/95 rounded-xl shadow-sm hover:shadow-md transition-all p-6">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-indigo-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>
                                    <div class="relative flex flex-col items-center">
                                        <div
                                            class="relative p-4 mb-3 group-hover:scale-110 transition-all duration-300">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full opacity-20 group-hover:opacity-30 transform transition-all duration-300 scale-90 group-hover:scale-110">
                                            </div>
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-full opacity-0 group-hover:opacity-20 animate-pulse">
                                            </div>
                                            <div class="relative p-4 bg-white dark:bg-gray-800 rounded-full shadow-lg">
                                                <i
                                                    class="fa-solid fa-shower text-2xl text-transparent bg-gradient-to-br from-indigo-600 to-purple-600 bg-clip-text"></i>
                                            </div>
                                        </div>
                                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Bathrooms
                                        </dt>
                                        <dd
                                            class="text-lg font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                                            {{ $property->bathrooms }}
                                        </dd>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="group cursor-pointer transform transition-all duration-300 hover:-translate-y-1">
                                <div
                                    class="relative overflow-hidden bg-gradient-to-br from-indigo-50 to-white dark:from-indigo-900/40 dark:to-gray-800/95 rounded-xl shadow-sm hover:shadow-md transition-all p-6">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-indigo-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>
                                    <div class="relative flex flex-col items-center">
                                        <div
                                            class="relative p-4 mb-3 group-hover:scale-110 transition-all duration-300">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full opacity-20 group-hover:opacity-30 transform transition-all duration-300 scale-90 group-hover:scale-110">
                                            </div>
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-full opacity-0 group-hover:opacity-20 animate-pulse">
                                            </div>
                                            <div class="relative p-4 bg-white dark:bg-gray-800 rounded-full shadow-lg">
                                                <i
                                                    class="fa-solid fa-maximize text-2xl text-transparent bg-gradient-to-br from-indigo-600 to-purple-600 bg-clip-text"></i>
                                            </div>
                                        </div>
                                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Total Area
                                        </dt>
                                        <dd
                                            class="text-lg font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                                            {{ number_format($property->area) }} <span
                                                class="text-sm font-normal">sqft</span>
                                        </dd>
                                    </div>
                                </div>
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
                        <div class="flex items-center space-x-3 mb-8">
                            <div class="p-2 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg">
                                <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Property Amenities</h2>
                            <p>Features</p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            @if($property->amenities)
                                @foreach($property->amenities as $amenity)
                                    <div
                                        class="group relative overflow-hidden bg-gray-50 dark:bg-gray-800/50 rounded-xl p-4 transition-all duration-300 hover:bg-emerald-50 dark:hover:bg-emerald-900/20 border border-gray-100 dark:border-gray-700 hover:border-emerald-200 dark:hover:border-emerald-800">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-br from-emerald-50 to-teal-50 dark:from-emerald-900/10 dark:to-teal-900/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        </div>
                                        <div class="relative flex items-center space-x-3">
                                            <div class="flex-shrink-0">
                                                <div
                                                    class="p-2 bg-emerald-100 dark:bg-emerald-900/50 rounded-full group-hover:scale-110 transition-transform duration-300">
                                                    <i class="fa-solid fa-check text-emerald-600 dark:text-emerald-400"></i>
                                                </div>
                                            </div>
                                            <span
                                                class="text-gray-700 dark:text-gray-300 font-medium group-hover:text-emerald-700 dark:group-hover:text-emerald-300 transition-colors duration-300">
                                                {{ $amenity }}
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div
                                    class="col-span-full flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-800/50 rounded-xl border border-gray-100 dark:border-gray-700">
                                    <p class="text-gray-500 dark:text-gray-400 text-center">
                                        <i class="fa-solid fa-info-circle mr-2"></i>
                                        No amenities listed for this property.
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>


















                </div>

                <!-- Sidebar preserved -->
                {{-- <div class="mt-12 lg:mt-0 lg:col-span-4 space-y-8">
                    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8 sticky top-10">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Contact Agent</h2>
                        <div class="flex items-center mb-6">
                            <div
                                class="h-20 w-20 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-3xl font-semibold">
                                {{ strtoupper(substr($property->agent->name ?? 'A', 0, 1)) }}
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                    {{ $property->agent->name ?? 'Agent Name' }}
                                </h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Real Estate Agent</p>
                            </div>
                        </div>
                        <form class="space-y-4">
                            <div>
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Your
                                    Name</label>
                                <input type="text" id="name"
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3">
                            </div>
                            <div>
                                <label for="email"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                <input type="email" id="email"
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3">
                            </div>
                            <div>
                                <label for="phone"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
                                <input type="tel" id="phone"
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3">
                            </div>
                            <div>
                                <label for="message"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                                <textarea id="message" rows="4"
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Schedule a Tour</h2>
                        <form class="space-y-4">
                            <div>
                                <label for="tour-date"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Select
                                    Date</label>
                                <input type="date" id="tour-date"
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3">
                            </div>
                            <div>
                                <label for="tour-time"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Select
                                    Time</label>
                                <select id="tour-time"
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3">
                                    <option>9:00 AM</option>
                                    <option>10:00 AM</option>
                                    <option>11:00 AM</option>
                                    <option>1:00 PM</option>
                                    <option>2:00 PM</option>
                                    <option>3:00 PM</option>
                                    <option>4:00 PM</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                                Schedule Tour
                            </button>
                        </form>
                    </div>
                </div> --}}




               {{-- <livewire:order-form :property="$property" /> --}}



 <livewire:order-form :property="$property" />



            </div>
            
        </div>
       
    </div>
    

    <!-- Similar properties block preserved unchanged -->
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
                    <div
                        class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative h-48">
                            @if($similarProperty->images->count() > 0)
                                <img src="{{ asset('storage/' . $similarProperty->images->first()->path) }}"
                                    alt="{{ $similarProperty->title }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                    <i class="fa-solid fa-house h-12 w-12 text-gray-400"></i>
                                </div>
                            @endif
                            <div class="absolute top-2 right-2">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900/30 dark:text-indigo-200">
                                    {{ ucfirst($similarProperty->status) }}
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                <a href="{{ route('properties.show', $similarProperty) }}"
                                    class="hover:text-indigo-600 dark:hover:text-indigo-400">
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




@push('styles')
    <style>
        .lightbox {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.85);
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .lightbox.active {
            display: flex;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 6px;
        }
    </style>
@endpush

<!-- Script inserted inline to avoid timing issues; still safe if you use @stack('scripts') as well -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const images = @json($property->images->map(fn($img) => asset('storage/' . $img->path)));
        if (!images || images.length === 0) return;

        let currentIndex = 0;
        const mainImage = document.getElementById('main-property-image');
        const thumbs = Array.from(document.querySelectorAll('.property-thumb'));
        const prevBtn = document.getElementById('prev-image');
        const nextBtn = document.getElementById('next-image');

        // Preload
        images.forEach(src => { const i = new Image(); i.src = src; });

        function setMainImage(index) {
            if (!mainImage) return;
            index = Math.max(0, Math.min(index, images.length - 1));
            currentIndex = index;
            mainImage.style.transition = 'opacity 0.18s ease';
            mainImage.style.opacity = '0';
            setTimeout(() => {
                mainImage.src = images[index];
                mainImage.dataset.index = index;
                mainImage.style.opacity = '1';
            }, 120);

            thumbs.forEach(t => {
                if (parseInt(t.dataset.index, 10) === index) {
                    t.classList.add('ring-2', 'ring-indigo-500');
                } else {
                    t.classList.remove('ring-2', 'ring-indigo-500');
                }
            });
        }

        thumbs.forEach(t => {
            t.addEventListener('click', function () {
                const idx = parseInt(this.dataset.index, 10);
                if (!Number.isNaN(idx)) setMainImage(idx);
            });
        });

        if (prevBtn) {
            prevBtn.addEventListener('click', function (e) {
                e.preventDefault();
                setMainImage((currentIndex - 1 + images.length) % images.length);
            });
        }
        if (nextBtn) {
            nextBtn.addEventListener('click', function (e) {
                e.preventDefault();
                setMainImage((currentIndex + 1) % images.length);
            });
        }

        // Lightbox creation & helpers
        function createLightbox() {
            let lightbox = document.getElementById('lightbox');
            if (lightbox) return lightbox;
            lightbox = document.createElement('div');
            lightbox.id = 'lightbox';
            lightbox.className = 'lightbox';
            lightbox.innerHTML = `
            <button id="lb-close" style="position:absolute;top:18px;right:18px;background:rgba(0,0,0,0.5);color:#fff;border-radius:50%;width:40px;height:40px;border:none;font-size:22px;cursor:pointer;">×</button>
            <button id="lb-prev" style="position:absolute;left:18px;top:50%;transform:translateY(-50%);background:rgba(0,0,0,0.5);color:#fff;border-radius:50%;width:44px;height:44px;border:none;cursor:pointer;">‹</button>
            <img id="lb-img" src="${images[0]}" alt="Lightbox">
            <button id="lb-next" style="position:absolute;right:18px;top:50%;transform:translateY(-50%);background:rgba(0,0,0,0.5);color:#fff;border-radius:50%;width:44px;height:44px;border:none;cursor:pointer;">›</button>
        `;
            document.body.appendChild(lightbox);
            return lightbox;
        }

        window.openLightbox = function (index) {
            const lb = createLightbox();
            const lbImg = document.getElementById('lb-img');
            index = (typeof index === 'number') ? index : currentIndex;
            lbImg.style.opacity = '0';
            setTimeout(() => { lbImg.src = images[index]; lbImg.style.opacity = '1'; }, 80);
            lb.dataset.index = index;
            lb.classList.add('active');
            document.body.style.overflow = 'hidden';

            // attach controls (once)
            document.getElementById('lb-close').onclick = () => { lb.classList.remove('active'); document.body.style.overflow = ''; };
            document.getElementById('lb-prev').onclick = () => navigateLightbox(-1);
            document.getElementById('lb-next').onclick = () => navigateLightbox(1);
            lb.onclick = (e) => { if (e.target === lb) { lb.classList.remove('active'); document.body.style.overflow = ''; } };
        };

        function navigateLightbox(dir) {
            const lb = document.getElementById('lightbox');
            if (!lb) return;
            let idx = parseInt(lb.dataset.index || currentIndex, 10);
            idx = (idx + dir + images.length) % images.length;
            const lbImg = document.getElementById('lb-img');
            lb.dataset.index = idx;
            lbImg.style.opacity = '0';
            setTimeout(() => { lbImg.src = images[idx]; lbImg.style.opacity = '1'; }, 80);
        }

        // Bind main image click (open lightbox)
        if (mainImage) {
            mainImage.addEventListener('click', () => { window.openLightbox(currentIndex); });
        }

        // Keyboard nav for main image (left/right) and when lightbox open
        document.addEventListener('keydown', function (e) {
            if (e.key === 'ArrowLeft') setMainImage((currentIndex - 1 + images.length) % images.length);
            if (e.key === 'ArrowRight') setMainImage((currentIndex + 1) % images.length);
            if (e.key === 'Escape') {
                const lb = document.getElementById('lightbox');
                if (lb && lb.classList.contains('active')) { lb.classList.remove('active'); document.body.style.overflow = ''; }
            }
        });

        // init
        setMainImage(0);

        // debug log (remove if not needed)
        // console.log('Gallery initialized', { imagesCount: images.length, thumbsCount: thumbs.length });
    });
</script>