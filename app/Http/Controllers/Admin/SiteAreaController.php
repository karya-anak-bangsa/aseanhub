<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteArea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteAreaController extends Controller
{
    public function index()
    {
        $data = SiteArea::orderBy('sort_order')->get();
        return view('modules.site-area.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = SiteArea::findOrFail($id);
        return view('modules.site-area.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $row = SiteArea::findOrFail($id);

        # ---------------- VALIDATION ----------------
        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'required|string',
            'image'         => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'file_path'     => 'nullable|file|max:5120',
            'sort_order'    => 'required|integer',
        ]);

        # ---------------- UPDATE BASIC ----------------
        $row->update([
            'title'         => $request->title,
            'description'   => $request->description,
            'sort_order'    => $request->sort_order,
        ]);

        # ---------------- IMAGE UPLOAD ----------------
        if ($request->hasFile('image')) {

            # delete old
            if ($row->image && Storage::disk('public')->exists($row->image)) {
                Storage::disk('public')->delete($row->image);
            }

            $path = $request->file('image')->store('site-area/images', 'public');

            $row->update([
                'image' => $path
            ]);
        }

        # ---------------- FILE DOWNLOAD ----------------
        if ($request->hasFile('file_path')) {

            # delete old
            if ($row->file_path && Storage::disk('public')->exists($row->file_path)) {
                Storage::disk('public')->delete($row->file_path);
            }

            $path = $request->file('file_path')->store('site-area/files', 'public');

            $row->update([
                'file_path' => $path
            ]);
        }

        return redirect()
            ->route('admin.site-area.index')
            ->with('notify', [
                'status' => 'info',
                'text'   => 'Data successfully updated',
            ]);
    }

    public function destroy(string $id)
    {
        //
    }
}
