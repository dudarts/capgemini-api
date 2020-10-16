<?php

namespace App\Http\Controllers;

use App\Models\Extrato;
use Illuminate\Http\Request;

class ExtratoController extends Controller
{
    public function index()
    {
        return Extrato::all();
    }

    public function show($id)
    {
        return Extrato::find($id);
    }

    public function store(Request $request)
    {
        return Extrato::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Extrato = Extrato::findOrFail($id);
        $Extrato->update($request->all());

        return $Extrato;
    }

    public function delete(Request $request, $id)
    {
        $Extrato = Extrato::findOrFail($id);
        $Extrato->delete();

        return 204;
    }
}
