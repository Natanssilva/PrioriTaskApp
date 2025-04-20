<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * @description Método que cadastra um usuário na aplicação
     *
     * @return void
     */
    public function register(Request $request){

        $requestFields = $request->validate([
            'name' => 'required|string|min:5|unique:users,name',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);


        $requestFields['password'] = password_hash($requestFields['password'],PASSWORD_DEFAULT);

        $user = User::create($requestFields);

        if($user){
            auth()->login($user);

            return redirect('/login');
        }
    }
}
