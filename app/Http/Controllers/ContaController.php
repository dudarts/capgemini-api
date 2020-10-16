<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function index()
    {
        return Conta::all();
    }

    public function show($id)
    {
        return Conta::find($id);
    }

    public function store(Request $request)
    {
        return Conta::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $conta = Conta::findOrFail($id);
        $conta->update($request->all());

        return $conta;
    }

    public function delete(Request $request, $id)
    {
        $conta = Conta::findOrFail($id);
        $conta->delete();

        return 204;
    }
}
