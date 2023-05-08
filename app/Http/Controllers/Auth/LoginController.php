<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * @throws AuthenticationException
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(!auth()->attempt($credentials)) {
            throw new AuthenticationException();
        }

        $request->session()->regenerate();
        return response()->json(null, 201);
    }
}
