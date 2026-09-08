<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::latest()->get();
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.packages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'features' => 'required|string', // Kita ambil sebagai string berbaris
        ]);

        // Mengubah baris teks (tiap enter) menjadi array untuk disimpan sebagai JSON
        $featuresArray = array_filter(array_map('trim', explode("\n", $request->features)));

        Package::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'price' => $request->price,
            'features' => $featuresArray,
            'is_recommended' => $request->has('is_recommended'),
            'status' => $request->has('status'),
        ]);

        return redirect()->route('admin.packages.index')->with('success', 'Paket harga berhasil ditambahkan.');
    }

    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'features' => 'required|string',
        ]);

        $featuresArray = array_filter(array_map('trim', explode("\n", $request->features)));

        $package->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'price' => $request->price,
            'features' => $featuresArray,
            'is_recommended' => $request->has('is_recommended'),
            'status' => $request->has('status'),
        ]);

        return redirect()->route('admin.packages.index')->with('success', 'Paket harga berhasil diperbarui.');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('admin.packages.index')->with('success', 'Paket harga berhasil dihapus.');
    }
}
