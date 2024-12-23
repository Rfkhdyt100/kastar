<!DOCTYPE html>
<html>
<head>
    <title>Kasir Pintar - @yield('title', 'Dashboard')</title>
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
        
        .sidebar-header {
            padding: 15px 20px;
            border-bottom: 1px solid #34495e;
        }
        
        .sidebar-brand {
            color: white;
            text-decoration: none;
            font-size: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .nav-item {
            padding: 10px 20px;
            margin: 5px 0;
            cursor: pointer;
        }
        
        .nav-item:hover {
            background-color: #34495e;
        }
        
        .nav-item a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .active {
            background-color: #3498db;
        }
        
        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 15px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .btn {
            padding: 8px 15px;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            border: none;
        }
        
        .btn-primary {
            background-color: #3498db;
            color: white;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        
        .btn-edit {
            background-color: #3498db;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            margin-right: 5px;
        }
        
        .btn-delete {
            background-color: #e74c3c;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
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
</body>
</html>