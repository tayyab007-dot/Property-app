<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 p-6">
        <!-- Header -->
        <div class="flex flex-col justify-between gap-4 md:flex-row md:items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Dashboard Overview</h1>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Welcome back, {{ auth()->user()->name }}! Here's what's happening with your properties.</p>
            </div>
            <button class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-medium text-white shadow-sm transition-colors hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <x-heroicon-o-plus class="h-4 w-4" />
                Add Property
            </button>
        </div>

        <!-- Stats Grid -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            <!-- Total Properties -->
            <div class="rounded-xl bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Properties</p>
                        <h3 class="mt-1 text-2xl font-semibold text-gray-900 dark:text-white">24</h3>
                        <p class="mt-1 text-xs text-green-600 dark:text-green-400">+12% from last month</p>
                    </div>
                    <div class="rounded-full bg-blue-100 p-3 dark:bg-blue-900/30">
                        <x-heroicon-o-home class="h-6 w-6 text-blue-600 dark:text-blue-400" />
                    </div>
                </div>
            </div>

            <!-- Active Listings -->
            <div class="rounded-xl bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Active Listings</p>
                        <h3 class="mt-1 text-2xl font-semibold text-gray-900 dark:text-white">18</h3>
                        <p class="mt-1 text-xs text-green-600 dark:text-green-400">+5 this week</p>
                    </div>
                    <div class="rounded-full bg-green-100 p-3 dark:bg-green-900/30">
                        <x-heroicon-o-clipboard-document-list class="h-6 w-6 text-green-600 dark:text-green-400" />
                    </div>
                </div>
            </div>

            <!-- Total Value -->
            <div class="rounded-xl bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Portfolio Value</p>
                        <h3 class="mt-1 text-2xl font-semibold text-gray-900 dark:text-white">$8.2M</h3>
                        <p class="mt-1 text-xs text-blue-600 dark:text-blue-400">+2.4% from last month</p>
                    </div>
                    <div class="rounded-full bg-purple-100 p-3 dark:bg-purple-900/30">
                        <x-heroicon-o-currency-dollar class="h-6 w-6 text-purple-600 dark:text-purple-400" />
                    </div>
                </div>
            </div>

            <!-- Inquiries -->
            <div class="rounded-xl bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">New Inquiries</p>
                        <h3 class="mt-1 text-2xl font-semibold text-gray-900 dark:text-white">14</h3>
                        <p class="mt-1 text-xs text-amber-600 dark:text-amber-400">3 require attention</p>
                    </div>
                    <div class="rounded-full bg-amber-100 p-3 dark:bg-amber-900/30">
                        <x-heroicon-o-envelope class="h-6 w-6 text-amber-600 dark:text-amber-400" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="grid gap-6 lg:grid-cols-3">
            <!-- Recent Properties -->
            <div class="lg:col-span-2">
                <div class="overflow-hidden rounded-xl bg-white shadow-sm dark:bg-gray-800">
                    <div class="border-b border-gray-200 px-6 py-4 dark:border-gray-700">
                        <h2 class="text-lg font-medium text-gray-900 dark:text-white">Recent Properties</h2>
                    </div>
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">
                        <!-- Property Item 1 -->
                        <div class="flex items-center p-4 hover:bg-gray-50 dark:hover:bg-gray-700/50">
                            <div class="h-16 w-16 flex-shrink-0 overflow-hidden rounded-lg">
                                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                                     alt="Property" 
                                     class="h-full w-full object-cover">
                            </div>
                            <div class="ml-4 flex-1">
                                <h3 class="font-medium text-gray-900 dark:text-white">Modern Family Home</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">123 Main St, San Francisco, CA</p>
                                <div class="mt-1 flex items-center text-sm text-gray-500 dark:text-gray-400">
                                    <span>4 Beds</span>
                                    <span class="mx-2">•</span>
                                    <span>3 Baths</span>
                                    <span class="mx-2">•</span>
                                    <span>2,450 sqft</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-medium text-gray-900 dark:text-white">$1,250,000</p>
                                <span class="inline-flex items-center rounded-full bg-green-100 px-2 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-400">Active</span>
                            </div>
                        </div>
                        
                        <!-- Property Item 2 -->
                        <div class="flex items-center p-4 hover:bg-gray-50 dark:hover:bg-gray-700/50">
                            <div class="h-16 w-16 flex-shrink-0 overflow-hidden rounded-lg">
                                <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                                     alt="Property" 
                                     class="h-full w-full object-cover">
                            </div>
                            <div class="ml-4 flex-1">
                                <h3 class="font-medium text-gray-900 dark:text-white">Luxury Villa</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">456 Oak Ave, Los Angeles, CA</p>
                                <div class="mt-1 flex items-center text-sm text-gray-500 dark:text-gray-400">
                                    <span>5 Beds</span>
                                    <span class="mx-2">•</span>
                                    <span>4.5 Baths</span>
                                    <span class="mx-2">•</span>
                                    <span>4,200 sqft</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-medium text-gray-900 dark:text-white">$2,850,000</p>
                                <span class="inline-flex items-center rounded-full bg-blue-100 px-2 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">Pending</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 px-6 py-3 text-right dark:border-gray-700">
                        <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">View all properties</a>
                    </div>
                </div>
            </div>

            <!-- Quick Actions & Recent Activity -->
            <div class="space-y-6">
                <!-- Quick Actions -->
                <div class="overflow-hidden rounded-xl bg-white shadow-sm dark:bg-gray-800">
                    <div class="border-b border-gray-200 px-6 py-4 dark:border-gray-700">
                        <h2 class="text-lg font-medium text-gray-900 dark:text-white">Quick Actions</h2>
                    </div>
                    <div class="p-4">
                        <div class="grid grid-cols-2 gap-3">
                            <a href="#" class="flex flex-col items-center justify-center rounded-lg border border-gray-200 p-4 text-center transition-colors hover:bg-gray-50 dark:border-gray-700 dark:hover:bg-gray-700/50">
                                <x-heroicon-o-plus-circle class="mb-2 h-6 w-6 text-blue-600 dark:text-blue-400" />
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-200">Add Property</span>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center rounded-lg border border-gray-200 p-4 text-center transition-colors hover:bg-gray-50 dark:border-gray-700 dark:hover:bg-gray-700/50">
                                <x-heroicon-o-user-plus class="mb-2 h-6 w-6 text-green-600 dark:text-green-400" />
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-200">Add Client</span>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center rounded-lg border border-gray-200 p-4 text-center transition-colors hover:bg-gray-50 dark:border-gray-700 dark:hover:bg-gray-700/50">
                                <x-heroicon-o-document-text class="mb-2 h-6 w-6 text-purple-600 dark:text-purple-400" />
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-200">Generate Report</span>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center rounded-lg border border-gray-200 p-4 text-center transition-colors hover:bg-gray-50 dark:border-gray-700 dark:hover:bg-gray-700/50">
                                <x-heroicon-o-cog-6-tooth class="mb-2 h-6 w-6 text-amber-600 dark:text-amber-400" />
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-200">Settings</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="overflow-hidden rounded-xl bg-white shadow-sm dark:bg-gray-800">
                    <div class="border-b border-gray-200 px-6 py-4 dark:border-gray-700">
                        <h2 class="text-lg font-medium text-gray-900 dark:text-white">Recent Activity</h2>
                    </div>
                    <div class="p-4">
                        <div class="space-y-4">
                            <!-- Activity Item 1 -->
                            <div class="flex items-start">
                                <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-600 dark:bg-blue-900/30 dark:text-blue-400">
                                    <x-heroicon-o-envelope class="h-5 w-5" />
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">New inquiry received</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">From John D. about Modern Family Home</p>
                                    <p class="mt-1 text-xs text-gray-400">2 hours ago</p>
                                </div>
                            </div>
                            
                            <!-- Activity Item 2 -->
                            <div class="flex items-start">
                                <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-green-100 text-green-600 dark:bg-green-900/30 dark:text-green-400">
                                    <x-heroicon-o-check-circle class="h-5 w-5" />
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Property listed</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Luxury Villa is now active</p>
                                    <p class="mt-1 text-xs text-gray-400">5 hours ago</p>
                                </div>
                            </div>
                            
                            <!-- Activity Item 3 -->
                            <div class="flex items-start">
                                <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-purple-100 text-purple-600 dark:bg-purple-900/30 dark:text-purple-400">
                                    <x-heroicon-o-user-group class="h-5 w-5" />
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">New client added</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Sarah Johnson</p>
                                    <p class="mt-1 text-xs text-gray-400">1 day ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">View all activity</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
