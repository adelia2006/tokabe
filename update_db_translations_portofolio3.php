<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$portfolios = App\Models\Portofolio::all();
foreach($portfolios as $p) {
    if ($p->id == 7) {
        $p->judul = json_encode(['id' => 'Simpati Nonton', 'en' => 'Simpati Nonton']);
        $p->deskripsi = json_encode([
            'id' => "Simpati Nonton – Telkomsel\nAcara Simpati Nonton oleh Telkomsel diselenggarakan di Bundaran SIB dengan dukungan instalasi videotron sebagai media tayang utama. Videotron memberikan pengalaman menonton yang lebih seru dan interaktif, sekaligus memperkuat kehadiran merek Telkomsel di ruang publik melalui kualitas visual yang optimal.",
            'en' => "Simpati Nonton – Telkomsel\nThe Simpati Nonton event by Telkomsel was held at the SIB Roundabout with the support of videotron installations as the main display media. Videotron provides a more exciting and interactive viewing experience, while strengthening Telkomsel's brand presence in public spaces through optimal visual quality."
        ]);
    } elseif ($p->id == 8) {
        $p->judul = json_encode(['id' => 'Honda DBL', 'en' => 'Honda DBL']);
        $p->deskripsi = json_encode([
            'id' => "Honda DBL (Developmental Basketball League) adalah kompetisi bola basket pelajar SMA terbesar di Indonesia yang diadakan di berbagai kota, termasuk Medan. Acara ini diselenggarakan dengan antusiasme tinggi dan Tokabe.id turut serta dalam menyediakan layanan dokumentasi dan dokumentasi digital terbaik, untuk mengabadikan setiap momen berharga sepanjang turnamen.",
            'en' => "The Honda DBL (Developmental Basketball League) is the largest high school basketball competition in Indonesia, held in various cities, including Medan. The event was held with high enthusiasm and Tokabe.id took part in providing the best digital documentation and documentation services, to capture every precious moment throughout the tournament."
        ]);
    } elseif ($p->id == 46) {
        $p->judul = json_encode(['id' => 'Outbound Lanal TBA', 'en' => 'Outbound Lanal TBA']);
        $p->deskripsi = json_encode([
            'id' => "Proyek manajemen acara keluarga besar Lanal TBA, yang diselenggarakan di Wisma Bahari dan Wisma Jangka, mengusung konsep Team Building & Family Fun. Kami menyediakan solusi end-to-end mulai dari perencanaan, registrasi digital, persiapan logistik, hingga pelaksanaan aktivitas outbound yang menarik dan interaktif.",
            'en' => "The Lanal TBA large family event management project, held at Wisma Bahari and Wisma Jangka, carried the concept of Team Building & Family Fun. We provide end-to-end solutions ranging from planning, digital registration, logistical preparation, to executing interesting and interactive outbound activities."
        ]);
    }
    $p->save();
}

echo "OK\n";
