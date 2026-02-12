<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Laravel\Mcp\Enums\Role;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
     $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users' , 'email') ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
   $user = User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password' => $request->password,
    ]);
     Auth::login($user);
        return redirect('/');
    }
}
