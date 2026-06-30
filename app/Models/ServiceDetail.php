<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    protected $fillable = [
        'service_category_id',
        'tipe_card',
        'judul',
        'deskripsi',
        'gambar',
        'details',
    ];

    protected $casts = [
        'judul' => 'array',
        'deskripsi' => 'array',
        'details' => 'array',
    ];

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}
