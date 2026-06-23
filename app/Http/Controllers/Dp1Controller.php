<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class Dp1Controller extends Controller
{
    public function index(): View
    {
        return view('pages.dp1');
    }
}