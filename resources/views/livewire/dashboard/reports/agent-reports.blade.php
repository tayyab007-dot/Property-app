@can('manage reports')
    

<div class="p-6 bg-white shadow rounded-lg">
    <h2 class="text-xl font-bold mb-4">Agents Report</h2>

    <table class="table-auto w-full border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 border">Agent Name</th>
                <th class="px-4 py-2 border">Email</th>
                <th class="px-4 py-2 border">Total Properties</th>
                <th class="px-4 py-2 border">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agents as $agent)
                <tr>
                    <td class="px-4 py-2 border">{{ $agent->agency_name }}</td>
                    <td class="px-4 py-2 border">{{ $agent->email }}</td>
                    <td class="px-4 py-2 border text-center">{{ $agent->properties_count }}</td>
                    <td class="px-4 py-2 border text-center">
                        <a href="{{ route('dashboard.reports.single-agent', $agent->id) }}" 
                           class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-sm">
                           View Report
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endcan

{{-- <h1>Hello how are you</h1> --}}