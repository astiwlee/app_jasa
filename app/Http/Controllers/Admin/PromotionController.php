<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::latest()->get();
        return view('admin.promotions.index', compact('promotions'));
    }

    public function create()
    {
        return view('admin.promotions.create');
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required', 'discount_value' => 'required|numeric']);
        
        Promotion::create([
            'title' => $request->title,
            'description' => $request->description,
            'discount_type' => $request->discount_type ?? 'percentage',
            'discount_value' => $request->discount_value,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->has('status'),
        ]);

        return redirect()->route('admin.promotions.index')->with('success', 'Promo ditambahkan.');
    }

    public function edit(Promotion $promotion)
    {
        return view('admin.promotions.edit', compact('promotion'));
    }

    public function update(Request $request, Promotion $promotion)
    {
        $request->validate(['title' => 'required', 'discount_value' => 'required|numeric']);
        
        $promotion->update([
            'title' => $request->title,
            'description' => $request->description,
            'discount_type' => $request->discount_type ?? 'percentage',
            'discount_value' => $request->discount_value,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->has('status'),
        ]);

        return redirect()->route('admin.promotions.index')->with('success', 'Promo diperbarui.');
    }

    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect()->route('admin.promotions.index')->with('success', 'Promo dihapus.');
    }
}
