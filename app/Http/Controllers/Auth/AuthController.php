<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{

    public function showLogin()
    {
        return view('pages.auth.login');
    }

    public function handleLogin(LoginRequest $request)
    {
        $input = $request->only('email', 'password');
        dd($input['email']);
        dd('login');
        return redirect(route('list'));
    }

    public function showRegistration()
    {
        return view('pages.auth.registration');
    }

    public function handleRegistration(RegistrationRequest $request)
    {
        dd('registration');
        return view('pages.auth.registration');
    }
}
