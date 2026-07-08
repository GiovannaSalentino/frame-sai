<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DesignPatternController extends Controller
{
    public function index(): View
    {
        $patterns = collect(config('framesai.design_patterns'))
            ->map(fn (array $pattern, string $slug) => [...$pattern, 'slug' => $slug])
            ->values()
            ->all();

        $guidelines = collect(config('framesai.guidelines'))
            ->map(function (array $guideline, string $code) use ($patterns) {
                return [
                    'code' => $code,
                    'count' => collect($patterns)->filter(
                        fn (array $pattern) => in_array($code, $pattern['guidelines'], true)
                    )->count(),
                ];
            })
            ->filter(fn (array $guideline) => $guideline['count'] > 0)
            ->values()
            ->all();

        return view('pages.design-pattern-library', compact('patterns', 'guidelines'));
    }
}
