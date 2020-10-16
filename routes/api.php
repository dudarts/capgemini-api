<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/usuario', [UsuarioController::class, 'index']);
Route::post('/usuario', [UsuarioController::class, 'store']);

//
//Route::get('usuario', function() {
//    return Usuario::all();
//});
//
//Route::get('usuario/{id}', function($id) {
//    return Usuario::find($id);
//});
//
//Route::post('usuario', function(Request $request) {
//    return Usuario::create($request->all);
//});
//
//Route::put('usuario/{id}', function(Request $request, $id) {
//    $Usuario = Usuario::findOrFail($id);
//    $Usuario->update($request->all());
//
//    return $Usuario;
//});
//
//Route::delete('usuario/{id}', function($id) {
//    Usuario::find($id)->delete();
//
//    return 204;
//});
