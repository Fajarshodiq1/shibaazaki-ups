<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Documentation::query();

        // Implementasi search
        if ($request->has('search') && !empty($request->search)) {
            $searchTerm = $request->search;
            $query->where('title', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('content', 'LIKE', "%{$searchTerm}%");
        }

        // Urutkan berdasarkan created_at terbaru
        $query->orderBy('created_at', 'desc');

        // Pagination
        $documentations = $query->paginate(10)->withQueryString();

        return view('documentations.index', compact('documentations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documentations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Simpan file image
        $imagePath = $request->file('image')->store('documentations', 'public');

        // Simpan ke database
        Documentation::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('documentations.index')->with('success', 'Documentation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Documentation $documentation)
    {
        return view('documentations.show', compact('documentation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Documentation $documentation)
    {
        return view('documentations.edit', compact('documentation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Documentation $documentation)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        // Jika ada image baru
        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($documentation->image && Storage::disk('public')->exists($documentation->image)) {
                Storage::disk('public')->delete($documentation->image);
            }

            // Simpan image baru
            $data['image'] = $request->file('image')->store('documentations', 'public');
        }

        // Update data
        $documentation->update($data);

        return redirect()->route('documentations.index')->with('success', 'Documentation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documentation $documentation)
    {
        try {
            // Hapus file image jika ada
            if ($documentation->image && Storage::disk('public')->exists($documentation->image)) {
                Storage::disk('public')->delete($documentation->image);
            }

            // Hapus data dari database
            $documentation->delete();

            return redirect()->route('documentations.index')->with('success', 'Documentation deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('documentations.index')->with('error', 'Failed to delete documentation.');
        }
    }
}