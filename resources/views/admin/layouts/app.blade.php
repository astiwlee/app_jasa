<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - DevSpark</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/devspark.css') }}">
    <style>
        .admin-layout {
            display: flex;
            min-height: 100vh;
            background-color: var(--bg-light);
        }
        .admin-sidebar {
            width: 250px;
            background-color: var(--bg-color);
            border-right: 1px solid var(--border-color);
            padding: 20px 0;
            display: flex;
            flex-direction: column;
        }
        .sidebar-brand {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary-color);
            padding: 0 20px 20px 20px;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 10px;
        }
        .sidebar-menu {
            list-style: none;
            padding: 0;
            flex: 1;
        }
        .sidebar-menu li a {
            display: block;
            padding: 12px 20px;
            color: var(--text-color);
            font-weight: 500;
        }
        .sidebar-menu li a:hover, .sidebar-menu li a.active {
            background-color: var(--bg-light);
            color: var(--primary-color);
            border-left: 4px solid var(--primary-color);
        }
        .admin-content {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
        }
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background: white;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: var(--shadow-sm);
        }
        .admin-title {
            font-size: 24px;
            font-weight: 600;
        }
        .admin-user {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        /* Style untuk Tabel Admin */
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: var(--shadow-sm);
            border-radius: 8px;
            overflow: hidden;
        }
        table th, table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
        }
        table th {
            background-color: var(--bg-light);
            font-weight: 600;
        }
        table tr:hover {
            background-color: #f9fafb;
        }
        /* Input Form di Admin */
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            margin-bottom: 15px;
            font-family: 'Inter', sans-serif;
        }
        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }
        .alert {
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        .alert-success { background-color: #d1fae5; color: #065f46; }
        .alert-danger { background-color: #fee2e2; color: #991b1b; }
        .d-flex { display: flex; gap: 10px; }
        .justify-between { justify-content: space-between; }
        .align-center { align-items: center; }
    </style>
</head>
<body>

    <div class="admin-layout">
        <!-- SIDEBAR -->
        <aside class="admin-sidebar">
            <div class="sidebar-brand">DevSpark Admin</div>
            <ul class="sidebar-menu">
                <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a></li>
                <li><a href="{{ route('admin.services.index') }}" class="{{ request()->routeIs('admin.services.*') ? 'active' : '' }}">Layanan</a></li>
                <li><a href="{{ route('admin.packages.index') }}" class="{{ request()->routeIs('admin.packages.*') ? 'active' : '' }}">Paket Harga</a></li>
                <li><a href="{{ route('admin.portfolios.index') }}" class="{{ request()->routeIs('admin.portfolios.*') ? 'active' : '' }}">Portfolio</a></li>
                <li><a href="{{ route('admin.promotions.index') }}" class="{{ request()->routeIs('admin.promotions.*') ? 'active' : '' }}">Promo</a></li>
                <li><a href="{{ route('admin.testimonials.index') }}" class="{{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">Testimonial</a></li>
                <li><a href="{{ route('admin.faqs.index') }}" class="{{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}">FAQ</a></li>
                <li><a href="{{ route('admin.settings.index') }}" class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">Kontak & Pengaturan</a></li>
                <li><a href="/" target="_blank">Lihat Website</a></li>
            </ul>
        </aside>

        <!-- KONTEN UTAMA -->
        <main class="admin-content">
            <!-- Header Atas -->
            <header class="admin-header">
                <h1 class="admin-title">@yield('title', 'Dashboard')</h1>
                <div class="admin-user">
                    <span>Halo, {{ Auth::user()->name }}</span>
                    <!-- Form Logout -->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline" style="padding: 5px 15px;">Logout</button>
                    </form>
                </div>
            </header>

            <!-- Menampilkan Pesan Sukses / Error secara global -->
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <!-- Area untuk Konten Spesifik Halaman -->
            @yield('content')
            
        </main>
    </div>

</body>
</html>
