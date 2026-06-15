<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$l4 = App\Models\Lokasi::find(4);
if ($l4) {
    $l4->nama = json_encode(['id' => 'Jl. Brigjend Katamso, Medan ( Di Depan Suzuya )', 'en' => 'Jl. Brigjend Katamso, Medan ( In Front of Suzuya )']);
    $l4->deskripsi_lokasi = json_encode(['id' => 'Tampilan luar ruang STRATEGIS ini terletak di jalan yang SANGAT SIBUK. Titik sempurna untuk kesadaran MEREK Anda.', 'en' => 'This STRATEGIC outdoor display is located at a HIGHLY BUSY street. The perfect spot for your BRAND awareness.']);
    $l4->save();
}

$l5 = App\Models\Lokasi::find(5);
if ($l5) {
    $l5->nama = json_encode(['id' => 'Jl. Ahmad Yani (Kesawan), Medan', 'en' => 'Jl. Ahmad Yani (Kesawan), Medan']);
    $l5->deskripsi_lokasi = json_encode(['id' => 'Tampilan LED mencolok di Area Kesawan yang bersejarah, menangkap banyak pejalan kaki dan lalu lintas.', 'en' => 'Striking LED display at the historic Kesawan Area, capturing high pedestrian and traffic.']);
    $l5->save();
}

echo "Translations updated in Database!\n";
