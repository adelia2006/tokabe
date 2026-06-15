<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

// Now we know it is nama_kategori and the type was varchar.
// So let's alter to text!
DB::statement('ALTER TABLE portofolio_categories MODIFY nama_kategori TEXT');

$categories = App\Models\PortofolioCategory::all();
foreach($categories as $c) {
    if ($c->id == 10) {
        $c->nama_kategori = json_encode(['id' => 'Solusi IT Acara', 'en' => 'IT Event Solution']);
    } elseif ($c->id == 11) {
        $c->nama_kategori = json_encode(['id' => 'Aktivitas Luar Ruang, Family Gathering & Outbound', 'en' => 'Outdoor activity, Family / Corporate Gathering, & Outbound']);
    } elseif ($c->id == 12) {
        $c->nama_kategori = json_encode(['id' => 'Videografi & Fotografi', 'en' => 'Videography & Photography']);
    } elseif ($c->id == 2) {
        $c->nama_kategori = json_encode(['id' => 'DOOH / Videotron', 'en' => 'DOOH / Videotron']);
    } elseif ($c->id == 3) {
        $c->nama_kategori = json_encode(['id' => 'OOH / Papan Reklame / Baliho', 'en' => 'OOH / Billboard / Baliho']);
    } elseif ($c->id == 4) {
        $c->nama_kategori = json_encode(['id' => 'Papan Tanda / Papan Nama / Neon Box', 'en' => 'Signboard / Nameplate / Neon Box']);
    } else {
        if (!str_starts_with($c->nama_kategori ?? '', '{')) {
            $c->nama_kategori = json_encode(['id' => $c->nama_kategori, 'en' => $c->nama_kategori]);
        }
    }
    $c->save();
}

echo "OK\n";
