<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServiceCategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'nama_id' => 'required|string',
            'nama_en' => 'required|string',
        ]);

        $category = new ServiceCategory();
        $category->service_id = $request->service_id;
        $category->nama = [
            'id' => $request->nama_id,
            'en' => $request->nama_en,
        ];
        $category->save();

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_id' => 'required|string',
            'nama_en' => 'required|string',
        ]);

        $category = ServiceCategory::findOrFail($id);
        $category->nama = [
            'id' => $request->nama_id,
            'en' => $request->nama_en,
        ];
        $category->save();

        return redirect()->back()->with('update', 'Kategori berhasil diubah.');
    }

    public function destroy($id)
    {
        $category = ServiceCategory::findOrFail($id);
        $category->delete();
        
        return redirect()->back()->with('delete', 'Kategori berhasil dihapus.');
    }
}
