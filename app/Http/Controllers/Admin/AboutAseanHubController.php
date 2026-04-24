<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAseanHub;
use Illuminate\Support\Facades\Storage;

class AboutAseanHubController extends Controller
{
    public function index()
    {
        $data = AboutAseanHub::first();
        return view('modules.about-aseanhub.index', compact('data'));
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
        $data = AboutAseanHub::findOrFail($id);
        return view('modules.about-aseanhub.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $data = AboutAseanHub::findOrFail($id);

        $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $updateData = [
            'title'         => $request->title,
            'description'   => $request->description,
        ];

        // handle upload image
        if ($request->hasFile('image')) {

            // hapus image lama (optional tapi best practice)
            if ($data->image && Storage::disk('public')->exists($data->image)) {
                Storage::disk('public')->delete($data->image);
            }

            // upload image baru
            $updateData['image'] = $request->file('image')->store('about-aseanhub', 'public');
        }

        $data->update($updateData);

        return redirect()
            ->route('admin.about-aseanhub.index')
            ->with('notify', 'Data berhasil diupdate');
    }

    public function destroy(string $id)
    {
        //
    }
}
