<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DesignPatternDetailController extends Controller
{
    public function show(string $pattern): View
    {
        $patterns = config('framesai.design_patterns');

        abort_unless(isset($patterns[$pattern]), 404);

        return view('pages.design-pattern-detail', [
            'pattern' => $patterns[$pattern],
            'guidelines' => config('framesai.guidelines'),
            'criteria' => config('framesai.success_criteria'),
        ]);
    }
}
