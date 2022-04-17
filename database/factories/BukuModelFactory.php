<?php

namespace Database\Factories;

use App\Models\BukuModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BukuModel>
 */
class BukuModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = BukuModel::class;

    public function definition()
    {
        return [
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,2),
            'book_id' => mt_rand(1,2),
            'rak_id' => mt_rand(1,2),
            'isbn' => $this->faker->randomFloat(2),
            'judul_buku' => $this->faker->words(2, true),
            'jumlah_buku' => mt_rand(1,30),
            'nama_pengarang' => $this->faker->name(),
            'nama_penerbit' => $this->faker->name(),
            'tahun_terbit' => $this->faker->year(),
            'isi_buku' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode('')
        ];
    }
}
