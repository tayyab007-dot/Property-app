


{{-- 
<div class="p-6">
    @if (session()->has('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
        {{ session('error') }}
    </div>
@endif
    <!-- Header with search and filters -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Properties Management</h1>
        <a href="{{ route('dashboard.properties.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700">
            <i class="fas fa-plus mr-2"></i> Add Property
        </a>
    </div>

    <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>

                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($properties as $property) 
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{ $property->title }}</div>
                    </td> 
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{ $property->type }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{$property->price}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{$property->address}}</div>
                    </td>   
                     <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
    <a href="{{ route('dashboard.properties.edit', $property) }}" class="text-blue-600 hover:text-blue-900 mr-2">
        Edit  <!-- REMOVED THE EXTRA > CHARACTER -->
    </a> 
    <button wire:click="delete({{ $property->id }})" class="text-red-600 hover:text-red-900 mr-2" 
        onclick="return confirm('Are you sure you want to delete this property?')">
        Delete
    </button>
  <a href="{{ route('dashboard.properties.show', $property->id) }}" 
   class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
   Show
</a>
</td>
                </tr>        
                
                        
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">
                            No properties found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>

     </div>
</div>     --}}
































<div class="p-8">
    <!-- Alerts -->
    @if (session()->has('success'))
        <div class="mb-4 flex items-center p-4 bg-green-100 text-green-800 rounded-lg shadow-sm text-base">
            ✅ <span class="ml-2">{{ session('success') }}</span>
        </div>
    @endif

    @if (session()->has('error'))
        <div class="mb-4 flex items-center p-4 bg-red-100 text-red-800 rounded-lg shadow-sm text-base">
            ❌ <span class="ml-2">{{ session('error') }}</span>
        </div>
    @endif

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
        <h1 class="text-2xl font-bold text-gray-800">🏠 Properties Management</h1>

        <!-- Search -->
        <div class="flex items-center gap-2 w-full md:w-1/3">
            <input type="text" wire:model.live="search" 
                   placeholder="Search properties..."
                   class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring focus:ring-blue-200 text-sm" />
        </div>

        <!-- Add Property -->
        {{-- @can('create properties') --}}
            
        
        <a href="{{ route('dashboard.properties.create') }}"
           class="inline-flex items-center bg-blue-600 text-white px-4 py-2 rounded-md text-sm shadow hover:bg-blue-700 transition">
            <i class="fas fa-plus mr-1"></i> Add Property
        </a>
        {{-- @endcan --}}
    </div>

    <!-- Table -->
    <div class="overflow-x-auto rounded-lg shadow border border-gray-200">
        <table class="min-w-full bg-white border-collapse text-sm md:text-base">
            <thead class="bg-gray-100 text-gray-600 uppercase tracking-wider">
                <tr>
                    <th class="px-5 py-3 text-left font-semibold w-12">#</th>
                    <th class="px-5 py-3 text-left font-semibold">Title</th>
                    <th class="px-5 py-3 text-left font-semibold">Type</th>
                    <th class="px-5 py-3 text-left font-semibold">Price</th>
                    <th class="px-5 py-3 text-left font-semibold">Address</th>
                    <th class="px-5 py-3 text-center font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($properties as $index => $property)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-5 py-3 text-gray-700 font-medium">{{ $index + 1 }}</td>
                        <td class="px-5 py-3 font-medium text-gray-900">{{ $property->title }}</td>
                        <td class="px-5 py-3 text-gray-700">{{ ucfirst($property->type) }}</td>
                        <td class="px-5 py-3 text-gray-700">${{ number_format($property->price, 2) }}</td>
                        <td class="px-5 py-3 text-gray-700">{{ $property->address }}</td>
                        <td class="px-5 py-3 flex justify-center space-x-2">
                            <a href="{{ route('dashboard.properties.show', $property->id) }}"
                               class="inline-flex items-center bg-green-500 text-white px-3 py-1.5 rounded-md hover:bg-green-600 transition text-sm">
                                <i class="fas fa-eye mr-1"></i> Show
                            </a>
                            <a href="{{ route('dashboard.properties.edit', $property) }}"
                               class="inline-flex items-center bg-blue-500 text-white px-3 py-1.5 rounded-md hover:bg-blue-600 transition text-sm">
                                <i class="fas fa-edit mr-1"></i> Edit
                            </a>
                            <button wire:click="delete({{ $property->id }})"
                                    onclick="return confirm('Are you sure you want to delete this property?')"
                                    class="inline-flex items-center bg-red-500 text-white px-3 py-1.5 rounded-md hover:bg-red-600 transition text-sm">
                                <i class="fas fa-trash mr-1"></i> Delete
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-6 text-center text-gray-500">
                            No properties found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>





































{{-- <div class="bg-white rounded-lg shadow p-6">
                    <!-- Header with search and filters -->
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold text-gray-800">Properties Management</h1>
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700">
                            <i class="fas fa-plus mr-2"></i> Add Property
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="property-table">
                            <thead>
                                <tr>
                                    <th class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                    <th class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                    <th class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                    <th class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                                    <th class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">behria</div>
                                    </td> 
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">sale</div>
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">3022000.00</div>
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Model city Haripur</div>
                                    </td>   
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">behria</div>
                                    </td> 
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">sale</div>
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">3022000.00</div>
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Model city Haripur</div>
                                    </td>   
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">sweedish</div>
                                    </td> 
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">rent</div>
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">13099000.00</div>
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Lub</div>
                                    </td>   
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Aurora</div>
                                    </td> 
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">sale</div>
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">13099000.00</div>
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Lub Meel AWC</div>
                                    </td>   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}
































{{-- 
<div class="p-6">
    <!-- Header with search and filters -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Properties Management</h1>
        <a href="{{ route('dashboard.properties.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700">
            <i class="fas fa-plus mr-2"></i> Add Property
        </a>
    </div>
    
    <!-- Search and Filter Section -->
    <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <input type="text" wire:model.live="search" placeholder="Search properties..." class="w-full border rounded-lg px-3 py-2">
            </div>
            <div>
                <select wire:model.live="statusFilter" class="w-full border rounded-lg px-3 py-2">
                    <option value="">All Statuses</option>
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                    <option value="sold">Sold</option>
                    <option value="rented">Rented</option>
                </select>
            </div>
            <div>
                <select wire:model.live="typeFilter" class="w-full border rounded-lg px-3 py-2">
                    <option value="">All Types</option>
                    <option value="sell">For Sale</option>
                    <option value="rent">For Rent</option>
                </select>
            </div>
        </div>
        @if($search || $statusFilter || $typeFilter)
            <div class="mt-3">
                <button wire:click="resetFilters" class="text-blue-600 text-sm hover:text-blue-800">
                    Clear filters
                </button>
            </div>
        @endif
    </div>
    
    <!-- Properties Table -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($properties as $property)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $property->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                {{ ucfirst($property->type) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${{ number_format($property->price) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                @if($property->status === 'published') bg-green-100 text-green-800
                                @elseif($property->status === 'sold') bg-purple-100 text-purple-800
                                @elseif($property->status === 'rented') bg-yellow-100 text-yellow-800
                                @else bg-gray-100 text-gray-800 @endif">
                                {{ ucfirst($property->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ Str::limit($property->address, 30) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                             <!-- <a href="{{ route('dashboard.properties.edit', $property->id) }}" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>-->  
                            <button wire:click="delete({{ $property->id }})" class="text-red-600 hover:text-red-900" 
                                onclick="return confirm('Are you sure you want to delete this property?')">
                                Delete
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">
                            No properties found. 
                            <a href="{{ route('dashboard.properties.create') }}" class="text-blue-600 hover:text-blue-800 ml-1">
                                Create your first property
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        <!-- Pagination -->
        @if($properties->hasPages())
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                {{ $properties->links() }}
            </div>
        @endif
    </div>
</div>







 --}}
