<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seedes\WithoutModelEvents;
use Illuminate\Database\Seeder;

class matakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('matakuliahs')->insert([
            'kodeMatakuliah'=>'SYS00001',
            'namaMatakuliah'=>'Pemograman Aplikasi Bisnis',
            'sks'=>4,
            
        ]);
        DB::table('matakuliahs')->insert([
            'kodeMatakuliah'=>'SYS00002',
            'namaMatakuliah'=>'Audit dan Kontrol Sistem Informasi',
            'sks'=>4,
            
        ]);
        DB::table('matakuliahs')->insert([
            'kodeMatakuliah'=>'SYS00003',
            'namaMatakuliah'=>'Pemasaran Digital',
            'sks'=>4,
            
        ]);
        DB::table('matakuliahs')->insert([
            'kodeMatakuliah'=>'SYS00004',
            'namaMatakuliah'=>'Dasar Manajemen Keuangan ',
            'sks'=>4,
            
        ]);
       }
    } 

   
