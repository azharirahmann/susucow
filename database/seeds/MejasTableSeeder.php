<?php

use Illuminate\Database\Seeder;
use App\Meja;

class MejasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meja::create([
           'nomor_meja' => '01',
           'kapasitas' => '2'
        ]);
        Meja::create([
            'nomor_meja' => '02',
            'kapasitas' => '2'
        ]);
        Meja::create([
            'nomor_meja' => '03',
            'kapasitas' => '4'
        ]);
        Meja::create([
            'nomor_meja' => '04',
            'kapasitas' => '4'
        ]);
        Meja::create([
            'nomor_meja' => '05',
            'kapasitas' => '4'
        ]);
        Meja::create([
            'nomor_meja' => '06',
            'kapasitas' => '6'
        ]);
        Meja::create([
            'nomor_meja' => '07',
            'kapasitas' => '6'
        ]);
        Meja::create([
            'nomor_meja' => '08',
            'kapasitas' => '8'
        ]);
        Meja::create([
            'nomor_meja' => '09',
            'kapasitas' => '10'
        ]);
        Meja::create([
            'nomor_meja' => '10',
            'kapasitas' => '10'
        ]);
    }
}
