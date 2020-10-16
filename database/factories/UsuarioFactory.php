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
            "cpf" => (string) $this->faker->unique()->rand(10000000000, 99999999999),
            "senha" => $this->faker->rand(1000, 9999),
            "admin" => false
        ];
    }
}
