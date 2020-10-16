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
        return [
            "saldo" => $this->faker->rand(0, 10000),
            "tipo" => $this->faker->rand(0, 1),
            "usuarioId" => function(array $att){
                return Usuario::find($att["id"])->id;
            }
        ];
    }
}
