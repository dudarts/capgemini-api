<?php

namespace Database\Seeders;

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
        Usuario::factory()->create();
        //\App\Models\Usuario::factory(10)->create();
        //\App\Models\Conta::factory(10)->create();
        //\App\Models\Extrato::factory(50)->create();
    }
}
