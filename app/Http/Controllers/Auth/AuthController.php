<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            if (auth()->check()) {
                redirect()->route('dashboard');
            }

            return view('content.auth.login');
        } catch (Exception $ex) {

        }
    }

    public function authenticateUser(Request $request)
    {
        try {
            if (auth()->check()) {
                return redirect()->route('dashboard');
            }

            $user = User::where('email', $request->email)->first();

            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return redirect()->route('dashboard');
            } else {
                return view('content.auth.login');
            }

        } catch (Exception $ex) {

        }
    }
}