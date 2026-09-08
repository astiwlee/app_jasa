# Dokumentasi DevSpark

Project DevSpark adalah aplikasi profil bisnis (Company Profile / Jasa Digital) yang dibangun menggunakan Laravel 8, HTML, Vanilla CSS, dan JavaScript.

## Persyaratan Sistem
- PHP 8.1+
- Composer
- Database MySQL (Laragon / XAMPP)

## Cara Menjalankan Project

Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi di komputer lokal:

### 1. Konfigurasi Database
1. Buka aplikasi **Laragon** (atau XAMPP) dan pastikan service **MySQL** dan **Apache/Nginx** sudah berjalan (Start).
2. Buka database manager (seperti HeidiSQL atau phpMyAdmin).
3. Buat database baru dengan nama: `app_jasa`.
4. Pastikan file `.env` di dalam project memiliki konfigurasi berikut:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=app_jasa
   DB_USERNAME=root
   DB_PASSWORD=
   ```

### 2. Install Dependensi (Jika baru di-clone)
Buka terminal/CMD di dalam folder project dan jalankan:
```bash
composer install
```

### 3. Generate Key (Jika file .env baru dibuat)
```bash
php artisan key:generate
```

### 4. Jalankan Migrasi dan Seeder
Langkah ini sangat penting untuk membuat tabel-tabel di database dan mengisinya dengan data contoh (dummy data).
Buka terminal/CMD di dalam folder project dan jalankan:
```bash
php artisan migrate:fresh --seed
```
*Catatan: Perintah ini akan menghapus semua data lama dan membuat ulang tabel beserta isinya.*

### 5. Jalankan Server Lokal
```bash
php artisan serve
```
Buka browser dan akses alamat: `http://localhost:8000` (atau gunakan virtual host Laragon seperti `http://app_jasa.test`).

---

## Akses Halaman Admin

Setelah menjalankan perintah `migrate:fresh --seed`, kamu bisa masuk ke panel admin menggunakan akun berikut:

- **URL Login:** `http://localhost:8000/login` (atau `http://app_jasa.test/login`)
- **Email:** `admin@devspark.com`
- **Password:** `password123`

Dari panel admin, kamu bisa mengelola:
1. Layanan
2. Paket Harga
3. Portfolio
4. Promo
5. Testimonial
6. FAQ
7. Informasi Kontak

## Catatan Edukatif untuk Siswa
- **Model & Migration:** Semua struktur tabel database ada di folder `database/migrations`. Model yang menghubungkan kode PHP dengan database ada di folder `app/Models`.
- **Controller:** Logika utama aplikasi ada di `app/Http/Controllers`.
- **Views (Tampilan):** Semua tampilan HTML ada di `resources/views`.
- **Keamanan:** Halaman admin dilindungi oleh `IsAdmin` Middleware (`app/Http/Middleware/IsAdmin.php`) untuk memastikan hanya admin yang bisa masuk.
