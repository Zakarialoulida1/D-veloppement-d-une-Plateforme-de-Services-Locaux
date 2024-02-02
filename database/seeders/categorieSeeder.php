<?php

namespace Database\Seeders;

use App\Models\categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // categorie::factory(20)->create();
        DB::table('categories')->insert([
            'name'=>'Electricite',
        ]);
        DB::table('categories')->insert([
            'name'=>'Mécanique',
        ]);
        DB::table('categories')->insert([
            'name'=>'Plomberie',
        ]);
        DB::table('categories')->insert([
            'name'=>'Réseau',
        ]);

    }
}
