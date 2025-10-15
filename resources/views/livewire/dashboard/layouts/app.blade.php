<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealEstate Pro | Super Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0ea5a4',
                        accent: '#7c3aed',
                        surface: '#ffffff',
                        muted: '#6b7280'
                    },
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui']
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        }

        .sidebar {
            width: 260px;
            transition: all 0.25s ease-in-out;
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
            border-right: 1px solid rgba(15, 23, 42, 0.04);
        }

        .main-content {
            margin-left: 260px;
            transition: margin-left 0.25s ease-in-out;
        }

        @media (max-width: 768px) {
            .sidebar {
                margin-left: -260px;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar.active {
                margin-left: 0;
            }
        }

        .menu-item {
            margin: 0 8px;
            border-radius: 10px;
            transition: all 0.18s ease;
        }

        .menu-item:hover {
            background-color: #f1f5f9;
        }

        .active-menu {
            background: linear-gradient(90deg, rgba(14, 165, 164, 1) 0%, rgba(124, 58, 237, 1) 100%);
            color: white !important;
        }

        .property-table th,
        .property-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eef2f7;
        }

        .property-table th {
            background-color: #fbfdff;
            font-weight: 600;
            color: #475569;
        }

        .notification-dot {
            position: absolute;
            top: -4px;
            right: -4px;
            width: 10px;
            height: 10px;
            background-color: #ef4444;
            border-radius: 50%;
            border: 2px solid white;
        }

        footer a {
            color: #475569;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="sidebar fixed h-screen shadow-sm z-20">
            <div class="p-6 border-b">
                <div class="flex items-center">
                    <div
                        class="w-10 h-10 rounded-lg bg-gradient-to-br from-primary to-accent flex items-center justify-center text-white font-bold mr-3">
                        RP
                    </div>
                    <div>
                        <h1 class="text-lg font-semibold text-slate-800">RealEstate Pro</h1>
                        <p class="text-xs text-muted mt-0.5">Admin Dashboard</p>
                    </div>
                </div>
            </div>

            <nav class="mt-6 px-3 space-y-2">
                
                    
              
                <a href="{{ route('dashboard') }}" class="flex items-center p-3 rounded-lg menu-item
   {{ request()->routeIs('dashboard') ? 'active-menu text-white' : 'text-slate-700 hover:bg-slate-50' }}">
                    <i
                        class="fas fa-home w-5 mr-3 {{ request()->routeIs('dashboard') ? 'text-white' : 'text-slate-500' }}"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
 

                @can('manage properties')
                <a href="{{ route('dashboard.properties.index') }}" class="flex items-center p-3 rounded-lg menu-item
   {{ request()->routeIs('dashboard.properties.*') ? 'active-menu text-white' : 'text-slate-700 hover:bg-slate-50' }}">
                    <i
                        class="fas fa-building w-5 mr-3 {{ request()->routeIs('dashboard.properties.*') ? 'text-white' : 'text-slate-500' }}"></i>
                    <span class="text-sm">Properties</span>
                </a>
                 @endcan

                @can('view agents')
                    <a href="{{ route('dashboard.agents.index') }}"
                        class="flex items-center p-3 rounded-lg menu-item
                           {{ request()->routeIs('dashboard.agents.*') ? 'active-menu text-white' : 'text-slate-700 hover:bg-slate-50' }}">
                        <i
                            class="fas fa-users w-5 mr-3 {{ request()->routeIs('dashboard.agents.*') ? 'text-white' : 'text-slate-500' }}"></i>
                        <span class="text-sm">Agents</span>
                    </a>
                @endcan

                {{-- @can('view payments')
                <a href="#"
                    class="flex items-center p-3 rounded-lg menu-item
                       {{ request()->is('dashboard/payments*') ? 'active-menu text-white' : 'text-slate-700 hover:bg-slate-50' }}">
                    <i
                        class="fas fa-file-invoice-dollar w-5 mr-3 {{ request()->is('dashboard/payments*') ? 'text-white' : 'text-slate-500' }}"></i>
                    <span class="text-sm">Payments</span>
                </a>
                @endcan --}}

                @can('manage reports')
                    <a href="{{ route('dashboard.reports.agents') }}"
                        class="flex items-center p-3 rounded-lg menu-item
                           {{ request()->routeIs('dashboard.reports.*') ? 'active-menu text-white' : 'text-slate-700 hover:bg-slate-50' }}">
                        <i
                            class="fas fa-chart-line w-5 mr-3 {{ request()->routeIs('dashboard.reports.*') ? 'text-white' : 'text-slate-500' }}"></i>
                        <span class="text-sm">Reports</span>
                    </a>
                @endcan


                {{-- @role('agent') --}}
                {{-- <a href="{{ route('dashboard.orders') }}"
                    class="flex items-center p-3 text-slate-700 menu-item rounded-lg hover:bg-slate-50">
                    <i class="fas fa-cog w-5 text-slate-500 mr-3"></i>
                    <span class="text-sm">Orders</span>
                </a> --}}
                {{-- @endrole --}}

                @can('manage orders')
                                <a href="{{ route('dashboard.orders') }}" class="flex items-center p-3 rounded-lg menu-item
                    {{ request()->routeIs('dashboard.orders') ? 'active-menu text-white' : 'text-slate-700 hover:bg-slate-50' }}">

                                    <i class="fas fa-shopping-cart w-5 mr-3 
                        {{ request()->routeIs('dashboard.orders') ? 'text-white' : 'text-slate-500' }}">
                                    </i>

                                    <span class="text-sm">Orders</span>
                                </a>
                @endcan

                @can('manage orders')
                                <a href="#" class="flex items-center p-3 rounded-lg menu-item
                    {{ request()->routeIs('dashboard.queries') ? 'active-menu text-white' : 'text-slate-700 hover:bg-slate-50' }}">

                                    <i class="fas fa-shopping-cart w-5 mr-3 
                        {{ request()->routeIs('dashboard.queries') ? 'text-white' : 'text-slate-500' }}">
                                    </i>

                                    <span class="text-sm">Queries</span>
                                </a>
                @endcan
            </nav>

            <div class="absolute bottom-0 w-full p-6 border-t bg-white">
                <div class="flex items-center">
                    <div
                        class="w-11 h-11 rounded-full bg-gradient-to-br from-primary to-accent flex items-center justify-center text-white">
                        <span>{{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}</span>
                    </div>
                    <div class="ml-3">
                        @if(auth()->check())
                            <p class="text-sm font-medium">{{ auth()->user()->name }}</p>
                            <p class="text-xs text-muted">{{ auth()->user()->email }}</p>
                        @endif
                    </div>
                </div>

                <form method="POST" action="{{ route('logout') }}" class="mt-2">
                    @csrf
                    <button type="submit"
                        class="w-full text-sm px-3 py-2 mb-0 rounded-md bg-slate-50 hover:bg-slate-100 text-slate-700 flex items-center justify-center">
                        <i class="fas fa-sign-out-alt mr-2"></i> Log Out
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="main-content flex-1 min-h-screen bg-gray-50">
            <!-- Header -->
            <header class="bg-white border-b shadow-sm">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center space-x-4">
                        <button id="sidebarToggle" class="md:hidden text-slate-600 p-2 rounded-md hover:bg-slate-100">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div>
                            <h2 class="text-lg font-semibold text-slate-800">Dashboard Overview</h2>
                            <p class="text-sm text-muted">Summary of activity and recent performance</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="relative hidden md:block">
                            <input type="text" placeholder="Search properties, agents..."
                                class="border rounded-full py-2 px-4 pl-10 w-72 focus:outline-none focus:ring-1 focus:ring-primary">
                            <i class="fas fa-search absolute left-3 top-3 text-muted"></i>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button class="relative p-2 rounded-md hover:bg-slate-100">
                                <i class="fas fa-bell text-slate-600"></i>
                                <span class="notification-dot"></span>
                            </button>

                            <div
                                class="w-9 h-9 rounded-full bg-gradient-to-br from-primary to-accent flex items-center justify-center text-white font-semibold">
                                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page slot -->
            <main class="p-6">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t py-4 px-6">
                <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm text-muted">© 2025 RealEstate Pro. All rights reserved.</p>
                    <div class="flex space-x-4 mt-3 md:mt-0">
                        <a href="#" class="text-sm hover:underline">Privacy</a>
                        <a href="#" class="text-sm hover:underline">Terms</a>
                        <a href="#" class="text-sm hover:underline">Contact</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    @livewireScripts

    <script>
        document.getElementById('sidebarToggle')?.addEventListener('click', function () {
            document.querySelector('.sidebar')?.classList.toggle('active');
        });
    </script>
</body>

</html>