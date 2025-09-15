<?php

namespace App\Http\Controllers;

use App\Models\UpsBrand;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
class UpsBrandController extends Controller
{
    //
    public function index()
    {
        $upsBrands = UpsBrand::all();
        return view('ups-brands.index', compact('upsBrands'));
    }
    // Show the form for creating a new resource
    public function create()
    {
        return view('ups-brands.create');
    }
    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file_upload' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt|max:5120',
        ]);
        if ($request->hasFile('file_upload')) {
            $validated['file_upload'] = $request->file('file_upload')->store('ups-brand-files', 'public');
        }

        // validate file upload
        if ($request->hasFile('file_upload')) {
            $validated['file_upload'] = $request->file('file_upload')->store('ups-brand-files', 'public');
        }

        // validate image
        if ($request->hasFile('image')) {
            // Simpan gambar ke storage dan dapatkan path-nya
            $validated['image'] = $request->file('image')->store('ups-brands', 'public');
        }

        $validated['image'] = $request->file('image')->store('ups-brands', 'public');

        $upsBrand = UpsBrand::create($validated);

        return redirect()->route('ups-brands.index')->with('success', 'Brand UPS berhasil dibuat.');
    }
    public function show(UpsBrand $upsBrand)
    {
        return view('ups-brands.show', compact('upsBrand'));
    }

    public function edit(UpsBrand $upsBrand)
    {
        return view('ups-brands.edit', compact('upsBrand'));
    }
    
    public function update(Request $request, UpsBrand $upsBrand)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file_upload' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt|max:5120',
        ]);

        // validate file upload
        if ($request->hasFile('file_upload')) {
            // Hapus file lama kalau ada
            if ($upsBrand->file_upload && Storage::disk('public')->exists($upsBrand->file_upload)) {
                Storage::disk('public')->delete($upsBrand->file_upload);
            }
            $validated['file_upload'] = $request->file('file_upload')->store('ups-brand-files', 'public');
        }   

        // validate image
        if ($request->hasFile('image')) {
            // Hapus file lama kalau ada
            if ($upsBrand->image && Storage::disk('public')->exists($upsBrand->image)) {
                Storage::disk('public')->delete($upsBrand->image);
            }
            $validated['image'] = $request->file('image')->store('ups-brands', 'public');
        }


        $upsBrand->update($validated);

        return redirect()->route('ups-brands.index')->with('success', 'Brand UPS berhasil diperbarui.');
    }
    public function destroy(UpsBrand $upsBrand)
    {
        // Delete image
        if ($upsBrand->image && Storage::disk('public')->exists($upsBrand->image)) {
            Storage::disk('public')->delete($upsBrand->image);
        }
        $upsBrand->delete();
        return redirect()->route('ups-brands.index')->with('success', 'Brand UPS berhasil dihapus.');
    }
}