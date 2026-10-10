<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mata_kuliah')->insert([
        'nama_mk' => 'PWL Lanjut',
        'sks' => 3,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    }
}