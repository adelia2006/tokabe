<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'nama',
    ];

    protected $casts = [
        'nama' => 'array',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function serviceDetails()
    {
        return $this->hasMany(ServiceDetail::class);
    }
}
