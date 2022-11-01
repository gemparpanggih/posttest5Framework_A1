<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagihan = [
            [
                'tanggal' => '2022-10-06',
                'jumlahmeter' => '4000',
                'penggunaan_id' => '1',
            ],
            [
                'tanggal' => '2022-10-06',
                'jumlahmeter' => '4000',
                'penggunaan_id' => '2',
            ],
            [
                'tanggal' => '2022-10-06',
                'jumlahmeter' => '4000',
                'penggunaan_id' => '3',
            ],
            [
                'tanggal' => '2022-10-06',
                'jumlahmeter' => '4000',
                'penggunaan_id' => '4',
            ],
            [
                'tanggal' => '2022-10-06',
                'jumlahmeter' => '4000',
                'penggunaan_id' => '5',
            ],
        ];

        foreach ($tagihan as $tgh){
            \App\Models\Tagihan::firstOrCreate($tgh);
        }
    }
}
