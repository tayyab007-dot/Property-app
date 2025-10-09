
@can('manage reports')

<div class="p-6 bg-white shadow-md rounded-lg">
    <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-4 mb-6">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">{{ $agent->agency_name }}</h2>
            <p class="text-sm text-gray-500">Agent report and published properties overview</p>
        </div>

        <div class="flex items-center gap-3">
            <a href="{{ route('dashboard.reports.agents') }}" class="inline-flex items-center gap-2 bg-gray-100 text-gray-700 px-3 py-2 rounded-md hover:bg-gray-200 text-sm">
                <!-- back icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to Reports
            </a>

            <a href="#" class="inline-flex items-center gap-2 bg-indigo-600 text-white px-3 py-2 rounded-md hover:bg-indigo-700 text-sm">
                <!-- download pdf -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v12m0 0l-4-4m4 4l4-4M21 21H3" />
                </svg>
                Download
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="p-4 bg-gray-50 rounded-md">
            <div class="text-xs text-gray-500">Email</div>
            <div class="text-sm font-medium text-gray-800">{{ $agent->email }}</div>
        </div>

        <div class="p-4 bg-gray-50 rounded-md">
            <div class="text-xs text-gray-500">Phone</div>
            <div class="text-sm font-medium text-gray-800">{{ $agent->phone_number ?? '-' }}</div>
        </div>

        <div class="p-4 bg-gray-50 rounded-md">
            <div class="text-xs text-gray-500">Total Properties</div>
            <div class="text-sm font-medium text-gray-800">{{ $agent->properties->count() }}</div>
        </div>
    </div>

    <h3 class="text-lg font-semibold mb-3">Properties Published</h3>

    <div class="space-y-3">
        @forelse($agent->properties as $property)
            <div class="flex flex-col md:flex-row md:items-center md:justify-between p-4 border rounded-md hover:shadow-sm">
                <div>
                    <div class="text-sm font-medium text-gray-800">{{ $property->title }}</div>
                    <div class="text-xs text-gray-500">{{ $property->address }}</div>
                </div>

                <div class="mt-3 md:mt-0 text-sm text-gray-500 flex items-center gap-4">
                    <div>
                        <div class="text-xs text-gray-400">Published</div>
                        <div class="text-sm text-gray-700">{{ $property->created_at->format('d M Y') }}</div>
                    </div>

                    <a href="{{ route('dashboard.properties.show', $property->id) }}" class="text-sm text-indigo-600 hover:underline">View</a>
                </div>
            </div>
        @empty
            <div class="p-4 text-center text-gray-500 border rounded-md">No properties published.</div>
        @endforelse
    </div>
    
</div>
@endcan