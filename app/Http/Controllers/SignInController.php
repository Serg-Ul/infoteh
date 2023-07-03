<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    /**
     * View for sign in.
     *
     *
     * @return View
     */
    public function index(): View {
        return view("auth.signIn");
    }

    /**
     * Store a newly created user in auth session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function signInCreate(Request $request): RedirectResponse {
        $request->validate([
            "email" => "required|email",
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('profile')
                ->withSuccess('Singed in successfully!');
        }

        return redirect()->route('signIn')->withErrors('Sign in credentials are not valid');
    }

    /**
     * Removes a user from auth session and logouts a user.
     *
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(): RedirectResponse {
        Auth::logout();

        return redirect()->route('signIn');
    }
}
