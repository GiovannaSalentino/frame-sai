<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PrincipleController extends Controller
{
    public function show(string $principle): View
    {
        $principles = [
            'transparency' => 'Principle of Transparency',
            'fairness' => 'Principle of Fairness',
            'automation-level' => 'Principle of Automation Level',
            'protection' => 'Principle of Protection',
        ];

        abort_unless(isset($principles[$principle]), 404);

        return view('pages.principle', [
            'title' => $principles[$principle],
        ]);
    }
}