<?php
require 'vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$categories = \App\Models\ServiceCategory::with('serviceDetails')->where('service_id', 20)->get();
$brands = $categories->map(function($cat) {
    $firstDetail = $cat->serviceDetails->where('tipe_card', 'main')->first();
    $otherDetails = $cat->serviceDetails->where('tipe_card', 'sub');
    return (object)[
        'id' => $cat->id,
        'tab_title' => $cat->nama,
        'nama_brand' => is_array($cat->nama) ? ($cat->nama['id'] ?? '') : $cat->nama,
        'judul' => $firstDetail ? $firstDetail->judul : '',
        'deskripsi' => $firstDetail ? $firstDetail->deskripsi : '',
        'gambar' => $firstDetail && $firstDetail->gambar ? asset('storage/service_details/' . $firstDetail->gambar) : 'no',
        'detail' => $otherDetails->map(function($d) {
            return ['title' => $d->judul, 'description' => $d->deskripsi, 'image_url' => $d->gambar ? asset('storage/service_details/' . $d->gambar) : 'no'];
        })->toArray()
    ];
});
echo json_encode($brands);
