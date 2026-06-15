<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$l = App\Models\Lokasiooh::find(1);
if ($l) {
    $l->nama = json_encode(['id' => 'Jl. Kapten Maulana Lubis, Medan', 'en' => 'Jl. Kapten Maulana Lubis, Medan']);
    $l->deskripsi_lokasi = json_encode(['id' => 'SECARA STRATEGIS, tampilan OOH luar ruang kami melibatkan PEMAHAMAN mendalam tentang persimpangan yang sibuk. Ini menciptakan AUDIENS YANG LEBIH TERTARGET dan JANGKAUAN YANG LEBIH LUAS.', 'en' => 'STRATEGICALLY, our location outdoor OOH displays involve a thorough UNDERSTANDING of traffic-busy intersections. It creates a MORE TARGETED AUDIENCE and WIDER REACH OUT.']);
    $l->save();
}

$l2 = App\Models\Lokasiooh::find(2);
if ($l2) {
    $l2->nama = json_encode(['id' => 'Jalan R.A Kartini (Bambu Kuning), Lampung', 'en' => 'R.A Kartini Street (Bambu Kuning), Lampung']);
    $l2->deskripsi_lokasi = json_encode(['id' => 'Berada di persimpangan yang SANGAT RAMAI, kami menyediakan Iklan Luar Ruang Premium untuk memaksimalkan JANGKAUAN MERK.', 'en' => 'Located at a HIGHLY TRAFFIC intersection, we provide Premium Outdoor Advertising to maximize BRAND REACH.']);
    $l2->save();
}

echo "Translations updated in Database!\n";
