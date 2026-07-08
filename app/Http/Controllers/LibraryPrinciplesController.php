<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LibraryPrinciplesController extends Controller
{
    public function index(): View
    {
        $principles = [
            [
                'number' => 'P1',
                'name' => 'Transparency',
                'slug' => 'transparency',
                'description' => 'Makes the functioning, limits and outputs of an AI system understandable.',
                'gradient' => 'from-[#ff5b67] to-[#f91d5e]',
            ],
            [
                'number' => 'P2',
                'name' => 'Fairness',
                'slug' => 'fairness',
                'description' => 'Promotes inclusive behavior and reduces discriminatory outcomes.',
                'gradient' => 'from-[#f36cb5] to-[#d666a0]',
            ],
            [
                'number' => 'P3',
                'name' => 'Automation Level',
                'slug' => 'automation-level',
                'description' => 'Balances system autonomy with meaningful human control.',
                'gradient' => 'from-[#bf79ea] to-[#8d5ac2]',
            ],
            [
                'number' => 'P4',
                'name' => 'Protection',
                'slug' => 'protection',
                'description' => 'Protects people, their data and their safety throughout the interaction.',
                'gradient' => 'from-[#83d6ec] to-[#6098d7]',
            ],
        ];

        return view('pages.library-principles', compact('principles'));
    }
}
