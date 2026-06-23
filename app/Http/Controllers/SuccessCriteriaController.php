<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessCriteriaController extends Controller
{
    public function index()
    {
        return view('pages.success-criteria');
    }
}