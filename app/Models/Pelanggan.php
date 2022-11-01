<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    public function tarif() {
        return $this->belongsTo(Tarif::class);
    }

    public function penggunaan() {
        return $this->hasMany(Penggunaan::class);
    }

    use HasFactory;

    protected $table = 'pelanggans';
    protected $fillable = ['id', 'username', 'password', 'nometer', 'nama', 'alamat', 'tarif_id'];
}
