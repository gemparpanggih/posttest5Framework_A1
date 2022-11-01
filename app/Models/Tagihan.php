<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    public function penggunaan() {
        return $this->belongsTo(Penggunaan::class);
    }

    public function pembayaran() {
        return $this->hasMany(Pembayaran::class);
    }

    use HasFactory;

    protected $table = 'tagihans';
    protected $fillable = ['id', 'tanggal', 'jumlahmeter', 'penggunaan_id'];
}
