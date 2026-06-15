<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

app()->setLocale('id');

$item = App\Models\Portofolio::find(10);
$judulData = $item->judul ?? $item->title ?? '';

if (is_string($judulData) && str_starts_with($judulData, '{')) {
    $judulArray = json_decode($judulData, true);
} else {
    $judulArray = $judulData;
}

if (is_array($judulArray)) {
    $judulText = $judulArray[app()->getLocale()] ?? $judulArray['id'] ?? $judulArray['en'] ?? collect($judulArray)->first() ?? '';
} else {
    $judulText = $judulArray;
}

echo "LOCALE: " . app()->getLocale() . "\n";
echo "JUDUL DATA: " . $judulData . "\n";
echo "IS STRING? " . (is_string($judulData) ? 'YES' : 'NO') . "\n";
echo "IS ARRAY? " . (is_array($judulArray) ? 'YES' : 'NO') . "\n";
echo "JUDUL TEXT: " . $judulText . "\n";
