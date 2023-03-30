<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\View\View;


class AuthenticationController extends Controller
{
    public function index(): View
    {
        return view('auth.index');
    }
}
