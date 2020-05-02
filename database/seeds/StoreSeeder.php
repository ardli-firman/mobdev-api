<?php

use App\Store;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Factory $faker)
    {
        DB::table('stores')->insert([
            'name' => 'TECHNO STORE',
            'owner_name' => 'M Ardli Bakhtiar',
            'store_address' => 'Jl manggis',
            'location' => '1.400746, 103.789441',
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('stores')->insert([
            'name' => 'ALADIN STORE',
            'owner_name' => 'M Irfan Maulana',
            'store_address' => 'Jl manggis',
            'location' => '1.900746, 103.789441',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
