<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * @description Método que cadastra um usuário na aplicação
     *
     * 
     */
    public function register(Request $request)
    {

        $requestFields = $request->validate([
            'name' => 'required|string|min:5|unique:users,name',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);


        $requestFields['password'] = password_hash($requestFields['password'], PASSWORD_DEFAULT);

        $user = User::create($requestFields);

        if ($user) {
            // auth()->login($user);

            return redirect('/login');
        }
    }

    /**
     * @description Método que verifica se um usuário existe na base
     *
     * 
     */
    public function verifyLogin(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return response()->json([
                'msg' => 'E-mail ou senha inválidos.'
            ], 401);
        }

        // caso encontre o usuário, realizar login e autenticar via JWT

        return response()->json([
            'msg' => 'Login realizado com sucesso!'
        ], 200);
    }
}
