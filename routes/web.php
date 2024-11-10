<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Rotas de autenticação (login, registro, etc.)
Auth::routes();

// Rota para marcar um serviço como entregue
Route::patch('services/{service}/markAsDelivered', [ServiceController::class, 'markAsDelivered'])->name('services.markAsDelivered');

// Rota /home para página inicial após login
Route::get('/home', function () {
    return view('home'); // Certifique-se de que a view 'home.blade.php' exista
})->middleware('auth')->name('home'); // Adicionando o nome da rota 'home'

// Rota para a página de boas-vindas
Route::get('/', function () {
    return view('welcome');
});

// Rotas protegidas por autenticação (somente usuários logados podem acessar)
Route::middleware(['auth'])->group(function () {
    Route::resource('services', ServiceController::class);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
