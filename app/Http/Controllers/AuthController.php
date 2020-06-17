<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $user;
    protected $redirectTo = '/list';

    public function __construct()
    {
        $this->user = new User();
    }

    public function username()
    {
        return 'username';
    }

    public function login(Request $req)
    {
        if (Auth::attempt(['username' => $req->input('username'), 'password' => $req->input('password')])) {
            return redirect()->intended('/list');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to(route('homepage'));
    }

    public function register(Request $req)
    {
        $createSuccess = $this->user->create([
            "first_name" => $req->input('firstName'),
            "last_name" => $req->input('lastName'),
            "username" => $req->input('username'),
            "email" => $req->input('email'),
            "password" => Hash::make($req->input('password')),
            "sex" => $req->input('gender'),
        ]);
        if ($createSuccess)
            return redirect()->to(route('login.show'));
        else
            return redirect()->back();
    }
}
