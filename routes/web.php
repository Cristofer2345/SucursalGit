<?php
use App\http\controllers\CrudController;
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

Route::get("/", [CrudController::class, "index"])->name("crud.index");
Route::post("/registrar-producto", [CrudController::class, "create"])->name("crud.create");
Route::get("/registrar-Sucursales",[CrudController::class, "mostrar"])->name ("sucursales.show");
Route::get("/registrar-Sucursales-buscar", [CrudController::class, "buscar"])->name("buscar.crud");

