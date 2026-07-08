<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class GuidelinesController extends Controller
{
    public function index(): View
    {
        $principles = collect(config('framesai.principles'))
            ->map(function (array $principle, string $code) {
                $count = collect(config('framesai.guidelines'))
                    ->filter(fn (array $guideline) => in_array($code, $guideline['principles'], true))
                    ->count();

                return [...$principle, 'code' => $code, 'count' => $count];
            })
            ->values()
            ->all();

        $patterns = config('framesai.design_patterns');
        $criteria = config('framesai.success_criteria');

        $guidelines = collect(config('framesai.guidelines'))
            ->map(function (array $guideline, string $code) use ($patterns, $criteria) {
                return [
                    ...$guideline,
                    'code' => $code,
                    'pattern_count' => collect($patterns)->filter(
                        fn (array $pattern) => in_array($code, $pattern['guidelines'], true)
                    )->count(),
                    'criteria_count' => collect($criteria)->where('guideline', $code)->count(),
                ];
            })
            ->values()
            ->all();

        return view('pages.guidelines', compact('principles', 'guidelines'));
    }
}
