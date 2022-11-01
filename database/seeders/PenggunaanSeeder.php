<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunaan = [
            [
                'tanggal' => '2022-10-06',
                'meterawal' => '4000',
                'meterakhir' => '2000',
                'pelanggan_id' => '1',
            ],
            [
                'tanggal' => '2022-10-06',
                'meterawal' => '4000',
                'meterakhir' => '2000',
                'pelanggan_id' => '2',
            ],
            [
                'tanggal' => '2022-10-06',
                'meterawal' => '4000',
                'meterakhir' => '2000',
                'pelanggan_id' => '3',
            ],
            [
                'tanggal' => '2022-10-06',
                'meterawal' => '4000',
                'meterakhir' => '2000',
                'pelanggan_id' => '4',
            ],
            [
                'tanggal' => '2022-10-06',
                'meterawal' => '4000',
                'meterakhir' => '2000',
                'pelanggan_id' => '5',
            ],
        ];

        foreach ($penggunaan as $pgn){
            \App\Models\Penggunaan::firstOrCreate($pgn);
        }
    }
}
