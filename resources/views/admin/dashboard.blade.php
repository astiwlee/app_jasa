@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="grid-3">
        <div class="card" style="border-left: 4px solid var(--primary-color);">
            <h3>Total Layanan</h3>
            <div style="font-size: 36px; font-weight: bold; margin-top: 10px;">{{ $counts['services'] }}</div>
        </div>
        <div class="card" style="border-left: 4px solid var(--accent-color);">
            <h3>Total Paket</h3>
            <div style="font-size: 36px; font-weight: bold; margin-top: 10px;">{{ $counts['packages'] }}</div>
        </div>
        <div class="card" style="border-left: 4px solid #10b981;">
            <h3>Total Portfolio</h3>
            <div style="font-size: 36px; font-weight: bold; margin-top: 10px;">{{ $counts['portfolios'] }}</div>
        </div>
        <div class="card" style="border-left: 4px solid #f59e0b;">
            <h3>Promo Aktif</h3>
            <div style="font-size: 36px; font-weight: bold; margin-top: 10px;">{{ $counts['promotions'] }}</div>
        </div>
        <div class="card" style="border-left: 4px solid #ef4444;">
            <h3>Testimonial</h3>
            <div style="font-size: 36px; font-weight: bold; margin-top: 10px;">{{ $counts['testimonials'] }}</div>
        </div>
        <div class="card" style="border-left: 4px solid #6366f1;">
            <h3>Total FAQ</h3>
            <div style="font-size: 36px; font-weight: bold; margin-top: 10px;">{{ $counts['faqs'] }}</div>
        </div>
    </div>

    <div class="card mt-40">
        <h3>Selamat Datang di Panel Admin DevSpark</h3>
        <p class="mt-15 text-color">Gunakan menu di sebelah kiri untuk mengelola konten website seperti layanan, paket harga, portfolio, promo, dan lainnya. Semua perubahan yang Anda lakukan di sini akan langsung tampil pada halaman utama (publik) website.</p>
    </div>
@endsection
