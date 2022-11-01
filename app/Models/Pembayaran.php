<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    public function tagihan() {
        return $this->belongsTo(Tagihan::class);
    }

    use HasFactory;

    protected $table = 'pembayarans';
    protected $fillable = ['id', 'tanggalbayar', 'jumlahbayar', 'tagihan_id'];
}
