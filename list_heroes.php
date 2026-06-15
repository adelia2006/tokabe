<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$rows = DB::table('heroes')->get();
foreach ($rows as $row) {
    echo "ID: {$row->id}, Judul: " . json_encode($row->judul) . ", Gambar: {$row->gambar}\n";
}
