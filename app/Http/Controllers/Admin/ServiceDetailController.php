<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ServiceDetail;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServiceDetailController extends Controller
{
    public function index(Request $request)
    {
        $query = ServiceDetail::with('serviceCategory.service');
        $currentService = null;
        
        if ($request->has('service_id')) {
            $query->whereHas('serviceCategory', function($q) use ($request) {
                $q->where('service_id', $request->service_id);
            });
            $currentService = Service::find($request->service_id);
        }
        
        $details = $query->get();
        $categories = $currentService ? ServiceCategory::where('service_id', $currentService->id)->get() : collect();
        return view('admin.service_detail.index', compact('details', 'currentService', 'categories'));
    }

    public function create(Request $request)
    {
        $services = Service::all();
        $currentService = null;
        $categories = collect();
        if ($request->has('service_id')) {
            $currentService = Service::find($request->service_id);
            $categories = ServiceCategory::where('service_id', $currentService->id)->get();
        }
        return view('admin.service_detail.create', compact('services', 'currentService', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',
            'tipe_card' => 'required|in:main,sub',
            'judul_id' => 'required|string',
            'judul_en' => 'required|string',
            'deskripsi_id' => 'required|string',
            'deskripsi_en' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $data = new ServiceDetail();
        $data->service_category_id = $request->service_category_id;
        $data->tipe_card = $request->tipe_card;
        
        $data->judul = [
            'id' => $request->judul_id,
            'en' => $request->judul_en,
        ];
        
        $data->deskripsi = [
            'id' => $request->deskripsi_id,
            'en' => $request->deskripsi_en,
        ];

        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('service_details', $imageName, 'public');
            $data->gambar = $imageName;
        }

        $data->details = [];
        $data->save();

        return redirect()->route('service-details.index', ['service_id' => $data->serviceCategory->service_id])->with('success', 'Detail Service created successfully.');
    }

    public function edit($id)
    {
        $detail = ServiceDetail::findOrFail($id);
        $categories = ServiceCategory::where('service_id', $detail->serviceCategory->service_id)->get();
        return view('admin.service_detail.edit', compact('detail', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',
            'tipe_card' => 'required|in:main,sub',
            'judul_id' => 'required|string',
            'judul_en' => 'required|string',
            'deskripsi_id' => 'required|string',
            'deskripsi_en' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $data = ServiceDetail::findOrFail($id);
        $data->service_category_id = $request->service_category_id;
        $data->tipe_card = $request->tipe_card;
        
        $data->judul = [
            'id' => $request->judul_id,
            'en' => $request->judul_en,
        ];
        
        $data->deskripsi = [
            'id' => $request->deskripsi_id,
            'en' => $request->deskripsi_en,
        ];

        if ($request->hasFile('gambar')) {
            if ($data->gambar) {
                Storage::disk('public')->delete('service_details/' . $data->gambar);
            }
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('service_details', $imageName, 'public');
            $data->gambar = $imageName;
        }

        $data->details = [];
        $data->save();

        return redirect()->route('service-details.index', ['service_id' => $data->serviceCategory->service_id])->with('success', 'Detail Service updated successfully.');
    }

    public function destroy($id)
    {
        $data = ServiceDetail::findOrFail($id);
        
        if ($data->gambar) {
            Storage::disk('public')->delete('service_details/' . $data->gambar);
        }
        
        if (is_array($data->details)) {
            foreach ($data->details as $card) {
                if (!empty($card['image_url'])) {
                    Storage::disk('public')->delete('service_details/cards/' . $card['image_url']);
                }
            }
        }
        
        $data->delete();
        
        return redirect()->route('service-details.index')->with('delete', 'Detail Service deleted successfully.');
    }
}
