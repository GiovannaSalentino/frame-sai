<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryPrinciplesController extends Controller
{
    public function index()
    {
        return view('pages.library-principles');
    }
}