<div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-md">
    <div class="border-b pb-4 mb-6">
        <h2 class="text-3xl font-semibold text-gray-800 flex items-center gap-3">
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
            Edit Property
        </h2>
        <p class="text-gray-600 mt-1">Update property information and details</p>
    </div>

    @if (session()->has('success'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd" />
            </svg>
            {{ session('error') }}
        </div>
    @endif

    <form wire:submit.prevent="updateProperty" class="space-y-6">
        <!-- Basic Information -->
        <div class="bg-gray-50 p-6 rounded-lg space-y-4">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Basic Information</h3>

            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Title *</label>
                    <input type="text" wire:model="title"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    @error('title') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea wire:model="description" rows="4"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"></textarea>
                    @error('description') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Price *</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">$</span>
                        <input type="number" wire:model="price"
                            class="w-full border border-gray-300 rounded-lg pl-8 pr-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    </div>
                    @error('price') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <!-- Property Details -->
        <div class="bg-gray-50 p-6 rounded-lg space-y-4">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Property Details</h3>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Type *</label>
                    <select wire:model="type"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                        <option value="">Select type</option>
                        <option value="sale">Sale</option>
                        <option value="rent">Rent</option>
                    </select>
                    @error('type') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Property Type *</label>
                    <select wire:model="property_type"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                        <option value="">Select property type</option>
                        <option value="house">House</option>
                        <option value="plot">Plot</option>
                        <option value="apartment">Apartment</option>
                        <option value="shop">Shop</option>
                    </select>
                    @error('property_type') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Bedrooms</label>
                    <input type="number" wire:model="bedrooms" min="0"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Bathrooms</label>
                    <input type="number" wire:model="bathrooms" min="0"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Area (sq ft)</label>
                    <input type="number" wire:model="area" min="0"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Status *</label>
                <select wire:model="status"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    <option value="">Select status</option>
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                    <option value="sold">Sold</option>
                    <option value="rented">Rented</option>
                </select>
                @error('status') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Location -->
        <div class="bg-gray-50 p-6 rounded-lg space-y-4">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Location</h3>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Address *</label>
                <input type="text" wire:model="address"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                @error('address') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Latitude</label>
                    <input type="text" wire:model="latitude" placeholder="e.g. 40.7128"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Longitude</label>
                    <input type="text" wire:model="longitude" placeholder="e.g. -74.0060"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                </div>
            </div>
        </div>

        {{-- Existing Images --}}
        {{-- In both show.blade.php and edit.blade.php --}}
        <div class="grid grid-cols-3 gap-4 mb-6">
            @foreach($property->images as $image)
                <div class="relative group">
                    <img src="{{ asset('storage/' . $image->path) }}" alt="Property Image"
                        class="w-full h-48 object-cover rounded-lg shadow-md border border-gray-200">
                    {{-- Show delete button ONLY in edit mode --}}
                    <button wire:click="deleteImage({{ $image->id }})"
                        class="absolute top-2 right-2 bg-red-500 text-white p-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"
                        onclick="return confirm('Delete this image?')">
                        ✕
                    </button>
                </div>
            @endforeach
        </div>


        {{-- Add New Images --}}
        <div class="mb-3">
            <label for="newImages" class="form-label">Add New Images</label>
            <input wire:model="newImages" type="file" class="form-control" id="newImages" multiple accept="image/*">
            @error('newImages.*') <span class="text-danger">{{ $message }}</span> @enderror
            <div class="form-text">Max 5 images, 2MB each</div>
        </div>


        <div class="flex justify-end pt-6">
            <button type="submit"
                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                </svg>
                Update Property
            </button>
        </div>
    </form>
</div>