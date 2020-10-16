<?php

namespace Database\Factories;

use App\Models\Conta;
use App\Models\Extrato;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExtratoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Extrato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "valor" => $this->faker->rand(-10, 100),
            "contaId" => function(array $att){
                return Conta::find($att["id"])->id;
            }
        ];
    }
}
