<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



/**
 * criar middleware para verificar se o usuário ta logado na aplicação
 *  caso negativo, seja redirecionado para login
 * caso afirmativo, cai na Home
 * 
 */


/**
 * Rotas de visualização da aplicação 
 */

Route::get('/login', function () {
    return Inertia::render('Login');
});

Route::get('/register', function () {
    return Inertia::render('Register');
});

Route::get('/', function () {
    return Inertia::render('Website');
});

Route::get('/home', function () {
    return Inertia::render('Home');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
});


/**
 * @description Rota para criar um usuário na aplicação
 * @param string Recebe a rota 
 * @param array Recebe o controller responsável pela ação e o método a ser executado
 */

 Route::post('/register', action: [UserController::class, 'register']);
