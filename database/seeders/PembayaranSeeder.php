<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembayaran = [
            [
                'tanggalbayar' => '2022-10-06',
                'jumlahbayar' => '4000',
                'tagihan_id' => '1',
            ],
            [
                'tanggalbayar' => '2022-10-06',
                'jumlahbayar' => '4000',
                'tagihan_id' => '2',
            ],
            [
                'tanggalbayar' => '2022-10-06',
                'jumlahbayar' => '4000',
                'tagihan_id' => '3',
            ],
            [
                'tanggalbayar' => '2022-10-06',
                'jumlahbayar' => '4000',
                'tagihan_id' => '4',
            ],
            [
                'tanggalbayar' => '2022-10-06',
                'jumlahbayar' => '4000',
                'tagihan_id' => '5',
            ],
        ];

        foreach ($pembayaran as $pgn){
            \App\Models\Pembayaran::firstOrCreate($pgn);
        }
    }
}
