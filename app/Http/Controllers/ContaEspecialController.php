<?php

namespace App\Http\Controllers;

use App\Models\ContaEspecial;
use Illuminate\Http\Request;

class ContaEspecialController extends Controller
{
    public function index()
    {
        return ContaEspecial::all();
    }

    public function show($id)
    {
        return ContaEspecial::find($id);
    }

    public function store(Request $request)
    {
        return ContaEspecial::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $ContaEspecial = ContaEspecial::findOrFail($id);
        $ContaEspecial->update($request->all());

        return $ContaEspecial;
    }

    public function delete(Request $request, $id)
    {
        $ContaEspecial = ContaEspecial::findOrFail($id);
        $ContaEspecial->delete();

        return 204;
    }
}
