<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignPatternController extends Controller
{
    public function index()
    {
        return view('pages.design-pattern-library');
    }
}