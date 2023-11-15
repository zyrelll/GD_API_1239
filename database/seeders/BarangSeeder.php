<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::factory()->count(3)->sequence(
            ['nama' => 'Apel'],
            ['nama' => 'Kelengkeng'],
            ['nama' => 'Durian'],
        )->create();
    }
}
