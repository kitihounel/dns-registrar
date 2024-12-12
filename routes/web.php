<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\DomainController;

=======
use App\Http\Controllers\CustomerController;
>>>>>>> origin/feat_customers

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
    return view('welcome');
});

<<<<<<< HEAD
Route::resource('domains', DomainController::class);


Route::get('/domaine', function () {
    return view('domaine');
});

Route::get('/active', function () {
    return view('active');
});

Route::get('/demande', function () {
    return view('demande');
});

=======

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index'); // Liste des clients
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create'); // Formulaire création
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store'); // Enregistrement
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show'); // Affichage d'un client
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit'); // Formulaire édition
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update'); // Mise à jour
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy'); // Suppression


>>>>>>> origin/feat_customers
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
