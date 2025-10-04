{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Simple Dashboard</h1>
            <p class="text-gray-600">Welcome to your dashboard</p>
        </div>

        <!-- This is where the Livewire component content will be injected -->
        {{ $slot }}
    </div>
</body>

</html> --}}









{{--
<!DOCTYPE html>
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
            width: 280px;
            transition: all 0.3s;
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .main-content {
            margin-left: 280px;
            transition: all 0.3s;
        }

        @media (max-width: 768px) {
            .sidebar {
                margin-left: -280px;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar.active {
                margin-left: 0;
            }
        }

        .active-menu {
            background: linear-gradient(90deg, #3B82F6 0%, #2563EB 100%);
            color: white;
            border-radius: 8px;
            margin: 0 12px;
        }

        .active-menu:hover {
            background: linear-gradient(90deg, #2563EB 0%, #1D4ED8 100%);
        }

        .menu-item {
            margin: 0 12px;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .menu-item:hover {
            background-color: #F3F4F6;
        }

        .notification-dot {
            position: absolute;
            top: -5px;
            right: -5px;
            width: 12px;
            height: 12px;
            background-color: #EF4444;
            border-radius: 50%;
            border: 2px solid white;
        }

        .stat-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 12px -2px rgba(0, 0, 0, 0.1);
        }

        .icon-circle {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
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

        <nav class="mt-6 space-y-2 px-4">
            <a href="#" class="block py-3 px-6 text-gray-700 menu-item">
                <i class="fas fa-home mr-3 w-5 text-center"></i> Dashboard
            </a>

            <a href="{{ route('dashboard.properties.index') }}" class="block py-3 px-6 text-gray-700 menu-item">


                <i class="fas fa-building mr-3 w-5 text-center"></i> Properties
            </a>




            <a href="#" class="block py-3 px-6 text-gray-700 menu-item">
                <i class="fas fa-file-invoice-dollar mr-3 w-5 text-center"></i> Payments
            </a>
            <a href="#" class="block py-3 px-6 text-gray-700 menu-item">
                <i class="fas fa-chart-line mr-3 w-5 text-center"></i> Analytics
            </a>

            <a href="#" class="block py-3 px-6 text-gray-700 menu-item">
                <i class="fas fa-users mr-3 w-5 text-center"></i> Users
            </a>

            <a href="#" class="block py-3 px-6 text-gray-700 menu-item">
                <i class="fas fa-cog mr-3 w-5 text-center"></i> Settings
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
            {{ $slot }}
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
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
</body>

</html> --}}










































<!DOCTYPE html>
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
            width: 280px;
            transition: all 0.3s;
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .main-content {
            margin-left: 280px;
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        @media (max-width: 768px) {
            .sidebar {
                margin-left: -280px;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar.active {
                margin-left: 0;
            }
        }

        /* .active-menu {
            background: linear-gradient(90deg, #3B82F6 0%, #2563EB 100%);
            color: white;
            border-radius: 8px;
            margin: 0 12px;
        }

        .active-menu:hover {
            background: linear-gradient(90deg, #2563EB 0%, #1D4ED8 100%);
        } */

        .menu-item {
            margin: 0 12px;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .menu-item:hover {
            background-color: #F3F4F6;
        }

        .notification-dot {
            position: absolute;
            top: -5px;
            right: -5px;
            width: 12px;
            height: 12px;
            background-color: #EF4444;
            border-radius: 50%;
            border: 2px solid white;
        }

        .stat-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 12px -2px rgba(0, 0, 0, 0.1);
        }

        .icon-circle {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        /* Ensure footer stays at bottom */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content-wrap {
            flex: 1;
        }

        /* Table styling */
        .property-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        .property-table th,
        .property-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        .property-table th {
            background-color: #f8fafc;
            font-weight: 600;
            color: #64748b;
        }

        .property-table tr:hover {
            background-color: #f1f5f9;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex flex-col min-h-screen">
        <!-- Sidebar -->
        <div class="sidebar fixed h-full bg-white shadow-lg z-10">
            <div class="p-5 border-b">
                <h1 class="text-xl font-bold text-primary flex items-center">
                    <i class="fas fa-building mr-2"></i> RealEstate Pro
                </h1>
                <p class="text-base font-medium mt-1">
                    {{ auth()->user()->name ?? 'N/A' }} Panel
                </p>
            </div>

            <nav class="mt-6 space-y-2 px-4">
                <a href="{{ route('dashboard') }}" class="block py-3 px-6 text-gray-700 menu-item">
                    <i class="fas fa-home mr-3 w-5 text-center"></i> Dashboard
                </a>

                <a href="{{ route('dashboard.properties.index') }}"
                    class="block py-3 px-6 text-gray-700 menu-item active-menu">
                    <i class="fas fa-building mr-3 w-5 text-center"></i> Properties
                </a>

                @can('view agents')
                    <a href="{{ route('dashboard.agents.index') }}" class="block py-3 px-6 text-gray-700 menu-item">
                        <i class="fas fa-users mr-3 w-5 text-center"></i> Agents
                    </a>
                @endcan

                @can('view payments')


                    <a href="#" class="block py-3 px-6 text-gray-700 menu-item">
                        <i class="fas fa-file-invoice-dollar mr-3 w-5 text-center"></i> Payments
                    </a>

                @endcan

                @can('manage reports')
                    
              
                <a href="{{route('dashboard.reports.agents')}}" class="block py-3 px-6 text-gray-700 menu-item">
                    <i class="fas fa-chart-line mr-3 w-5 text-center"></i> Reports
                </a>

                  @endcan


                @role('agent')
                <a href="#" class="block py-3 px-6 text-gray-700 menu-item">
                    <i class="fas fa-cog mr-3 w-5 text-center"></i> Settings
                </a>
                @endrole
            </nav>

            <div class="absolute bottom-0 w-full p-4 border-t">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white">
                        <span>A</span>
                    </div>
                    <div class="ml-3">
                    @if(auth()->check())
                        <p class="text-sm font-medium">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                    @endif
                    
                    </div>
                    </div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="mt-3 block text-center text-sm text-gray-500 hover:text-gray-700">
                    <i class="fas fa-sign-out-alt mr-2"></i>Log Out
                    </button>
                </form>

            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content flex-1">
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
                @livewireScripts
            </header>

            <!-- Main Content Area -->
            <main class="p-6 content-wrap">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t py-6 px-6 mt-auto">
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
    </div>
    @livewireScripts
    <script>
        // Toggle sidebar on mobile
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
</body>

</html>