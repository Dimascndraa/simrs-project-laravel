<?php

namespace Database\Seeders;

use App\Models\Ethnic;
use App\Models\Patient;
use App\Models\User;
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

        $this->call(EthnicTableSeeder::class);

        Patient::factory()->count(1000)->create();
        User::factory(10)->create();
        User::create([
            'name' => "Dimas Candra Pebriyanto",
            'email' => "dimascndraa18@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
    }
}
