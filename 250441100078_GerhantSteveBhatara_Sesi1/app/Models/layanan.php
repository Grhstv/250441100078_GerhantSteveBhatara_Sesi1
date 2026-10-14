<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_layanan',
        'nama_layanan',
        'jenis',
        'tarif_per_satuan',
    ];

    public function pesanans(): HasMany
    {
        return $this->hasMany(Pesanan::class);
    }
}
