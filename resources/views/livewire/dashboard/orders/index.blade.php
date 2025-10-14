<div class="p-6 bg-white shadow rounded-lg">
    <h2 class="text-2xl font-semibold mb-4">Customer Messages</h2>

    <table class="w-full border-collapse">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">Name</th>
                <th class="p-2 border">Email</th>
                <th class="p-2 border">Phone</th>
                <th class="p-2 border">Message</th>
                <th class="p-2 border">Property</th>
                <th class="p-2 border">Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td class="p-2 border">{{ $order->name }}</td>
                    <td class="p-2 border">{{ $order->email }}</td>
                    <td class="p-2 border">{{ $order->phone }}</td>
                    <td class="p-2 border">{{ Str::limit($order->message, 40) }}</td>
                    {{-- <td class="p-2 border">{{ $order->property->title ?? '—' }}</td> --}}
                    <td class="p-2 border">
                        @if ($order->property)
                            <a href="{{ route('properties.show', $order->property) }}" class="text-blue-600 hover:underline">
                                {{ Str::limit($order->property->title, 30) }}
                            </a>
                        @else
                            <span class="text-gray-500">Contact Form</span>
                        @endif
                    </td>
                    <td class="p-2 border">{{ $order->created_at->format('d M Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="p-3 text-center text-gray-500">No messages yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
