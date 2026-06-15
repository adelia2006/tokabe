<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$s1 = App\Models\Service::find(1);
if ($s1) {
    $s1->judul = json_encode(['id' => 'DOOH / Videotron', 'en' => 'DOOH / Videotron']);
    $s1->save();
}
$s2 = App\Models\Service::find(2);
if ($s2) {
    $s2->judul = json_encode(['id' => 'OOH / Billboard / Baliho', 'en' => 'OOH / Billboard / Baliho']);
    $s2->save();
}
$s3 = App\Models\Service::find(3);
if ($s3) {
    $s3->judul = json_encode(['id' => 'Fotografi', 'en' => 'Photography']);
    $s3->save();
}
$s4 = App\Models\Service::find(4);
if ($s4) {
    $s4->judul = json_encode(['id' => 'Aktivitas Merek', 'en' => 'Brand Activity']);
    $s4->save();
}
echo "Services translations updated!\n";
