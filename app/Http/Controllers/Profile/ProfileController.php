<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ProfileController extends Controller
{
    /**
     * View for profile.
     *
     *
     * @return View
     */
    public function index(): View  {
        return view('profile.index');
    }
}
