<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransparencyPrincipleController extends Controller
{
    public function index()
    {
        return view('pages.principio-trasparenza');
    }
}