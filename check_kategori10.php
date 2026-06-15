<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$items = App\Models\Portofolio::where('kategori', 10)->get();
foreach($items as $p) {
    echo "ID: " . $p->id . "\n";
    echo "JUDUL: " . $p->judul . "\n";
}
