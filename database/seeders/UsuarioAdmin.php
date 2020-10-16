<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            "nome" => "Eduardo Mendes",
            "cpf" => "12345678900",
            "senha" => md5("12345"),
            "admin" => true
        ]);
    }
}
