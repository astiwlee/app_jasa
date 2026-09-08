<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DevSpark - Layanan Pembuatan Website Profesional">
    <title>DevSpark - Jasa Pembuatan Website & Aplikasi</title>
    
    <!-- 
       Mengambil font dari Google Fonts. 
       Font 'Inter' dipilih karena terlihat modern, rapi, dan mudah dibaca (cocok untuk bisnis).
    -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- 
       Menghubungkan file CSS ke dalam HTML.
       Helper asset() pada Laravel otomatis mencari file tersebut di dalam folder 'public'.
       Ini adalah cara standar Laravel memanggil file CSS atau JS.
    -->
    <link rel="stylesheet" href="{{ asset('css/devspark.css') }}">
</head>
<body>

    <!-- NAVBAR MULAI -->
    <nav class="navbar">
        <div class="container">
            <!-- Logo DevSpark -->
            <a href="/" class="navbar-brand">DevSpark</a>
            
            <!-- 
               Tombol Toggle untuk Mobile.
               Tombol hamburger (☰) ini secara default disembunyikan lewat CSS,
               dan hanya akan muncul saat website diakses melalui HP (layar kecil).
            -->
            <button class="menu-toggle" id="mobile-menu-btn">☰</button>
            
            <!-- Menu Navigasi -->
            <ul class="navbar-nav" id="navbar-menu">
                <li><a href="/">Home</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#harga">Harga</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#kontak" class="btn btn-primary">Konsultasi</a></li>
            </ul>
        </div>
    </nav>
    <!-- NAVBAR SELESAI -->

    <!-- TEMPAT KONTEN HALAMAN -->
    <!-- 
       @yield('content') adalah sebuah fitur dari Laravel Blade.
       Ini berfungsi seperti sebuah "lubang" (placeholder) di mana konten 
       dari halaman lain (seperti halaman home) akan disisipkan ke dalam template utama ini.
       Hal ini membuat kita tidak perlu menulis ulang navbar dan footer di setiap halaman.
    -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER MULAI -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Kolom 1: Tentang -->
                <div class="footer-col">
                    <h3>DevSpark</h3>
                    <p>Membantu bisnis dan personal membangun website modern, responsive, dan sesuai kebutuhan dengan mudah.</p>
                </div>
                
                <!-- Kolom 2: Layanan -->
                <div class="footer-col">
                    <h3>Layanan</h3>
                    <ul>
                        <li><a href="#">Company Profile</a></li>
                        <li><a href="#">Undangan Digital</a></li>
                        <li><a href="#">Portfolio Website</a></li>
                        <li><a href="#">Toko Online</a></li>
                        <li><a href="#">Maintenance</a></li>
                    </ul>
                </div>
                
                <!-- Kolom 3: Kontak -->
                <div class="footer-col">
                    <h3>Kontak</h3>
                    <ul>
                        @php
                            // Mengambil data kontak dengan fallback default jika data belum ada di database
                            $ig = $settings['instagram'] ?? '@devspark';
                            $email = $settings['email'] ?? 'hello@devspark.com';
                            $wa = $settings['whatsapp'] ?? '6281234567890';
                        @endphp
                        <li><a href="https://instagram.com/{{ ltrim($ig, '@') }}" target="_blank">Instagram: {{ $ig }}</a></li>
                        <li><a href="mailto:{{ $email }}">Email: {{ $email }}</a></li>
                        <li><a href="https://wa.me/{{ $wa }}" target="_blank">WhatsApp: +{{ $wa }}</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Bagian Copyright -->
            <div class="footer-bottom">
                <p>&copy; 2026 DevSpark. Semua hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>
    <!-- FOOTER SELESAI -->

    <!-- SCRIPT JAVASCRIPT UNTUK MENU MOBILE -->
    <script>
        /* 
           Konsep JavaScript Dasar (DOM Manipulation):
           Kita menangkap elemen HTML berdasarkan ID-nya (mobile-menu-btn dan navbar-menu).
           Saat tombol diklik, kita menambah/menghapus (toggle) class 'active' pada menu.
           CSS akan bereaksi terhadap class 'active' tersebut untuk menampilkan menu di HP.
        */
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const navbarMenu = document.getElementById('navbar-menu');

        mobileBtn.addEventListener('click', function() {
            navbarMenu.classList.toggle('active');
        });
    </script>
</body>
</html>
