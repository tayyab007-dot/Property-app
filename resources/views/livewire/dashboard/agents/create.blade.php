@can('manage agents')


    <div class="container mx-auto px-4 py-8">
        <div class="mb-6 flex justify-between items-center">
            <h2 class="text-2xl font-bold text-gray-800">Add New Agent</h2>
            <a href="{{ route('dashboard.agents.index') }}"
                class="inline-flex items-center bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition duration-150 ease-in-out shadow-sm">
                <i class="fas fa-arrow-left mr-2"></i> Back to List
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <form wire:submit.prevent="store" class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Left Column -->
                    <div class="space-y-6">
                        <div>
                            <label for="agency_name" class="block text-sm font-medium text-gray-700 mb-1">Agency
                                Name</label>
                            <input type="text" wire:model="agency_name" id="agency_name"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                placeholder="Enter agency name">
                            @error('agency_name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="license_no" class="block text-sm font-medium text-gray-700 mb-1">License
                                Number</label>
                            <input type="text" wire:model="license_no" id="license_no"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                placeholder="Enter license number">
                            @error('license_no')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Phone
                                Number</label>
                            <input type="text" wire:model="phone_number" id="phone_number"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                placeholder="Enter phone number">
                            @error('phone_number')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" wire:model="email" id="email"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                placeholder="Enter email address">
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                            <input type="text" wire:model="address" id="address"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                placeholder="Enter full address">
                            @error('address')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Bio</label>
                            <textarea wire:model="bio" id="bio" rows="4"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                placeholder="Write a brief introduction..."></textarea>
                            @error('bio')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- <div class="flex items-center space-x-2">
                            <label for="is_verified" class="text-sm font-medium text-gray-700">
                                <input type="checkbox" wire:model="is_verified" id="is_verified" class="mr-2">
                                Is Verified
                            </label>
                        </div> --}}


                        <div class="flex items-center space-x-2">
                            <label for="is_verified" class="text-sm font-medium text-gray-700 flex items-center">
                                <input type="checkbox" wire:model="is_verified" id="is_verified" class="mr-2">
                                Is Verified
                            </label>

                            <span
                                class="text-sm {{ $is_verified ? 'text-green-600 font-semibold' : 'text-red-600 font-semibold' }}">
                                {{ $is_verified ? 'Verified' : 'Not Verified' }}
                            </span>
                        </div>


                        <div>
                            <label for="profile_image" class="block text-sm font-medium text-gray-700 mb-1">Profile
                                Image</label>
                            <input type="file" wire:model="profile_image" id="profile_image"
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                            @error('profile_image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            @if($profile_image)
                                <div class="mt-2">
                                    <img src="{{ $profile_image->temporaryUrl() }}" class="w-20 h-20 rounded-lg object-cover">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mt-8 border-t pt-6">
                    <button type="submit"
                        class="w-full md:w-auto bg-blue-600 text-white px-6 py-2.5 rounded-lg hover:bg-blue-700 transition duration-150 ease-in-out shadow-sm">
                        <i class="fas fa-plus-circle mr-2"></i> Create Agent
                    </button>
                </div>
            </form>
        </div>
    </div>
@endcan