<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => '', //nama akan diisi manual
            'deskripsi' => fake()->words(fake()->numberBetween(3,6),true),
            'stok' => fake()->numberBetween(5,10),
        ];
    }
}
