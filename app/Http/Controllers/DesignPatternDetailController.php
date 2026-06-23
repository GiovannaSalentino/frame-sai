<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DesignPatternDetailController extends Controller
{
    public function show(string $pattern): View
    {
        $patterns = [
            '1' => [
                'code' => 'D.P. 1',
                'title' => 'Supervise the AI System',
            ],
            '2' => [
                'code' => 'D.P. 2',
                'title' => "Understand Model's Architecture",
            ],
        ];

        abort_unless(isset($patterns[$pattern]), 404);

        return view('pages.design-pattern-detail', [
            'pattern' => $patterns[$pattern],
        ]);
    }
}