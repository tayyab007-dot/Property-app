<div class="container mx-auto px-4 py-8">
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-800">Agent Profile</h2>
        <div class="flex space-x-3">
            <a href="{{ route('dashboard.agents.edit', $agent->id) }}"
                class="inline-flex items-center bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-150 ease-in-out shadow-sm">
                <i class="fas fa-edit mr-2"></i> Edit Profile
            </a>
            <a href="{{ route('dashboard.agents.index') }}"
                class="inline-flex items-center bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition duration-150 ease-in-out shadow-sm">
                <i class="fas fa-arrow-left mr-2"></i> Back to List
            </a>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="p-6">
            <div class="flex flex-col md:flex-row">
                <!-- Left Column - Profile Image & Basic Info -->
                <div class="md:w-1/3 mb-6 md:mb-0">
                    <div class="text-center">
                        @if ($agent->profile_image)
                            <img src="{{ asset('storage/' . $agent->profile_image) }}" alt="{{ $agent->user?->name }}"
                                class="w-48 h-48 rounded-full mx-auto object-cover border-4 border-gray-100 shadow-lg">
                        @else
                            <div
                                class="w-48 h-48 rounded-full mx-auto bg-gray-200 flex items-center justify-center border-4 border-gray-100 shadow-lg">
                                <i class="fas fa-user text-6xl text-gray-400"></i>
                            </div>
                        @endif
                        <h3 class="mt-4 text-xl font-semibold text-gray-800">{{ $agent->user?->name ?? 'N/A' }}</h3>
                        <p class="text-gray-600">{{ $agent->agency_name }}</p>
                        @if ($agent->is_verified)
                            <span
                                class="inline-flex items-center px-3 py-1 mt-2 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                <i class="fas fa-check-circle mr-1"></i> Verified Agent
                            </span>
                        @else
                            <span
                                class="inline-flex items-center px-3 py-1 mt-2 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                                <i class="fas fa-clock mr-1"></i> Pending Verification
                            </span>
                        @endif
                    </div>
                </div>

                <!-- Right Column - Details -->
                <div class="md:w-2/3 md:pl-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Contact Information -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-lg font-semibold text-gray-700 mb-4">Contact Information</h4>
                            <div class="space-y-3">
                                <div>
                                    <p class="text-sm text-gray-500">Email</p>
                                    <p class="font-medium">{{ $agent->email ?? 'N/A' }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Phone Number</p>
                                    <p class="font-medium">{{ $agent->phone_number ?? 'N/A' }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Address</p>
                                    <p class="font-medium">{{ $agent->address ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Professional Information -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-lg font-semibold text-gray-700 mb-4">Professional Details</h4>
                            <div class="space-y-3">
                                <div>
                                    <p class="text-sm text-gray-500">License Number</p>
                                    <p class="font-medium">{{ $agent->license_no ?? 'N/A' }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Agency</p>
                                    <p class="font-medium">{{ $agent->agency_name ?? 'N/A' }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Agent ID</p>
                                    <p class="font-medium">#{{ $agent->id }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bio Section -->
                    <div class="mt-6 bg-gray-50 p-4 rounded-lg">
                        <h4 class="text-lg font-semibold text-gray-700 mb-2">Bio</h4>
                        <p class="text-gray-600">{{ $agent->bio ?? 'No bio available.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>