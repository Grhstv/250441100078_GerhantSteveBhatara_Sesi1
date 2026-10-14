<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'layanan_id',
        'nama_pelanggan',
        'tanggal_masuk',
        'jumlah',
        'total_biaya',
        'status',
    ];

    protected $casts = [
        'tanggal_masuk' => 'date:Y-m-d',
        'jumlah' => 'float',
    ];

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }
}
