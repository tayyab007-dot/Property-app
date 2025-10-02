{{-- <div>
    <h2 class="text-xl font-bold mb-4">Agents</h2>


    @if (session('success'))
    <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <a href="{{ route('dashboard.agents.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">
        + Create Agent
    </a>

    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">ID</th>
                <th class="border p-2">Name</th>
                <th class="border p-2">Agency</th>
                <th class="border p-2">License No</th>
                <th class="border p-2">Phone</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Address</th>
                <th class="border p-2">Verified</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($agents as $agent)
            <tr>
                <td class="border p-2">{{ $agent->id }}</td>
                <td class="border p-2">{{ $agent->user?->name ?? 'N/A' }}</td>
                <td class="border p-2">{{ $agent->agency_name ?? '-' }}</td>
                <td class="border p-2">{{ $agent->license_no ?? '-' }}</td>
                <td class="border p-2">{{ $agent->phone_number ?? '-' }}</td>
                <td class="border p-2">{{ $agent->email ?? '-' }}</td>
                <td class="border p-2">{{ $agent->address ?? '-' }}</td>
                <td class="border p-2">
                    @if($agent->is_verified)
                    <span class="text-green-600 font-semibold">Yes</span>
                    @else
                    <span class="text-red-600 font-semibold">No</span>
                    @endif
                </td>
                <td class="border p-2">
                    <a href="{{ route('dashboard.agents.edit', $agent->id) }}" class="text-blue-600">Edit</a> |
                    <button wire:click="confirmDelete({{ $agent->id }})" class="text-red-600">Delete</button>
                </td>

                @if($confirmingDelete)
                <div class="mt-4 p-4 bg-red-100 border border-red-300 rounded">
                    <p>Are you sure you want to delete this agent?</p>
                    <div class="mt-2">
                        <button wire:click="delete" class="bg-red-600 text-white px-3 py-1 rounded">Yes, Delete</button>
                        <button wire:click="$set('confirmingDelete', false)"
                            class="bg-gray-400 text-white px-3 py-1 rounded">Cancel</button>
                    </div>
                </div>
                @endif


            </tr>
            @empty
            <tr>
                <td colspan="9" class="border p-4 text-center text-gray-500">No agents found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div> --}}



@can('manage agents')
    

<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Manage Agents</h2>
        <a href="{{ route('dashboard.agents.create') }}"
            class="inline-flex items-center bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-150 ease-in-out shadow-md">
            <i class="fas fa-plus mr-2"></i> Add New Agent
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md shadow-sm">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-2"></i>
                <p>{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Agency</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Contact Info</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($agents as $agent)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                #{{ $agent->id }}
                            </td> --}}

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{-- CHANGE MADE HERE: Use $loop->iteration instead of $agent->id --}}
                                #{{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @if($agent->profile_image)
                                            <img class="h-10 w-10 rounded-full object-cover"
                                                src="{{ asset('storage/' . $agent->profile_image) }}"
                                                alt="{{ $agent->user?->name }}">
                                        @else
                                            <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center">
                                                <i class="fas fa-user text-gray-400"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $agent->user?->name ?? 'N/A' }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{ $agent->email }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $agent->agency_name ?? '-' }}</div>
                                <div class="text-sm text-gray-500">License: {{ $agent->license_no ?? 'N/A' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $agent->phone_number ?? '-' }}</div>
                                <div class="text-sm text-gray-500">{{ $agent->address ?? '-' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($agent->is_verified)
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Verified
                                    </span>
                                @else
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Pending
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                <a href="{{ route('dashboard.agents.show', $agent->id) }}"
                                    class="text-indigo-600 hover:text-indigo-900">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('dashboard.agents.edit', $agent->id) }}"
                                    class="text-blue-600 hover:text-blue-900">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" wire:click="delete({{ $agent->id }})"
                                    onclick="return confirm('Are you sure you want to delete this agent?')"
                                    class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-10 text-center text-gray-500">
                                <div class="flex flex-col items-center justify-center">
                                    <i class="fas fa-users text-4xl text-gray-400 mb-3"></i>
                                    <p>No agents found</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endcan