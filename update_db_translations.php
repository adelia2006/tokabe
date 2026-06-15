<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$l = App\Models\Lokasi::find(1);
if ($l) {
    $l->nama = json_encode(['id' => 'Jalan Putri Hijau, di sebelah Gedung GMP HM. Yamin & di depan Gedung GMP', 'en' => 'Putri Hijau Street, next to GMP Building HM. Yamin & in front of GMP Building']);
    $l->deskripsi_lokasi = json_encode(['id' => 'Satu-satunya di Medan Videotron dua layar, menghubungkan gerakan vertikal dan horizontal juga MENONJOLKAN GERAKAN SINKRON.', 'en' => 'The ONE and ONLY in Medan two screens Videotron, connecting vertical and horizontal motion also HIGHLIGHTS the SYNCHRONIZED MOTION.']);
    $l->save();
}

$l2 = App\Models\Lokasi::find(2);
if ($l2) {
    $l2->nama = json_encode(['id' => 'Pemandangan dari Jl. Gatot Subroto (Bundaran SIB) Medan', 'en' => 'View from Jl. Gatot Subroto (Bundaran SIB) Medan']);
    $l2->deskripsi_lokasi = json_encode(['id' => 'LED MELENGKUNG IKONIK di Menara SIB Medan! Layar Iklan DOOH, terlihat jelas pada LAYAR LED MELENGKUNG YANG MENCOLOK di atau sekitar menara jam terkemuka.', 'en' => 'An ICONIC CURVE LED on Medan SIB Tower! Display for DOOH Advertising, visually on the STRIKING CURVE LED SCREEN on or around prominent clock tower.']);
    $l2->save();
}

$l3 = App\Models\Lokasi::find(3);
if ($l3) {
    $l3->nama = json_encode(['id' => 'Jl. Kapten Maulana Lubis, Medan', 'en' => 'Jl. Kapten Maulana Lubis, Medan']);
    $l3->deskripsi_lokasi = json_encode(['id' => 'SECARA STRATEGIS, tampilan DOOH luar ruang kami melibatkan PEMAHAMAN mendalam tentang persimpangan yang sibuk. Ini menciptakan AUDIENS YANG LEBIH TERTARGET dan JANGKAUAN YANG LEBIH LUAS.', 'en' => 'STRATEGICALLY, our location outdoor DOOH displays involve a thorough UNDERSTANDING of traffic-busy intersections. It creates a MORE TARGETED AUDIENCE and WIDER REACH OUT.']);
    $l3->save();
}

echo "Translations updated in Database!\n";
