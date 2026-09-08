<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Service;
use App\Models\Package;
use App\Models\Portfolio;
use App\Models\Promotion;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Setting;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 1. Akun Admin Demo
        User::create([
            'name' => 'Admin DevSpark',
            'email' => 'admin@devspark.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // 2. Layanan (Services)
        $services = [
            ['name' => 'Company Profile', 'slug' => 'company-profile', 'short_description' => 'Website profesional untuk perusahaan.', 'icon' => '🏢', 'starting_price' => 499000],
            ['name' => 'Undangan Digital', 'slug' => 'undangan-digital', 'short_description' => 'Website undangan pernikahan.', 'icon' => '💌', 'starting_price' => 199000],
            ['name' => 'Portfolio Website', 'slug' => 'portfolio-website', 'short_description' => 'Website personal untuk karya.', 'icon' => '👨‍💻', 'starting_price' => 299000],
            ['name' => 'Sekolah & Organisasi', 'slug' => 'sekolah-organisasi', 'short_description' => 'Platform informasi sekolah.', 'icon' => '🎓', 'starting_price' => 999000],
            ['name' => 'Toko Online', 'slug' => 'toko-online', 'short_description' => 'Website e-commerce lengkap.', 'icon' => '🛒', 'starting_price' => 1499000],
            ['name' => 'Website Maintenance', 'slug' => 'website-maintenance', 'short_description' => 'Layanan perawatan rutin.', 'icon' => '⚙️', 'starting_price' => 99000],
        ];
        foreach ($services as $service) {
            Service::create($service);
        }

        // 3. Paket Harga (Packages)
        Package::create([
            'name' => 'STARTER',
            'slug' => 'starter',
            'price' => 499000,
            'features' => ['1–5 Halaman', 'Responsive Design', 'Custom Design', 'Bantuan Instalasi', 'Revisi 2x'],
            'is_recommended' => false,
        ]);
        Package::create([
            'name' => 'BUSINESS',
            'slug' => 'business',
            'price' => 999000,
            'features' => ['5–10 Halaman', 'Responsive Design', 'Form Kontak & Galeri', 'Integrasi WhatsApp', 'Revisi 3x'],
            'is_recommended' => true,
        ]);
        Package::create([
            'name' => 'PROFESSIONAL',
            'slug' => 'professional',
            'price' => 1999000,
            'features' => ['Website Custom / Web App', 'Database & Login Admin', 'Dashboard Pengelola', 'Fitur Sesuai Kebutuhan', 'Maintenance Lanjutan'],
            'is_recommended' => false,
        ]);

        // 4. Portfolio Demo
        Portfolio::create([
            'title' => 'SMK Bina Harapan', 'slug' => 'smk-bina-harapan', 'category' => 'Sekolah',
            'description' => 'Sistem informasi akademik dan profil sekolah modern.', 'image' => null, 'demo_url' => '#'
        ]);
        Portfolio::create([
            'title' => 'Kopi Kenangan Senja', 'slug' => 'kopi-kenangan-senja', 'category' => 'Company Profile',
            'description' => 'Website profil untuk bisnis cafe lokal.', 'image' => null, 'demo_url' => '#'
        ]);
        Portfolio::create([
            'title' => 'Rani & Budi Wedding', 'slug' => 'rani-budi-wedding', 'category' => 'Undangan',
            'description' => 'Undangan pernikahan digital interaktif.', 'image' => null, 'demo_url' => '#'
        ]);

        // 5. Faqs
        $faqs = [
            ['question' => 'Apakah desain bisa custom?', 'answer' => 'Tentu. Desain akan disesuaikan dengan kebutuhan Anda.'],
            ['question' => 'Berapa lama pengerjaan?', 'answer' => 'Tergantung kompleksitas, biasanya 3-14 hari kerja.'],
            ['question' => 'Apakah bisa pakai hosting sendiri?', 'answer' => 'Sangat bisa. Anda bebas memilih.'],
        ];
        foreach ($faqs as $faq) {
            Faq::create($faq);
        }

        // 6. Settings (Kontak)
        Setting::create(['key' => 'whatsapp', 'value' => '6281234567890']);
        Setting::create(['key' => 'instagram', 'value' => '@devspark']);
        Setting::create(['key' => 'email', 'value' => 'hello@devspark.com']);
        
        // 7. Promo Dummy
        Promotion::create([
            'title' => 'Promo Akhir Tahun',
            'description' => 'Diskon 20% untuk semua paket pembuatan website.',
            'discount_type' => 'percentage',
            'discount_value' => 20,
            'status' => false // Secara default dimatikan
        ]);
    }
}
