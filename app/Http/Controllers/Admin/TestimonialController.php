<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate(['customer_name' => 'required', 'message' => 'required']);
        
        Testimonial::create([
            'customer_name' => $request->customer_name,
            'customer_role' => $request->customer_role,
            'message' => $request->message,
            'rating' => $request->rating ?? 5,
            'status' => $request->has('status'),
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni ditambahkan.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate(['customer_name' => 'required', 'message' => 'required']);
        
        $testimonial->update([
            'customer_name' => $request->customer_name,
            'customer_role' => $request->customer_role,
            'message' => $request->message,
            'rating' => $request->rating ?? 5,
            'status' => $request->has('status'),
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni diperbarui.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni dihapus.');
    }
}
