<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggunaan extends Model
{
    public function pelanggan() {
        return $this->belongsTo(Pelanggan::class);
    }

    public function tagihan() {
        return $this->hasMany(Tagihan::class);
    }

    use HasFactory;

    protected $table = 'penggunaans';
    protected $fillable = ['id', 'tanggal', 'meterawal', 'meterakhir', 'pelanggan_id'];
}
