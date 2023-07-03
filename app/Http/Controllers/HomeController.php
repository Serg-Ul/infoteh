<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * View for sign in.
     *
     *
     * @return View
     */
    public function index(): View {
        return view('index');
    }
}
