<!DOCTYPE html>
<html>
<head>
    <title>Kasir Pintar - @yield('title', 'Dashboard')</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    @stack('styles')
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        .wrapper {
            display: flex;
            min-height: 100vh;
        }
        
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding-top: 20px;
        }
        
        .main-content {
            flex: 1;
            background-color: #f4f6f9;
            padding: 20px;
        }
        
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-header">
                <a href="/" class="sidebar-brand">
                    Kasir Pintar
                </a>
            </div>
            <nav class="mt-3">
                <div class="nav-item {{ request()->is('pelanggans*') ? 'active' : '' }}">
                    <a href="{{ route('pelanggans.index') }}">
                        <i>👥</i>
                        Pelanggan
                    </a>
                </div>
                <div class="nav-item {{ request()->is('users*') ? 'active' : '' }}">
                    <a href="#">
                        <i>👤</i>
                        User
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    @stack('scripts')
</body>
</html>