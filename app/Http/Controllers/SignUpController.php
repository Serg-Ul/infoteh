<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    /**
     * View for sign up.
     *
     *
     * @return View
     */
    public function index(): View  {
        return view('auth.signUp');
    }

    /**
     * View for sign up.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function signUpCreate(Request $request): RedirectResponse {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect("profile")->withSuccess('Singed up successfully!');
    }
}
