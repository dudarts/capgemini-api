<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function show($id)
    {
        return Usuario::find($id);
    }

    public function store(Request $request)
    {
        return Usuario::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Usuario = Usuario::findOrFail($id);
        $Usuario->update($request->all());

        return $Usuario;
    }

    public function delete(Request $request, $id)
    {
        $Usuario = Usuario::findOrFail($id);
        $Usuario->delete();

        return 204;
    }
}
