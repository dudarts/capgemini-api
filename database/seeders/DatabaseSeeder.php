<?php

namespace Database\Seeders;

use App\Models\Conta;
use App\Models\Extrato;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //$this->call(UsuarioAdmin::class);
        //Usuario::factory(10)->create();
        Conta::factory(10)->create();
        Extrato::factory(50)->create();
    }
}
