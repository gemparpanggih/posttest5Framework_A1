<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([TarifSeeder::class]);
        $this->call([PelangganSeeder::class]);
        $this->call([PenggunaanSeeder::class]);
        $this->call([PembayaranSeeder::class]);
        $this->call([TagihanSeeder::class]);
    }
}
