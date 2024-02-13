<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//o nome index colocado ali é o nome do metodo que vai ser chamado dentro da controller(pode ser qualquer nome)
Route::get('/', [HomeController::class, "index"]);

//Resource é para CRUD, é usado em areas restritas pois tem permissão para tudo
// Route::resource("/rota", HomeController::class);

// Route::get('/', function () {
//     return view('blog/home');
// });
