<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    // Menampilkan daftar layanan
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    // Menampilkan form tambah layanan
    public function create()
    {
        return view('admin.services.create');
    }

    // Menyimpan data layanan baru ke database
    public function store(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'name' => 'required|max:255',
            'short_description' => 'required|max:255',
            'icon' => 'required',
            'starting_price' => 'required|numeric',
        ]);

        // 2. Simpan data
        Service::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name), // Membuat URL-friendly string (misal: "Company Profile" jadi "company-profile")
            'short_description' => $request->short_description,
            'description' => $request->description,
            'icon' => $request->icon,
            'starting_price' => $request->starting_price,
            'status' => $request->has('status'), // Checkbox menghasilkan true jika dicentang
        ]);

        // 3. Kembali dengan pesan sukses
        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    // Menampilkan form edit layanan
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    // Memperbarui data layanan
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|max:255',
            'short_description' => 'required|max:255',
            'icon' => 'required',
            'starting_price' => 'required|numeric',
        ]);

        $service->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'short_description' => $request->short_description,
            'description' => $request->description,
            'icon' => $request->icon,
            'starting_price' => $request->starting_price,
            'status' => $request->has('status'),
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    // Menghapus data layanan
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
