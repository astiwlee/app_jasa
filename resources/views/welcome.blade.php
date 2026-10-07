<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DevSpark - Jasa Pembuatan Website</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/devspark.css') }}">
</head>

<body>

    {{-- ================= NAVBAR ================= --}}
    <nav class="navbar">
        <div class="container">

            <a href="#" class="navbar-brand">
                DevSpark
            </a>

            <button class="menu-toggle" id="menuToggle">
                ☰
            </button>

            <ul class="navbar-nav" id="navbarNav">
                <li>
                    <a href="#home">Home</a>
                </li>

                <li>
                    <a href="#layanan">Layanan</a>
                </li>

                <li>
                    <a href="#portfolio">Portofolio</a>
                </li>

                <li>
                    <a href="#harga">Harga</a>
                </li>

                <li>
                    <a href="#faq">FAQ</a>
                </li>

                <li>
                    <a href="#kontak" class="btn btn-primary">
                        Konsultasi
                    </a>
                </li>
            </ul>

        </div>
    </nav>


    {{-- ================= HERO ================= --}}
    <section class="hero-section" id="home">

        <div class="container text-center">

            <h1 class="hero-title">
                Website Profesional
                <br>
                untuk Bisnis Anda
            </h1>

            <p class="hero-subtitle">
                Kami membantu UMKM dan perusahaan membangun website
                yang modern, profesional, dan sesuai kebutuhan bisnis.
            </p>

            <div class="hero-buttons">

                <a href="#layanan" class="btn btn-primary">
                    Lihat Layanan
                </a>

                <a href="#kontak" class="btn btn-outline">
                    Konsultasi Gratis
                </a>

            </div>

        </div>

    </section>


    {{-- ================= LAYANAN ================= --}}
    <section class="section-padding bg-light" id="layanan">

        <div class="container">

            <div class="text-center">

                <h2 class="section-title">
                    Layanan Kami
                </h2>

                <p class="section-subtitle">
                    Pilihan layanan website yang dapat disesuaikan
                    dengan kebutuhan bisnis Anda.
                </p>

            </div>


            <div class="grid-3">

                <div class="card service-card text-center">

                    <div class="card-icon">
                        🌐
                    </div>

                    <h3>
                        Website Company Profile
                    </h3>

                    <p>
                        Website profesional untuk memperkenalkan
                        bisnis, layanan, dan informasi perusahaan.
                    </p>

                    <a href="#kontak">
                        Selengkapnya →
                    </a>

                </div>


                <div class="card service-card text-center">

                    <div class="card-icon">
                        🛒
                    </div>

                    <h3>
                        Website Bisnis
                    </h3>

                    <p>
                        Website untuk membantu bisnis menjangkau
                        pelanggan dan meningkatkan kehadiran online.
                    </p>

                    <a href="#kontak">
                        Selengkapnya →
                    </a>

                </div>


                <div class="card service-card text-center">

                    <div class="card-icon">
                        💻
                    </div>

                    <h3>
                        Website Custom
                    </h3>

                    <p>
                        Website dengan fitur dan desain yang dibuat
                        berdasarkan kebutuhan proyek Anda.
                    </p>

                    <a href="#kontak">
                        Selengkapnya →
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= KEUNGGULAN ================= --}}
    <section class="section-padding">

        <div class="container">

            <div class="text-center">

                <h2 class="section-title">
                    Kenapa Memilih DevSpark?
                </h2>

                <p class="section-subtitle">
                    Kami mengutamakan tampilan yang menarik,
                    fungsi yang jelas, dan pengalaman pengguna.
                </p>

            </div>


            <div class="grid-3">

                <div class="feature-item">

                    <div class="feature-icon">
                        ✨
                    </div>

                    <h3>
                        Desain Modern
                    </h3>

                    <p>
                        Tampilan website dibuat bersih dan profesional.
                    </p>

                </div>


                <div class="feature-item">

                    <div class="feature-icon">
                        ⚡
                    </div>

                    <h3>
                        Responsif
                    </h3>

                    <p>
                        Website dapat digunakan dengan nyaman
                        di berbagai ukuran perangkat.
                    </p>

                </div>


                <div class="feature-item">

                    <div class="feature-icon">
                        🛠️
                    </div>

                    <h3>
                        Sesuai Kebutuhan
                    </h3>

                    <p>
                        Fitur dapat disesuaikan dengan kebutuhan
                        bisnis dan proyek Anda.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= PROSES PENGERJAAN ================= --}}
    <section class="section-padding bg-light" id="proses">

        <div class="container">

            <div class="text-center">

                <h2 class="section-title">
                    Proses Pengerjaan
                </h2>

                <p class="section-subtitle">
                    Langkah mudah memiliki website bersama DevSpark.
                </p>

            </div>


            <div class="process-grid">

                <div class="process-card">

                    <div class="process-number">
                    </div>
                    <div class="process-number">01</div>
                    <h3>
                        Konsultasi
                    </h3>

                    <p>
                        Sampaikan kebutuhan dan konsep website Anda.
                    </p>

                </div>


                <div class="process-card">

                    <div class="process-number">
                    </div>
                    <div class="process-number">02</div>
                    <h3>
                        Pilih Paket
                    </h3>

                    <p>
                        Pilih paket yang sesuai atau ajukan
                        kebutuhan custom.
                    </p>

                </div>


                <div class="process-card">

                    <div class="process-number">
                    </div>
                    <div class="process-number">03</div>
                    <h3>
                        Desain
                    </h3>

                    <p>
                        Kami membuat rancangan tampilan awal
                        website Anda.
                    </p>

                </div>


                <div class="process-card">

                    <div class="process-number">
                    </div>
                    <div class="process-number">04</div>
                    <h3>
                        Development
                    </h3>

                    <p>
                        Website mulai kami kembangkan sesuai
                        rancangan yang telah disepakati.
                    </p>

                </div>


                <div class="process-card">

                    <div class="process-number">
                    </div>
                    <div class="process-number">05</div>
                    <h3>
                        Revisi
                    </h3>

                    <p>
                        Berikan masukan untuk menyempurnakan
                        hasil website.
                    </p>

                </div>


                <div class="process-card">

                    <div class="process-number">
                    </div>
                    <div class="process-number">06</div>
                    <h3>
                        Launch
                    </h3>

                    <p>
                        Website siap online dan digunakan.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= PORTFOLIO ================= --}}
    <section class="section-padding" id="portfolio">

        <div class="container">

            <div class="text-center">

                <h2 class="section-title">
                    Portofolio
                </h2>

                <p class="section-subtitle">
                    Beberapa contoh proyek yang dapat kami kerjakan.
                </p>

            </div>


            <div class="grid-3">

                <div class="card portfolio-card">

                    <div class="portfolio-content">

                        <h4>
                            Website UMKM
                        </h4>

                        <p>
                            Website sederhana untuk memperkenalkan
                            produk dan layanan bisnis.
                        </p>

                    </div>

                </div>


                <div class="card portfolio-card">

                    <div class="portfolio-content">

                        <h4>
                            Company Profile
                        </h4>

                        <p>
                            Website profesional untuk kebutuhan
                            profil perusahaan.
                        </p>

                    </div>

                </div>


                <div class="card portfolio-card">

                    <div class="portfolio-content">

                        <h4>
                            Digital Invitation
                        </h4>

                        <p>
                            Website undangan digital dengan tampilan
                            yang dapat disesuaikan.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= HARGA ================= --}}
    <section class="section-padding bg-light" id="harga">

        <div class="container">

            <div class="text-center">

                <h2 class="section-title">
                    Pilihan Paket
                </h2>

                <p class="section-subtitle">
                    Pilih paket yang sesuai dengan kebutuhan Anda.
                </p>

            </div>


            <div class="grid-3">

                <div class="card pricing-card">

                    <h3>
                        Basic
                    </h3>

                    <div class="price">
                        Mulai dari
                        <strong>
                            Rp500K
                        </strong>
                    </div>

                    <ul class="pricing-features">

                        <li>
                            ✓ Landing Page
                        </li>

                        <li>
                            ✓ Responsive Design
                        </li>

                        <li>
                            ✓ Basic SEO
                        </li>

                    </ul>

                    <a href="#kontak" class="btn btn-outline">
                        Pilih Paket
                    </a>

                </div>


                <div class="card pricing-card popular">

                    <div class="badge">
                        Populer
                    </div>

                    <h3>
                        Professional
                    </h3>

                    <div class="price">
                        Mulai dari
                        <strong>
                            Rp1,5JT
                        </strong>
                    </div>

                    <ul class="pricing-features">

                        <li>
                            ✓ Company Profile
                        </li>

                        <li>
                            ✓ Responsive Design
                        </li>

                        <li>
                            ✓ Custom Feature
                        </li>

                        <li>
                            ✓ Database
                        </li>

                    </ul>

                    <a href="#kontak" class="btn btn-primary">
                        Pilih Paket
                    </a>

                </div>


                <div class="card pricing-card">

                    <h3>
                        Custom
                    </h3>

                    <div class="price">
                        <strong>
                            Hubungi Kami
                        </strong>
                    </div>

                    <ul class="pricing-features">

                        <li>
                            ✓ Fitur Custom
                        </li>

                        <li>
                            ✓ Desain Custom
                        </li>

                        <li>
                            ✓ Sesuai Kebutuhan
                        </li>

                    </ul>

                    <a href="#kontak" class="btn btn-outline">
                        Konsultasi
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= FAQ ================= --}}
    <section class="section-padding" id="faq">

        <div class="container">

            <div class="text-center">

                <h2 class="section-title">
                    FAQ
                </h2>

                <p class="section-subtitle">
                    Beberapa pertanyaan yang sering ditanyakan.
                </p>

            </div>


            <div class="grid-2">

                <div class="card faq-container">

                    <h3>
                        Apakah bisa request desain?
                    </h3>

                    <p>
                        Bisa. Desain dapat disesuaikan dengan kebutuhan
                        dan identitas bisnis Anda.
                    </p>

                </div>


                <div class="card faq-container">

                    <h3>
                        Apakah website responsive?
                    </h3>

                    <p>
                        Ya. Website dirancang agar dapat digunakan
                        pada desktop maupun perangkat mobile.
                    </p>

                </div>


                <div class="card faq-container">

                    <h3>
                        Berapa lama pengerjaannya?
                    </h3>

                    <p>
                        Waktu pengerjaan bergantung pada jenis dan
                        kompleksitas website yang dibuat.
                    </p>

                </div>


                <div class="card faq-container">

                    <h3>
                        Bisa membuat website custom?
                    </h3>

                    <p>
                        Bisa. Fitur dan tampilan dapat dibuat sesuai
                        kebutuhan proyek.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= KONTAK ================= --}}
    <section class="section-padding bg-light" id="kontak">

        <div class="container text-center">

            <h2 class="section-title">
                Punya Ide Website?
            </h2>

            <p class="section-subtitle">
                Ceritakan kebutuhan website Anda dan mari kita
                diskusikan bersama.
            </p>

            <a href="mailto:devspark@example.com"
               class="btn btn-primary">
                Mulai Konsultasi
            </a>

        </div>

    </section>


    {{-- ================= FOOTER ================= --}}
    <footer class="footer">

        <div class="container">

            <div class="footer-grid">

                <div class="footer-col">

                    <h3>
                        DevSpark
                    </h3>

                    <p>
                        Jasa pembuatan website untuk UMKM dan perusahaan
                        dengan desain modern dan profesional.
                    </p>

                </div>


                <div class="footer-col">

                    <h3>
                        Navigasi
                    </h3>

                    <ul>

                        <li>
                            <a href="#home">Home</a>
                        </li>

                        <li>
                            <a href="#layanan">Layanan</a>
                        </li>

                        <li>
                            <a href="#portfolio">Portofolio</a>
                        </li>

                        <li>
                            <a href="#harga">Harga</a>
                        </li>

                    </ul>

                </div>


                <div class="footer-col">

                    <h3>
                        Kontak
                    </h3>

                    <ul>

                        <li>
                            <a href="#kontak">
                                Konsultasi
                            </a>
                        </li>

                        <li>
                            <a href="#faq">
                                FAQ
                            </a>
                        </li>

                    </ul>

                </div>

            </div>


            <div class="footer-bottom">

                © {{ date('Y') }} DevSpark.
                All rights reserved.

            </div>

        </div>

    </footer>


    {{-- ================= MOBILE MENU ================= --}}
    <script>

        const menuToggle = document.getElementById('menuToggle');
        const navbarNav = document.getElementById('navbarNav');

        menuToggle.addEventListener('click', function () {
            navbarNav.classList.toggle('active');
        });

        document.querySelectorAll('.navbar-nav a').forEach(link => {

            link.addEventListener('click', function () {
                navbarNav.classList.remove('active');
            });

        });

    </script>

</body>
</html>