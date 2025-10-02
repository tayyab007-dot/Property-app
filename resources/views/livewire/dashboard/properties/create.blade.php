<div class="max-w-5xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
    <div class="border-b border-gray-200 pb-6 mb-8">
        <h2 class="text-4xl font-bold text-gray-900">Create New Property</h2>
        <p class="text-gray-600 mt-2 text-lg">Fill in the details below to list your property on our platform</p>
    </div>

    @if (session()->has('message'))
        <div
            class="mb-8 p-4 bg-emerald-50 border-l-4 border-emerald-400 text-emerald-700 rounded-r-lg shadow-sm flex items-center animate-fadeIn">
            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>
            <span class="font-medium">{{ session('message') }}</span>
        </div>
    @endif

    @if (session()->has('error'))
        <div
            class="mb-8 p-4 bg-red-50 border-l-4 border-red-400 text-red-700 rounded-r-lg shadow-sm flex items-center animate-fadeIn">
            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd" />
            </svg>
            <span class="font-medium">{{ session('error') }}</span>
        </div>
    @endif

    <form wire:submit="save" enctype="multipart/form-data"> <!-- ADD enctype -->
        <!-- Basic Information -->
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 space-y-6 mb-8">
            <div class="flex items-center space-x-3 mb-6">
                <div class="bg-blue-100 p-2 rounded-lg">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Basic Information</h3>
            </div>

            <div class="grid grid-cols-1 gap-8">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Property Title *</label>
                    <input type="text" wire:model="title" placeholder="Enter property title"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 placeholder-gray-400">
                    @error('title') <span class="text-sm text-red-600 mt-2 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Description *</label>
                    <textarea wire:model="description" rows="4" placeholder="Describe your property"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 placeholder-gray-400"></textarea>
                    @error('description') <span
                    class="text-sm text-red-600 mt-2 block font-medium">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Price *</label>
                    <div class="relative">
                        <span
                            class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-500 text-lg font-medium">$</span>
                        <input type="number" wire:model="price" placeholder="Enter price"
                            class="w-full border border-gray-300 rounded-lg pl-8 pr-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 placeholder-gray-400">
                    </div>
                    @error('price') <span class="text-sm text-red-600 mt-2 block font-medium">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Property Details -->
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 space-y-6 mb-8">
            <div class="flex items-center space-x-3 mb-6">
                <div class="bg-purple-100 p-2 rounded-lg">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Property Details</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Property Purpose *</label>
                    <select wire:model="type"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200 bg-white">
                        <option value="">Select purpose</option>
                        <option value="sale">For Sale</option>
                        <option value="rent">For Rent</option>
                    </select>
                    @error('type') <span class="text-sm text-red-600 mt-2 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Property Category *</label>
                    <select wire:model="property_type"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200 bg-white">
                        <option value="">Select category</option>
                        <option value="house">Residential House</option>
                        <option value="plot">Land Plot</option>
                        <option value="apartment">Apartment</option>
                        <option value="shop">Commercial Shop</option>
                    </select>
                    @error('property_type') <span
                    class="text-sm text-red-600 mt-2 block font-medium">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="relative">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Bedrooms</label>
                    <div class="relative">
                        <input type="number" wire:model="bedrooms" min="0" placeholder="Number of bedrooms"
                            class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Bathrooms</label>
                    <div class="relative">
                        <input type="number" wire:model="bathrooms" min="0" placeholder="Number of bathrooms"
                            class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Area (sq ft)</label>
                    <div class="relative">
                        <input type="number" wire:model="area" min="0" placeholder="Property area"
                            class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Location -->
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 space-y-6 mb-8">
            <div class="flex items-center space-x-3 mb-6">
                <div class="bg-green-100 p-2 rounded-lg">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Location Details</h3>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Complete Address *</label>
                <div class="relative">
                    <input type="text" wire:model="address" placeholder="Enter complete property address"
                        class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-200">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        </svg>
                    </div>
                </div>
                @error('address') <span class="text-sm text-red-600 mt-2 block font-medium">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Latitude</label>
                    <div class="relative">
                        <input type="text" wire:model="latitude" placeholder="e.g. 40.7128"
                            class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-200">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Longitude</label>
                    <div class="relative">
                        <input type="text" wire:model="longitude" placeholder="e.g. -74.0060"
                            class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-200">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 mb-8">
            <div class="flex items-center space-x-3 mb-6">
                <div class="bg-amber-100 p-2 rounded-lg">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Property Amenities</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <label
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-200 cursor-pointer">
                    <input type="checkbox" wire:model.live="amenities" value="Built in Year: 2025"
                        class="w-5 h-5 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
                    <span class="ml-3 text-gray-700 font-medium">Built in Year: 2025</span>
                </label>

                <label
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-200 cursor-pointer">
                    <input type="checkbox" wire:model.live="amenities" value="Central Air Conditioning"
                        class="w-5 h-5 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
                    <span class="ml-3 text-gray-700 font-medium">Central Air Conditioning</span>
                </label>

                <label
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-200 cursor-pointer">
                    <input type="checkbox" wire:model.live="amenities" value="Electricity Backup"
                        class="w-5 h-5 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
                    <span class="ml-3 text-gray-700 font-medium">Electricity Backup</span>
                </label>

                <label
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-200 cursor-pointer">
                    <input type="checkbox" wire:model.live="amenities" value="Drawing Room"
                        class="w-5 h-5 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
                    <span class="ml-3 text-gray-700 font-medium">Drawing Room</span>
                </label>

                <label
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-200 cursor-pointer">
                    <input type="checkbox" wire:model.live="amenities" value="Study Room"
                        class="w-5 h-5 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
                    <span class="ml-3 text-gray-700 font-medium">Study Room</span>
                </label>

                <label
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-200 cursor-pointer">
                    <input type="checkbox" wire:model.live="amenities" value="Gym"
                        class="w-5 h-5 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
                    <span class="ml-3 text-gray-700 font-medium">Gym</span>
                </label>

                <label
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-200 cursor-pointer">
                    <input type="checkbox" wire:model.live="amenities" value="Lounge or Sitting Room"
                        class="w-5 h-5 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
                    <span class="ml-3 text-gray-700 font-medium">Lounge</span>
                </label>

                <label
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-200 cursor-pointer">
                    <input type="checkbox" wire:model.live="amenities" value="Parking Spaces"
                        class="w-5 h-5 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
                    <span class="ml-3 text-gray-700 font-medium">Parking Spaces</span>
                </label>

                <label
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-200 cursor-pointer">
                    <input type="checkbox" wire:model.live="amenities" value="Central Heating"
                        class="w-5 h-5 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
                    <span class="ml-3 text-gray-700 font-medium">Central Heating</span>
                </label>

                <label
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-200 cursor-pointer">
                    <input type="checkbox" wire:model.live="amenities" value="Waste Disposal"
                        class="w-5 h-5 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
                    <span class="ml-3 text-gray-700 font-medium">Waste Disposal</span>
                </label>

                <label
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-200 cursor-pointer">
                    <input type="checkbox" wire:model.live="amenities" value="Furnished"
                        class="w-5 h-5 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
                    <span class="ml-3 text-gray-700 font-medium">Furnished</span>
                </label>

            </div>
        </div>

        <!-- Image Upload Section -->
        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-4">
            <div class="flex items-center space-x-2 mb-4">
                <div class="bg-indigo-100 p-2 rounded-lg">
                    <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-gray-900">Property Images</h3>
            </div>

            <div class="space-y-2">
                <p class="text-gray-600 text-sm">Upload high-quality images of your property (Maximum 5 images)</p>
                <div class="flex items-center justify-center w-full">
                    <label for="images"
                        class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition duration-200">
                        <div class="flex flex-col items-center justify-center pt-2 pb-3">
                            <svg class="w-6 h-6 mb-1 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <p class="mb-1 text-xs text-gray-500"><span class="font-semibold">Click to upload</span> or
                                drag and drop</p>
                            <p class="text-xs text-gray-500">PNG, JPG or JPEG (MAX. 5 MB each)</p>
                        </div>
                        <input wire:model="images" type="file" id="images" multiple class="hidden">
                    </label>
                </div>
                @error('images.*') <span class="text-xs text-red-600 block mt-2">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end pt-6">
            <button type="submit"
                class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-semibold rounded-xl shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Create Property
            </button>
        </div>
    </form>
</div>