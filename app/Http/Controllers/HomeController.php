<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Package;
use App\Models\Portfolio;
use App\Models\Promotion;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Setting;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama website
     */
    public function index()
    {
        // 1. Mengambil data layanan yang aktif
        $services = Service::where('status', true)->get();

        // 2. Mengambil data paket harga yang aktif
        $packages = Package::where('status', true)->get();

        // 3. Mengambil data portfolio yang aktif (dibatasi 6 terbaru)
        $portfolios = Portfolio::where('status', true)->latest()->take(6)->get();

        // 4. Mengambil data promo yang aktif
        $promotions = Promotion::where('status', true)
                               ->where('start_date', '<=', now())
                               ->where('end_date', '>=', now())
                               ->get();

        // 5. Mengambil data testimoni yang aktif
        $testimonials = Testimonial::where('status', true)->latest()->take(6)->get();

        // 6. Mengambil data FAQ yang aktif
        $faqs = Faq::where('status', true)->get();

        // 7. Mengambil pengaturan website (kontak)
        $settings = Setting::pluck('value', 'key')->toArray();

        // Mengirim semua data di atas ke halaman 'pages.home'
        return view('pages.home', compact(
            'services', 
            'packages', 
            'portfolios', 
            'promotions', 
            'testimonials', 
            'faqs', 
            'settings'
        ));
    }
}
