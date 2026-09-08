<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Package;
use App\Models\Portfolio;
use App\Models\Promotion;
use App\Models\Testimonial;
use App\Models\Faq;

class AdminController extends Controller
{
    // Halaman Dashboard Utama Admin
    public function dashboard()
    {
        // Menghitung jumlah masing-masing data untuk ditampilkan di dashboard
        $counts = [
            'services' => Service::count(),
            'packages' => Package::count(),
            'portfolios' => Portfolio::count(),
            'promotions' => Promotion::count(),
            'testimonials' => Testimonial::count(),
            'faqs' => Faq::count(),
        ];

        return view('admin.dashboard', compact('counts'));
    }
}
