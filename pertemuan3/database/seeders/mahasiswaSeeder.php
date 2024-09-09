<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seedes\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $faker=Faker::create('id_ID');
       for($i=1;  $i <=50; $i++){
        DB::table('matakuliahs')->insert([
            'kodeN'=>'03000811'.$i,
            'nama'=>$faker->name,
            'tahunmasuk'=>2022,
            'jurusan'=>"Sistem Informasi"
        ]);
       }
    } 
}