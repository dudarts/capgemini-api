<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nome" => $this->faker->name,
            "cpf" => (string) $this->faker->unique()->numberBetween($min = 10000000000, $max = 99999999999),
            "senha" => $this->faker->numberBetween($min = 1000, $max = 9999),
            "admin" => false
        ];
    }

}
