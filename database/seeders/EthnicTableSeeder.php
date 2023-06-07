<?php

namespace Database\Seeders;

use App\Models\Ethnic;
use Illuminate\Database\Seeder;

class EthnicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ethnicities = [
            ['name' => 'Jawa'],
            ['name' => 'Sunda'],
            ['name' => 'Batak'],
            ['name' => 'Minangkabau'],
            ['name' => 'Madura'],
            ['name' => 'Betawi'],
            ['name' => 'Bugis'],
            ['name' => 'Dayak'],
            ['name' => 'Aceh'],
            ['name' => 'Minahasa'],
            ['name' => 'Bali'],
            ['name' => 'Banjar'],
            ['name' => 'Ambon'],
            ['name' => 'Tionghoa'],
            ['name' => 'Melayu'],
            ['name' => 'Sasak'],
            ['name' => 'Toraja'],
            ['name' => 'Gorontalo'],
            ['name' => 'Flores'],
            ['name' => 'Papua'],
            // Tambahkan etnis lainnya di sini
        ];

        foreach ($ethnicities as $ethnicity) {
            Ethnic::create($ethnicity);
        }
    }
}
