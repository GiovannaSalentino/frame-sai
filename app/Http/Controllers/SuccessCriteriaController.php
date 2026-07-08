<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class SuccessCriteriaController extends Controller
{
    public function index(): View
    {
        $principles = collect(config('framesai.principles'))
            ->map(fn (array $principle, string $code) => [...$principle, 'code' => $code])
            ->values()
            ->all();

        $criteria = collect(config('framesai.success_criteria'))
            ->map(fn (array $criterion, string $code) => [...$criterion, 'code' => $code])
            ->values()
            ->all();

        $guidelines = collect($criteria)
            ->groupBy('guideline')
            ->map(fn ($items, string $code) => ['code' => $code, 'count' => $items->count()])
            ->values()
            ->all();

        return view('pages.success-criteria', compact('principles', 'criteria', 'guidelines'));
    }
}
