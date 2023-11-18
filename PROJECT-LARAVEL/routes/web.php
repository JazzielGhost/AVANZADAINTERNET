<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseController;
use App\Http\Controllers\CarController;

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
 
/*Route::view('/', 'welcome'); */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth-login');
});

Route::get('/home', function () {
    return view('home');
});
/*
Route::get('/usuarios', function () {
    return view('usuarios');
});
*/
Route::get('/carritos', [CarController::class, 'index']);
Route::get('/carritos/{id}', [CarController::class, 'show']);

Route::get('/usuarios', [UseController::class, 'index']);
Route::get('/users/{id}', [UseController::class, 'show']);

//rutas para 1-suma 2-resta 3-multiplicar 4-dividir
Route::get('/operacion/{tipo}/{num1}/{num2}', function ($tipo, $num1, $num2) {
    switch ($tipo) {
        case 'suma':
            return '<h1>' . ucfirst($tipo) . ': ' . $num1 . '+' . $num2 . ' = ' . $num1 + $num2 . '</h1>';
        case 'resta':
            return '<h1>' . ucfirst($tipo) . ': ' . $num1 . '-' . $num2 . ' = ' . $num1 - $num2 . '</h1>';
        case 'multiplicacion':
            return '<h1>' . ucfirst($tipo) . ': ' . $num1 . '*' . $num2 . ' = ' . $num1 * $num2 . '</h1>';
        case 'dividir':
            return '<h1>' . ucfirst($tipo) . ': ' . $num1 . '/' . $num2 . ' = ' . $num1 / $num2 . '</h1>';
    }
})->where(['tipo' => '(suma|resta|multiplicacion|dividir)'])
    ->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

//ruta para mostrar saludo, opcional el apellido
Route::get('/buscar-user/{name}/{lastname?}', function ($name, $lastname = 'Doe') {
    return 'Nombre: '.$name . "<br> Apellido: " . $lastname;
})->whereAlpha(['name', 'lastname']);

//saludar con vista
Route::get('/vista/{name}', function ($name) {
    return view('prueba', ['name' => $name]);
})->whereAlpha('name');

//saludar con vista por medio de un controlador
Route::get('/prueba-controler/{name}', [UseController::class, 'index'])->whereAlpha('name');


