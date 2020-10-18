<?php

namespace Database\Factories;

use App\Models\Conta;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $contas = Conta::all()->pluck("id")->toArray();
        $usuarios = array_diff(Usuario::all()->pluck("id")->toArray(), $contas);
        $tipo = $this->faker->numberBetween($min = 0, $max = 1);
        return [
            "saldo" => $this->faker->numberBetween($min = 0, $max = 10000),
            "tipo" => $tipo,
            "limite" => $tipo == 1 ? 1000 : 0,
            "usuarioId" => $this->faker->randomElement($usuarios)
        ];
    }
}
