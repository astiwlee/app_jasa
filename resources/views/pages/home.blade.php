@extends('layouts.app')

@section('content')

    <!-- HERO SECTION -->
    <section class="hero-section text-center section-padding" id="hero">
        <div class="container">
            <h1 class="hero-title">Website Profesional untuk Mengembangkan Bisnis dan Organisasimu</h1>
            <p class="hero-subtitle">
                DevSpark membantu bisnis, organisasi, sekolah, dan personal membangun website yang modern, responsive, dan sesuai kebutuhan.
            </p>
            <div class="hero-buttons">
                <a href="#layanan" class="btn btn-primary">Lihat Layanan</a>
                <a href="#kontak" class="btn btn-outline">Konsultasi Sekarang</a>
            </div>
        </div>
    </section>

    <!-- SECTION LAYANAN -->
    <section class="section-padding bg-light" id="layanan">
        <div class="container text-center">
            <h2 class="section-title">Layanan Kami</h2>
            <p class="section-subtitle">Solusi digital lengkap untuk berbagai kebutuhan website Anda.</p>
            
            <div class="grid-3">
                {{-- Looping data layanan dari database --}}
                @forelse ($services as $service)
                    <div class="card service-card">
                        <div class="card-icon">{{ $service->icon }}</div>
                        <h3>{{ $service->name }}</h3>
                        <p>{{ $service->short_description }}</p>
                        <div class="text-color mt-15">
                            <small>Mulai dari</small><br>
                            <strong>Rp {{ number_format($service->starting_price, 0, ',', '.') }}</strong>
                        </div>
                        <a href="#kontak" class="btn btn-outline mt-15">Lihat Detail</a>
                    </div>
                @empty
                    <p class="text-center" style="grid-column: span 3;">Layanan belum tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- SECTION KEUNGGULAN -->
    <section class="section-padding" id="keunggulan">
        <div class="container text-center">
            <h2 class="section-title">Kenapa Memilih DevSpark?</h2>
            <div class="grid-3 mt-40">
                <div class="feature-item"><div class="feature-icon">💰</div><h4>Harga Terjangkau</h4></div>
                <div class="feature-item"><div class="feature-icon">🎨</div><h4>Desain Custom</h4></div>
                <div class="feature-item"><div class="feature-icon">📱</div><h4>Responsive di Semua Perangkat</h4></div>
                <div class="feature-item"><div class="feature-icon">✨</div><h4>Fitur Sesuai Kebutuhan</h4></div>
                <div class="feature-item"><div class="feature-icon">🛠️</div><h4>Support & Maintenance</h4></div>
                <div class="feature-item"><div class="feature-icon">☁️</div><h4>Fleksibilitas Hosting</h4></div>
            </div>
        </div>
    </section>

    <!-- SECTION HARGA -->
    <section class="section-padding bg-light" id="harga">
        <div class="container text-center">
            <h2 class="section-title">Paket Layanan</h2>
            <p class="section-subtitle">Pilih paket yang sesuai dengan kebutuhan dan budget Anda.</p>
            
            <div class="grid-3">
                {{-- Looping paket harga --}}
                @forelse ($packages as $package)
                    <div class="card pricing-card {{ $package->is_recommended ? 'popular' : '' }}">
                        @if($package->is_recommended)
                            <div class="badge">Paling Populer</div>
                        @endif
                        
                        <h3>{{ $package->name }}</h3>
                        <div class="price">Mulai dari<br><strong>Rp {{ number_format($package->price, 0, ',', '.') }}</strong></div>
                        <ul class="pricing-features">
                            @if(is_array($package->features))
                                @foreach($package->features as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            @endif
                        </ul>
                        <a href="#kontak" class="btn {{ $package->is_recommended ? 'btn-primary' : 'btn-outline' }}">Pilih Paket</a>
                    </div>
                @empty
                    <p class="text-center" style="grid-column: span 3;">Paket harga belum tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- SECTION PORTFOLIO -->
    <section class="section-padding" id="portfolio">
        <div class="container text-center">
            <h2 class="section-title">Lihat Hasil Pekerjaan Kami</h2>
            <p class="section-subtitle">Beberapa contoh desain dan project website.</p>
            
            <div class="grid-3">
                @forelse ($portfolios as $portfolio)
                    <div class="card portfolio-card">
                        <div class="portfolio-img" style="background: #e2e8f0; height: 150px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #64748b;">
                            {{ $portfolio->image ? 'Ada Gambar' : '[Gambar Demo]' }}
                        </div>
                        <div class="portfolio-content" style="padding-top: 15px;">
                            <span class="portfolio-category" style="color: var(--accent-color); font-size: 14px; font-weight: 600;">{{ $portfolio->category }}</span>
                            <h4>{{ $portfolio->title }}</h4>
                            <p>{{ $portfolio->description }}</p>
                            <a href="{{ $portfolio->demo_url }}" class="btn btn-outline mt-15" style="width:100%;" target="_blank">Lihat Demo</a>
                        </div>
                    </div>
                @empty
                    <p class="text-center" style="grid-column: span 3;">Portfolio belum tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- SECTION ALUR KERJA -->
    <section class="section-padding bg-light" id="alur-kerja">
        <div class="container text-center">
            <h2 class="section-title">Proses Pengerjaan</h2>
            <p class="section-subtitle">Langkah mudah memiliki website bersama DevSpark.</p>
            <div class="grid-3">
                <div class="process-step card"><div class="step-number" style="font-size: 32px; font-weight: bold; color: var(--primary-color);">01</div><h4>Konsultasi</h4><p>Sampaikan kebutuhan website Anda.</p></div>
                <div class="process-step card"><div class="step-number" style="font-size: 32px; font-weight: bold; color: var(--primary-color);">02</div><h4>Pilih Paket</h4><p>Pilih paket atau minta penawaran custom.</p></div>
                <div class="process-step card"><div class="step-number" style="font-size: 32px; font-weight: bold; color: var(--primary-color);">03</div><h4>Desain</h4><p>Kami merancang struktur dan desain awal.</p></div>
                <div class="process-step card"><div class="step-number" style="font-size: 32px; font-weight: bold; color: var(--primary-color);">04</div><h4>Development</h4><p>Website Anda mulai kami kembangkan.</p></div>
                <div class="process-step card"><div class="step-number" style="font-size: 32px; font-weight: bold; color: var(--primary-color);">05</div><h4>Revisi</h4><p>Berikan masukan untuk penyempurnaan.</p></div>
                <div class="process-step card"><div class="step-number" style="font-size: 32px; font-weight: bold; color: var(--primary-color);">06</div><h4>Launch</h4><p>Website siap online dan digunakan.</p></div>
            </div>
        </div>
    </section>

    <!-- SECTION HOSTING -->
    <section class="section-padding" id="hosting">
        <div class="container text-center">
            <h2 class="section-title">Pilihan Hosting Sesuai Kebutuhan</h2>
            <p class="section-subtitle">Anda bebas memilih tempat hosting website Anda.</p>
            <div class="grid-2">
                <div class="card text-center"><h3>DevSpark Hosting</h3><p>Terima beres! Gunakan server cepat dan terawat dari kami. Anda tidak perlu pusing mengurus hal teknis.</p></div>
                <div class="card text-center"><h3>Hosting Anda Sendiri</h3><p>Punya server atau hosting langganan? Kami siap mendeploy website ke server milik Anda tanpa biaya tambahan.</p></div>
            </div>
        </div>
    </section>

    <!-- SECTION PROMO -->
    {{-- Jika ada promo aktif, tampilkan section ini --}}
    @if ($promotions->count() > 0)
        @foreach ($promotions as $promo)
            <section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); color: white;">
                <div class="container text-center">
                    <h2 style="color: white; margin-bottom: 10px;">{{ $promo->title }}</h2>
                    <p style="color: #e0e7ff; margin-bottom: 20px;">{{ $promo->description }}</p>
                    <a href="#kontak" class="btn" style="background: white; color: var(--primary-color);">Klaim Promo</a>
                </div>
            </section>
        @endforeach
    @endif

    <!-- SECTION FAQ -->
    <section class="section-padding bg-light" id="faq">
        <div class="container">
            <h2 class="section-title text-center">Tanya Jawab (FAQ)</h2>
            <p class="section-subtitle text-center">Pertanyaan yang sering diajukan kepada kami.</p>
            
            <div class="faq-container" style="max-width: 800px; margin: 0 auto;">
                @forelse ($faqs as $faq)
                    <div class="card" style="margin-bottom: 15px; text-align: left;">
                        <h4 style="margin-bottom: 5px; color: var(--primary-color);">{{ $faq->question }}</h4>
                        <p>{{ $faq->answer }}</p>
                    </div>
                @empty
                    <p class="text-center">FAQ belum tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- SECTION KONTAK / CTA -->
    <section class="section-padding contact-section text-center" id="kontak">
        <div class="container">
            <div class="card" style="background: var(--primary-color); color: white; padding: 50px 20px;">
                <h2 class="section-title" style="color: white;">Punya Ide Website?</h2>
                <p class="section-subtitle" style="color: #e0e7ff; margin-bottom: 30px;">Ceritakan kebutuhanmu kepada DevSpark dan mari buat website yang sesuai dengan kebutuhanmu.</p>
                
                @php
                    $waNumber = $settings['whatsapp'] ?? '6281234567890';
                @endphp
                
                <a href="https://wa.me/{{ $waNumber }}" target="_blank" class="btn" style="background: white; color: var(--primary-color); font-size: 1.1rem; padding: 15px 30px;">Mulai Konsultasi</a>
            </div>
        </div>
    </section>

@endsection
