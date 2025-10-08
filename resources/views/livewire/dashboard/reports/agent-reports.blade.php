@can('manage reports')

    <div class="p-6 bg-white shadow-md rounded-lg">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">Agents Report</h2>
                <p class="text-sm text-gray-500">Overview of registered agents and their published properties.</p>
            </div>

            <div class="mt-4 md:mt-0 flex items-center gap-3">


                <div>
                    <input type="text" wire:model.live="search" placeholder="Search agents..."
                        class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring focus:ring-blue-200 text-sm" />
                </div>




                <!-- <div class="flex gap-2">
                        <button class="inline-flex items-center gap-2 bg-white border border-gray-200 text-sm px-3 py-2 rounded-md hover:shadow">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v6h6M20 20v-6h-6" />
                            </svg>
                            Refresh
                        </button>

                        <div class="relative">
                            <button class="bg-indigo-600 text-white text-sm px-4 py-2 rounded-md hover:bg-indigo-700 inline-flex items-center gap-2">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v12m0 0l-4-4m4 4l4-4M21 21H3" />
                                </svg>
                                Export
                            </button>
                        </div>
                    </div> -->
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr class="text-left text-sm text-gray-600">
                        <th class="px-4 py-3">Agent</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3 text-center">Total Properties</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach($agents as $agent)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-4 align-middle">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex-shrink-0 h-10 w-10 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center font-semibold">
                                        {{ strtoupper(substr($agent->agency_name, 0, 1) ?? 'A') }}
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-800">{{ $agent->agency_name }}</div>
                                        <div class="text-xs text-gray-500">@if($agent->location) {{ $agent->location }} @endif
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-4 py-4 text-sm text-gray-600">{{ $agent->email }}</td>

                            <td class="px-4 py-4 text-center">
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-gray-100 text-gray-700">
                                    {{ $agent->properties_count }}
                                </span>
                            </td>

                            <td class="px-4 py-4 text-center">
                                <a href="{{ route('dashboard.reports.single-agent', $agent->id) }}"
                                    class="inline-flex items-center gap-2 bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-700 text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    View Report
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endcan