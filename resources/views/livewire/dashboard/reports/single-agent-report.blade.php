@can('manage reports')
    

<div class="p-6 bg-white shadow rounded-lg">
    <h2 class="text-xl font-bold mb-4">Report for {{ $agent->agency_name }}</h2>

    <div class="mb-4">
        <p><strong>Email:</strong> {{ $agent->email }}</p>
        <p><strong>Phone:</strong> {{ $agent->phone_number }}</p>
        <p><strong>Total Properties:</strong> {{ $agent->properties->count() }}</p>
    </div>

    <h3 class="text-lg font-semibold mb-2">Properties Published</h3>
    <table class="table-auto w-full border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 border">Title</th>
                <th class="px-4 py-2 border">Address</th>
                <th class="px-4 py-2 border">Created At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($agent->properties as $property)
                <tr>
                    <td class="px-4 py-2 border">{{ $property->title }}</td>
                    <td class="px-4 py-2 border">{{ $property->address }}</td>
                    <td class="px-4 py-2 border">{{ $property->created_at->format('d M Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-4 py-2 border text-center text-gray-500">
                        No properties published.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        <a href="{{ route('dashboard.reports.agents') }}" 
           class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-gray-600 text-sm">
           Back to Reports
        </a>
    </div>
</div>
@endcan