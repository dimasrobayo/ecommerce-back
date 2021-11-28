<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model
     *
     * @var string
     */
    protected $model = Product::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->regexify('[A-Za-z0-9]{' . mt_rand(4, 20) . '}'),
            'descripcion' => $this->faker->paragraph(),
            'fecha_inicio' => $this->faker->date('Y-m-d'),
            'fecha_termino' => $this->faker->date('Y-m-d'),
            'precio' => $this->faker->randomDigit(),
            'imagen' => $this->faker->imageUrl($width = 200, $heigth = 200),
            'vendidos' => $this->faker->randomDigit(),
            'tags' => $this->faker->paragraph(),
        ];
    }
}
