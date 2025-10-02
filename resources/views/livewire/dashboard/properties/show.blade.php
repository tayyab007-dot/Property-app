

<div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-xl border border-gray-200">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-gray-800">🏡 Property Details</h2>
        <a href="{{ route('dashboard.properties.index') }}"
           class="inline-flex items-center bg-gray-700 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-800 transition">
            ← Back
        </a>
    </div>

    <!-- Property Title & Description -->
    <div class="mb-6">
        <h3 class="text-2xl font-semibold text-gray-900 mb-2">{{ $property->title }}</h3>
        <p class="text-gray-600 leading-relaxed">{{ $property->description }}</p>
    </div>

    <!-- Property Info -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
            <p class="text-sm text-gray-500">Price</p>
            <p class="text-lg font-bold text-green-600">${{ number_format($property->price, 2) }}</p>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
            <p class="text-sm text-gray-500">Type</p>
            <p class="text-lg font-bold">{{ ucfirst($property->type) }}</p>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
            <p class="text-sm text-gray-500">Property Type</p>
            <p class="text-lg font-bold">{{ ucfirst($property->property_type) }}</p>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
            <p class="text-sm text-gray-500">Status</p>
            <p class="text-lg font-bold text-blue-600">{{ ucfirst($property->status) }}</p>
        </div>
    </div>

    <!-- Rooms & Area -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white border rounded-lg p-4 text-center">
            <p class="text-sm text-gray-500">Bedrooms</p>
            <p class="text-xl font-semibold">{{ $property->bedrooms ?? '-' }}</p>
        </div>
        <div class="bg-white border rounded-lg p-4 text-center">
            <p class="text-sm text-gray-500">Bathrooms</p>
            <p class="text-xl font-semibold">{{ $property->bathrooms ?? '-' }}</p>
        </div>
        <div class="bg-white border rounded-lg p-4 text-center">
            <p class="text-sm text-gray-500">Area</p>
            <p class="text-xl font-semibold">{{ $property->area ? $property->area . ' sq ft' : '-' }}</p>
        </div>
    </div>

    <!-- Address -->
    <div class="mb-6">
        <p class="text-sm text-gray-500">Address</p>
        <p class="text-lg font-medium text-gray-800">{{ $property->address }}</p>
    </div>

    <!-- Location -->
    <div class="grid grid-cols-2 gap-6">
        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
            <p class="text-sm text-gray-500">Latitude</p>
            <p class="text-lg font-semibold">{{ $property->latitude ?? '-' }}</p>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
            <p class="text-sm text-gray-500">Longitude</p>
            <p class="text-lg font-semibold">{{ $property->longitude ?? '-' }}</p>
        </div>
    </div>

             {{-- In both show.blade.php and edit.blade.php --}}
<div class="grid grid-cols-3 gap-4 mb-6">
    @foreach($property->images as $image)
        <div class="relative group">
            <img src="{{ asset('storage/' . $image->path) }}" 
                 alt="Property Image" 
                 class="w-full h-48 object-cover rounded-lg shadow-md border border-gray-200">
            {{-- Show delete button ONLY in edit mode --}}
           
        </div>
    @endforeach
</div>
</div>
