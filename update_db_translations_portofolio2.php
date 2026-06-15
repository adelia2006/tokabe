<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

// Alter table first
DB::statement('ALTER TABLE portofolio_categories MODIFY nama_kategori TEXT');
DB::statement('ALTER TABLE portofolios MODIFY judul TEXT');
DB::statement('ALTER TABLE portofolios MODIFY deskripsi TEXT');

// Update PortofolioCategory
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
    } elseif (!str_starts_with($c->nama_kategori ?? '', '{')) {
        $c->nama_kategori = json_encode(['id' => $c->nama_kategori, 'en' => $c->nama_kategori]);
    }
    $c->save();
}

// Update Portofolio
$portfolios = App\Models\Portofolio::all();
foreach($portfolios as $p) {
    if ($p->id == 10) {
        $p->judul = json_encode(['id' => 'Registrasi Fun Run', 'en' => 'Fun Run Registration']);
        $p->deskripsi = json_encode(['id' => 'Fun Run adalah acara olahraga berbasis komunitas yang dirancang untuk mempromosikan gaya hidup sehat, memperkuat hubungan sosial, dan menciptakan suasana yang energik dan menyenangkan', 'en' => 'Fun Run is a community-based sporting event designed to promote healthy lifestyles, strengthen social connections, and create an energetic and fun atmos']);
    } elseif ($p->id == 11) {
        $p->judul = json_encode(['id' => 'Pengaturan Peserta Musda PHRI', 'en' => 'Participant Arrangement Musda PHRI']);
        $p->deskripsi = json_encode(['id' => 'Dirancang untuk memberdayakan transformasi digital dalam administrasi acara, Tokabe.id adalah solusi IT komprehensif yang menyederhanakan logistik yang kompleks', 'en' => 'Designed to empower digital transformation in event administration, Tokabe.id is a comprehensive IT solution that streamlines complex logistics into an']);
    } else {
        if (!str_starts_with($p->judul ?? '', '{')) {
            $p->judul = json_encode(['id' => $p->judul, 'en' => $p->judul]);
        }
        if (!str_starts_with($p->deskripsi ?? '', '{')) {
            $p->deskripsi = json_encode(['id' => $p->deskripsi, 'en' => $p->deskripsi]);
        }
    }
    $p->save();
}

echo "OK\n";
