<!DOCTYPE html>
<html>
<head>
    <title>Kasir Pintar - @yield('title', 'Dashboard')</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    @stack('styles')
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f4f6f9;
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
        
        .sidebar-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #34495e;
        }
        
        .sidebar-brand {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        
        .sidebar-brand:hover {
            color: #f4f6f9;
        }
        
        .sidebar nav {
            padding-top: 20px;
        }
        
        .nav-item {
            padding: 10px 20px;
            border-bottom: 1px solid #34495e;
        }
        
        .nav-item.active {
            background-color: #34495e;
        }
        
        .nav-item a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .nav-item a:hover {
            background-color:rgb(26, 107, 188);
            color: white;
        }
        
        .main-content {
            flex: 1;
            background-color: #f4f6f9;
            padding: 20px;
            transition: all 0.3s ease;
        }
        
        h1, h2, h3 {
            color: #2c3e50;
        }
        
        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .btn-custom {
            background-color:rgb(26, 120, 188);
            color: white;
            border-radius: 5px;
        }
        
        .btn-custom:hover {
            background-color:rgb(22, 70, 160);
        }
        
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #2c3e50;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
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
                    <a href="{{ route('users.index') }}">
                        <i>👤</i>
                        User
                    </a>
                </div>
                <div class="nav-item {{ request()->is('produks*') ? 'active' : '' }}"> 
                    <a href="{{ route('produks.index') }}"> 
                        <i>📦</i> Produk </a> 
                </div>
                <div class="nav-item {{ request()->is('kategoris*') ? 'active' : '' }}"> 
                    <a href="{{ route('kategoris.index') }}"> 
                        <i>📂</i> Kategori </a> 
                </div>
                <div class="nav-item {{ request()->is('stoks*') ? 'active' : '' }}"> 
                    <a href="{{ route('stoks.index') }}"> 
                        <i>🧾</i> Stok </a> 
                </div>
                <div class="nav-item {{ request()->is('diskons*') ? 'active' : '' }}"> 
                    <a href="{{ route('diskons.index') }}"> 
                        <i>🏷️</i> Diskon </a> 
                </div>
                <div class="nav-item {{ request()->is('shifts*') ? 'active' : '' }}"> 
                    <a href="{{ route('shifts.index') }}"> 
                        <i>⏰</i> Shift </a> 
                </div>
                <!-- <div class="dropdown"> 
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false"> 
                        TRANSAKSI <span id="arrow">▽</span> 
                    </button> 
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
                        <a class="dropdown-item" href="{{ route('pembelis.index') }}">Pembeli</a> 
                        <a class="dropdown-item" href="{{ route('penjualans.index') }}">Penjualan</a>
                        <a class="dropdown-item" href="{{ route('pembayarans.index') }}">Pembayaran</a> 
                        <a class="dropdown-item" href="{{ route('barangpenjualan.index') }}">Barang Penjualan</a> 
                        <a class="dropdown-item" href="{{ route('pembelian_produks.index') }}">Pembelian Produk</a> 
                        <a class="dropdown-item" href="{{ route('laporan_penjualans.index') }}">Laporan Penjualan</a> 
                    </div>
                </div> -->
                <div class="nav-item {{ request()->is('pembelis*') ? 'active' : '' }}"> 
                    <a href="{{ route('pembelis.index') }}"> <i></i> Pembeli </a> 
                </div> 
                <div class="nav-item {{ request()->is('penjualans*') ? 'active' : '' }}"> 
                    <a href="{{ route('penjualans.index') }}"> <i></i> Penjualan </a> 
                </div> 
                <div class="nav-item {{ request()->is('pembayarans*') ? 'active' : '' }}"> 
                    <a href="{{ route('pembayarans.index') }}"> <i></i> Pembayaran </a> 
                </div> 
                <div class="nav-item {{ request()->is('barangpenjualan*') ? 'active' : '' }}"> 
                    <a href="{{ route('barangpenjualan.index') }}"> <i></i> Barang Penjualan </a> 
                </div> 
                <div class="nav-item {{ request()->is('pembelian_produks*') ? 'active' : '' }}"> 
                    <a href="{{ route('pembelian_produks.index') }}"> <i></i> Pembelian Produk </a> 
                </div> 
                <div class="nav-item {{ request()->is('laporan_penjualans*') ? 'active' : '' }}"> 
                    <a href="{{ route('laporan_penjualans.index') }}"> <i></i> Laporan Penjualan </a> 
                </div>
            </nav>
        </div>

        <div class="main-content">
            @yield('content')
            
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @stack('scripts')
</body>
</html>