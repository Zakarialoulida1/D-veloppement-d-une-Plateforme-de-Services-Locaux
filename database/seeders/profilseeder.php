<?php

namespace Database\Seeders;

use App\Models\profiles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class profilseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        profiles::factory(10)->create();


        /***********this it work nut it's better to use forctory to generate data and insert them********* */
        // DB::table('profiles')->insert([
        //     'name'=>Str::random(20),()
        //     'email'=> Str::random(10)."@gmail.com",
        //     'password'=>Hash::make('password'),
        //     'bio'=>Str::random(50),
            
        // ]);
    }
}
