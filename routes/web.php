<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateursController;

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

Route::get('/', function () {
    return view('connexion');
});



Route::post('/connexion', [UtilisateursController::class, 'UtilisateursController'])->name('utilisateur.post');

// Route::get('/admin', function () {
    // return view('admin');
// })->name('admin.get');

Route::get('/login', function () {
    return view('Agent');
})->name('agent.get');

Route::get('/login', function () {
    return view('utilisateur');
})->name('utilisateur.get');

