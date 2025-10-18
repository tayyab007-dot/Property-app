<div class="p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-semibold mb-6">Contact Queries</h2>

    <table class="min-w-full border border-gray-200 rounded-lg">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">Name</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-left">Phone</th>
                <th class="p-3 text-left">Message</th>
                {{-- <th class="p-3 text-left">Status</th> --}}
                <th class="p-3 text-left">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($queries as $query)
                <tr class="border-t">
                    <td class="p-3">{{ $query->name }}</td>
                    <td class="p-3">{{ $query->email }}</td>
                    <td class="p-3">{{ $query->phone ?? '—' }}</td>
                    <td class="p-3">{{ Str::limit($query->message, 50) }}</td>
                    {{-- <td class="p-3">{{ ucfirst($query->status) }}</td> --}}
                    <td class="p-3">{{ $query->created_at->format('d M Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
