


<div class="p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        {{-- <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
            <div class="flex justify-between items-start">
                <div>
                    <h3 class="text-sm font-medium text-gray-500">Total Users</h3>
                    <p class="text-2xl font-bold text-gray-800">2,548</p>
                    <p class="text-xs text-green-500 mt-1"><i class="fas fa-arrow-up mr-1"></i> 12% from last
                        month</p>
                </div>
                <div class="bg-blue-100 rounded-full"
                    style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-users text-blue-600 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-green-500">
            <div class="flex justify-between items-start">
                <div>
                    <h3 class="text-sm font-medium text-gray-500">Properties</h3>
                    <p class="text-2xl font-bold text-gray-800">684</p>
                    <p class="text-xs text-green-500 mt-1">
                        <i class="fas fa-arrow-up mr-1"></i> 8% from last month
                    </p>
                </div>
                <div class="bg-green-100 rounded-full"
                    style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-building text-green-600 text-xl"></i>
                </div>
            </div>
        </div> --}}

        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
    <div class="flex justify-between items-start">
        <div>
            <h3 class="text-sm font-medium text-gray-500">Total Users</h3>
            <p class="text-2xl font-bold text-gray-800">{{ \App\Models\User::count() }}</p>
            <p class="text-xs text-green-500 mt-1">
                <i class="fas fa-arrow-up mr-1"></i> 12% from last month
            </p>
        </div>
        <div class="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center">
            <i class="fas fa-users text-blue-600 text-xl"></i>
        </div>
    </div>
</div>

<div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-green-500">
    <div class="flex justify-between items-start">
        <div>
            <h3 class="text-sm font-medium text-gray-500">Properties</h3>
            <p class="text-2xl font-bold text-gray-800">{{ \App\Models\Property::count() }}</p>
            <p class="text-xs text-green-500 mt-1">
                <i class="fas fa-arrow-up mr-1"></i> 8% from last month
            </p>
        </div>
        <div class="bg-green-100 rounded-full w-12 h-12 flex items-center justify-center">
            <i class="fas fa-building text-green-600 text-xl"></i>
        </div>
    </div>
</div>


        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-purple-500">
            <div class="flex justify-between items-start">
                <div>
                    <h3 class="text-sm font-medium text-gray-500">Revenue</h3>
                    <p class="text-2xl font-bold text-gray-800">$86,500</p>
                    <p class="text-xs text-green-500 mt-1"><i class="fas fa-arrow-up mr-1"></i> 15% from last
                        month</p>
                </div>
                <div class="bg-purple-100 rounded-full"
                    style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-dollar-sign text-purple-600 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-red-500">
            <div class="flex justify-between items-start">
                <div>
                    <h3 class="text-sm font-medium text-gray-500">Pending Tasks</h3>
                    <p class="text-2xl font-bold text-gray-800">24</p>
                    <p class="text-xs text-red-500 mt-1"><i class="fas fa-arrow-up mr-1"></i> 3% from last month
                    </p>
                </div>
                <div class="bg-red-100 rounded-full"
                    style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-tasks text-red-600 text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg font-semibold">Recent Activity</h2>
                <a href="#" class="text-sm text-primary hover:underline">View all</a>
            </div>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="bg-blue-100 p-2 rounded-full mr-4">
                        <i class="fas fa-user-plus text-blue-600"
                            style="width: 24px; height: 24px; display: flex; align-items: center; justify-content: center;"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium">New user registered</p>
                        <p class="text-xs text-gray-500">John Doe joined as a realtor</p>
                        <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-green-100 p-2 rounded-full mr-4">
                        <i class="fas fa-home text-green-600"
                            style="width: 24px; height: 24px; display: flex; align-items: center; justify-content: center;"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium">Property added</p>
                        <p class="text-xs text-gray-500">Luxury villa in Beverly Hills</p>
                        <p class="text-xs text-gray-400 mt-1">5 hours ago</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-purple-100 p-2 rounded-full mr-4">
                        <i class="fas fa-dollar-sign text-purple-600"
                            style="width: 24px; height: 24px; display: flex; align-items: center; justify-content: center;"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium">Payment received</p>
                        <p class="text-xs text-gray-500">$3,500 from Sarah Johnson</p>
                        <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-yellow-100 p-2 rounded-full mr-4">
                        <i class="fas fa-exclamation-circle text-yellow-600"
                            style="width: 24px; height: 24px; display: flex; align-items: center; justify-content: center;"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium">Maintenance request</p>
                        <p class="text-xs text-gray-500">Apartment #42B reported an issue</p>
                        <p class="text-xs text-gray-400 mt-1">2 days ago</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h2 class="text-lg font-semibold mb-6">Quick Actions</h2>
            <div class="grid grid-cols-2 gap-4">
               @can('manage agents')
                   
              
                <a href="{ route('dashboard.agents.create') }"
                    class="flex flex-col items-center justify-center p-4 bg-blue-50 rounded-lg border border-blue-100 hover:bg-blue-100 transition">
                    <div class="bg-blue-100 p-3 rounded-full mb-2">
                        <i class="fas fa-user-plus text-blue-600 text-xl"
                            style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;"></i>
                    </div>
                    <span class="text-sm font-medium">Add User</span>
                </a>

                 @endcan
                <a href="{{ route('dashboard.properties.create') }}"
                    class="flex flex-col items-center justify-center p-4 bg-green-50 rounded-lg border border-green-100 hover:bg-green-100 transition">
                    <div class="bg-green-100 p-3 rounded-full mb-2">
                        <i class="fas fa-home text-green-600 text-xl"
                            style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;"></i>
                    </div>
                    <span class="text-sm font-medium">Add Property</span>
                </a>

                @can('manage reports')
                    
               
               <a href="{{ route('dashboard.reports.agents') }}"
                    class="flex flex-col items-center justify-center p-4 bg-purple-50 rounded-lg border border-purple-100 hover:bg-purple-100 transition">
                    <div class="bg-purple-100 p-3 rounded-full mb-2">
                        <i class="fas fa-file-invoice text-purple-700 text-xl"
                            style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;"></i>
                    </div>
                    <span class="text-sm font-medium">Generate Report</span>
                </a>

                 @endcan
                <a href="#"
                    class="flex flex-col items-center justify-center p-4 bg-yellow-50 rounded-lg border border-yellow-100 hover:bg-yellow-100 transition">
                    <div class="bg-yellow-100 p-3 rounded-full mb-2">
                        <i class="fas fa-cog text-yellow-600 text-xl"
                            style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;"></i>
                    </div>
                    <span class="text-sm font-medium">Settings</span>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-white p-8 rounded-2xl shadow-sm mb-8">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-xl font-semibold text-gray-800">Property Statistics</h2>
            <div class="flex space-x-2">
                <button class="p-2 rounded-full hover:bg-gray-100">
                    <i class="fas fa-sync-alt text-gray-600"></i>
                </button>
                <button class="p-2 rounded-full hover:bg-gray-100">
                    <i class="fas fa-download text-gray-600"></i>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="stat-card p-6">
                <div class="flex items-center mb-4">
                    <div class="icon-circle bg-blue-100 mr-3">
                        <i class="fas fa-home text-blue-600"
                            style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800">By Type</h3>
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-medium">Residential</span>
                            <span class="text-blue-600 font-medium">62%</span>
                        </div>
                        <div class="h-3 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full"
                                style="width: 62%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-medium">Commercial</span>
                            <span class="text-green-600 font-medium">24%</span>
                        </div>
                        <div class="h-3 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full"
                                style="width: 24%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-medium">Land</span>
                            <span class="text-purple-600 font-medium">14%</span>
                        </div>
                        <div class="h-3 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-purple-500 to-purple-600 rounded-full"
                                style="width: 14%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="stat-card p-6">
                <div class="flex items-center mb-4">
                    <div class="icon-circle bg-green-100 mr-3">
                        <i class="fas fa-chart-pie text-green-600"
                            style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800">By Status</h3>
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-medium">Available</span>
                            <span class="text-green-600 font-medium">45%</span>
                        </div>
                        <div class="h-3 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full"
                                style="width: 45%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-medium">Rented</span>
                            <span class="text-blue-600 font-medium">32%</span>
                        </div>
                        <div class="h-3 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full"
                                style="width: 32%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-medium">Sold</span>
                            <span class="text-purple-600 font-medium">23%</span>
                        </div>
                        <div class="h-3 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-purple-500 to-purple-600 rounded-full"
                                style="width: 23%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="stat-card p-6">
                <div class="flex items-center mb-4">
                    <div class="icon-circle bg-purple-100 mr-3">
                        <i class="fas fa-map-marker-alt text-purple-600"
                            style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800">Top Locations</h3>
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-medium">Downtown</span>
                            <span class="text-blue-600 font-medium">84</span>
                        </div>
                        <div class="h-3 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full"
                                style="width: 70%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-medium">Suburbs</span>
                            <span class="text-green-600 font-medium">56</span>
                        </div>
                        <div class="h-3 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full"
                                style="width: 46%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-medium">Rural</span>
                            <span class="text-purple-600 font-medium">32</span>
                        </div>
                        <div class="h-3 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-purple-500 to-purple-600 rounded-full"
                                style="width: 26%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealEstate Pro | Super Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#6366F1',
                        dark: '#1F2937',
                        light: '#F9FAFB'
                    }
                }
            }
        }
    </script>

    <style>
        .sidebar {
            width: 250px;
            transition: all 0.3s;
        }
        .main-content {
            margin-left: 250px;
            transition: all 0.3s;
        }
        @media (max-width: 768px) {
            .sidebar {
                margin-left: -250px;
            }
            .main-content {
                margin-left: 0;
            }
            .sidebar.active {
                margin-left: 0;
            }
        }
        .active-menu {
            background-color: #3B82F6;
            color: white;
        }
        .active-menu:hover {
            background-color: #2563EB;
        }
        .notification-dot {
            position: absolute;
            top: -5px;
            right: -5px;
            width: 12px;
            height: 12px;
            background-color: #EF4444;
            border-radius: 50%;
        }
    </style>

</head>
<body class="bg-gray-100 flex">
    <!-- Sidebar -->
    <div class="sidebar fixed h-full bg-white shadow-lg z-10">
        <div class="p-5 border-b">
            <h1 class="text-xl font-bold text-primary flex items-center">
                <i class="fas fa-building mr-2"></i> RealEstate Pro
            </h1>
            <p class="text-xs text-gray-500 mt-1">Super Admin Panel</p>
        </div>
        
        <nav class="mt-6">
            <a href="#" class="block py-3 px-6 hover:bg-blue-50 text-gray-700 active-menu">
                <i class="fas fa-home mr-3"></i> Dashboard
            </a>
            <a href="#" class="block py-3 px-6 hover:bg-blue-50 text-gray-700">
                <i class="fas fa-users mr-3"></i> Users
            </a>
            <a href="#" class="block py-3 px-6 hover:bg-blue-50 text-gray-700">
                <i class="fas fa-building mr-3"></i> Properties
            </a>
            <a href="#" class="block py-3 px-6 hover:bg-blue-50 text-gray-700">
                <i class="fas fa-file-invoice-dollar mr-3"></i> Payments
            </a>
            <a href="#" class="block py-3 px-6 hover:bg-blue-50 text-gray-700">
                <i class="fas fa-chart-line mr-3"></i> Analytics
            </a>
            <a href="#" class="block py-3 px-6 hover:bg-blue-50 text-gray-700">
                <i class="fas fa-cog mr-3"></i> Settings
            </a>
        </nav>
        
        <div class="absolute bottom-0 w-full p-4 border-t">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white">
                    <span>SA</span>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium">Super Admin</p>
                    <p class="text-xs text-gray-500">admin@realestatepro.com</p>
                </div>
            </div>
            <a href="#" class="mt-3 block text-center text-sm text-gray-500 hover:text-gray-700">
                <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content flex-1 min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow-sm">
            <div class="flex justify-between items-center p-4">
                <div class="flex items-center">
                    <button id="sidebarToggle" class="md:hidden text-gray-600 mr-4">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h2 class="text-xl font-semibold">Dashboard Overview</h2>
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="notification-dot"></span>
                        </button>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="border rounded-full py-2 px-4 pl-10 w-64">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="p-6">
            <!-- Stats Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Total Users</h3>
                            <p class="text-2xl font-bold text-gray-800">2,548</p>
                            <p class="text-xs text-green-500 mt-1"><i class="fas fa-arrow-up mr-1"></i> 12% from last month</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <i class="fas fa-users text-blue-600 text-xl"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-green-500">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Properties</h3>
                            <p class="text-2xl font-bold text-gray-800">684</p>
                            <p class="text-xs text-green-500 mt-1"><i class="fas fa-arrow-up mr-1"></i> 8% from last month</p>
                        </div>
                        <div class="bg-green-100 p-3 rounded-full">
                            <i class="fas fa-building text-green-600 text-xl"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-purple-500">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Revenue</h3>
                            <p class="text-2xl font-bold text-gray-800">$86,500</p>
                            <p class="text-xs text-green-500 mt-1"><i class="fas fa-arrow-up mr-1"></i> 15% from last month</p>
                        </div>
                        <div class="bg-purple-100 p-3 rounded-full">
                            <i class="fas fa-dollar-sign text-purple-600 text-xl"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-red-500">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Pending Tasks</h3>
                            <p class="text-2xl font-bold text-gray-800">24</p>
                            <p class="text-xs text-red-500 mt-1"><i class="fas fa-arrow-up mr-1"></i> 3% from last month</p>
                        </div>
                        <div class="bg-red-100 p-3 rounded-full">
                            <i class="fas fa-tasks text-red-600 text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <!-- Recent Activity -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-semibold">Recent Activity</h2>
                        <a href="#" class="text-sm text-primary hover:underline">View all</a>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-user-plus text-blue-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium">New user registered</p>
                                <p class="text-xs text-gray-500">John Doe joined as a realtor</p>
                                <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-home text-green-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium">Property added</p>
                                <p class="text-xs text-gray-500">Luxury villa in Beverly Hills</p>
                                <p class="text-xs text-gray-400 mt-1">5 hours ago</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-2 rounded-full mr-4">
                                <i class="fas fa-dollar-sign text-purple-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium">Payment received</p>
                                <p class="text-xs text-gray-500">$3,500 from Sarah Johnson</p>
                                <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-yellow-100 p-2 rounded-full mr-4">
                                <i class="fas fa-exclamation-circle text-yellow-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium">Maintenance request</p>
                                <p class="text-xs text-gray-500">Apartment #42B reported an issue</p>
                                <p class="text-xs text-gray-400 mt-1">2 days ago</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h2 class="text-lg font-semibold mb-6">Quick Actions</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <a href="#" class="flex flex-col items-center justify-center p-4 bg-blue-50 rounded-lg border border-blue-100 hover:bg-blue-100 transition">
                            <div class="bg-blue-100 p-3 rounded-full mb-2">
                                <i class="fas fa-user-plus text-blue-600 text-xl"></i>
                            </div>
                            <span class="text-sm font-medium">Add User</span>
                        </a>
                        <a href="#" class="flex flex-col items-center justify-center p-4 bg-green-50 rounded-lg border border-green-100 hover:bg-green-100 transition">
                            <div class="bg-green-100 p-3 rounded-full mb-2">
                                <i class="fas fa-home text-green-600 text-xl"></i>
                            </div>
                            <span class="text-sm font-medium">Add Property</span>
                        </a>
                        <a href="#" class="flex flex-col items-center justify-center p-4 bg-purple-50 rounded-lg border border-purple-100 hover:bg-purple-100 transition">
                            <div class="bg-purple-100 p-3 rounded-full mb-2">
                                <i class="fas fa-file-invoice text-purple-600 text-xl"></i>
                            </div>
                            <span class="text-sm font-medium">Generate Report</span>
                        </a>
                        <a href="#" class="flex flex-col items-center justify-center p-4 bg-yellow-50 rounded-lg border border-yellow-100 hover:bg-yellow-100 transition">
                            <div class="bg-yellow-100 p-3 rounded-full mb-2">
                                <i class="fas fa-cog text-yellow-600 text-xl"></i>
                            </div>
                            <span class="text-sm font-medium">Settings</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Property Statistics -->
            <div class="bg-white p-6 rounded-lg shadow-sm mb-8">
                <h2 class="text-lg font-semibold mb-6">Property Statistics</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-sm font-medium text-gray-500 mb-2">By Type</h3>
                        <div class="space-y-2">
                            <div>
                                <div class="flex justify-between text-sm">
                                    <span>Residential</span>
                                    <span>62%</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-blue-500" style="width: 62%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm">
                                    <span>Commercial</span>
                                    <span>24%</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-green-500" style="width: 24%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm">
                                    <span>Land</span>
                                    <span>14%</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-purple-500" style="width: 14%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-sm font-medium text-gray-500 mb-2">By Status</h3>
                        <div class="space-y-2">
                            <div>
                                <div class="flex justify-between text-sm">
                                    <span>Available</span>
                                    <span>45%</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-green-500" style="width: 45%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm">
                                    <span>Rented</span>
                                    <span>32%</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-blue-500" style="width: 32%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm">
                                    <span>Sold</span>
                                    <span>23%</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-purple-500" style="width: 23%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-sm font-medium text-gray-500 mb-2">Top Locations</h3>
                        <div class="space-y-2">
                            <div>
                                <div class="flex justify-between text-sm">
                                    <span>Downtown</span>
                                    <span>84 properties</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-blue-500" style="width: 70%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm">
                                    <span>Suburbs</span>
                                    <span>56 properties</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-green-500" style="width: 46%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm">
                                    <span>Rural</span>
                                    <span>32 properties</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-purple-500" style="width: 26%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t mt-8 py-6 px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-gray-600">© 2023 RealEstate Pro. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                    <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Terms of Service</a>
                    <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Contact</a>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Toggle sidebar on mobile
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
</body>
</html> --}}




