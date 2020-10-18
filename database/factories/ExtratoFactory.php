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
        $contas = Conta::all()->pluck("id")->toArray();
        return [
            "valor" => $this->faker->numberBetween($min = -10, $max = 100),
            "contaId" => $this->faker->randomElement($contas)
        ];
    }
}
